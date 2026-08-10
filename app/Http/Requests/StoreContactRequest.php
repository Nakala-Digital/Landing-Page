<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreContactRequest extends FormRequest
{
    /**
     * Siapa saja boleh mengirimkan form.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Rules validasi yang longgar & kompatibel dengan input form.
     */
    public function rules(): array
    {
        return [
            'full_name'    => ['required', 'string', 'min:3', 'max:100'],
            'company'      => ['nullable', 'string', 'max:100'],
            'position'     => ['nullable', 'string', 'max:100'],
            // Diubah dari 'email:rfc,dns' menjadi 'email' biasa agar lancar di localhost
            'email'        => ['required', 'email', 'max:150'],
            'phone'        => ['required', 'string'],
            // Dibuat string biasa agar tidak terhalang batas enum yang beda dengan <option> di HTML
            'project_type' => ['required', 'string'],
            'budget_range' => ['nullable', 'string'],
            'timeline'     => ['nullable', 'string'],
            'message'      => ['required', 'string', 'min:5', 'max:2000'],
            // Honeypot field
            'website'      => ['prohibited'],
        ];
    }

    /**
     * Pesan Error Bahasa Indonesia / Inggris
     */
    public function messages(): array
    {
        $isEn = app()->getLocale() === 'en';

        return [
            'full_name.required'    => $isEn ? 'Full name is required.' : 'Nama lengkap wajib diisi.',
            'full_name.min'         => $isEn ? 'Full name must be at least 3 characters.' : 'Nama lengkap minimal 3 karakter.',
            'email.required'        => $isEn ? 'Email address is required.' : 'Alamat email wajib diisi.',
            'email.email'           => $isEn ? 'Please enter a valid email address.' : 'Masukkan alamat email yang valid.',
            'phone.required'        => $isEn ? 'Phone number is required.' : 'Nomor telepon wajib diisi.',
            'project_type.required' => $isEn ? 'Please select a project type.' : 'Silakan pilih jenis proyek.',
            'message.required'      => $isEn ? 'Message / project details is required.' : 'Pesan / detail proyek wajib diisi.',
            'message.min'           => $isEn ? 'Please provide at least 5 characters.' : 'Mohon jelaskan proyek Anda (minimal 5 karakter).',
            'website.prohibited'    => $isEn ? 'Spam detected.' : 'Terindikasi spam.',
        ];
    }

    /**
     * Tangani Request AJAX/Fetch agar tidak error saat validasi gagal
     */
    protected function failedValidation(Validator $validator): void
    {
        if ($this->expectsJson() || $this->ajax()) {
            throw new HttpResponseException(response()->json([
                'message' => app()->getLocale() === 'en'
                    ? 'Please fix the highlighted fields before submitting.'
                    : 'Mohon lengkapi kolom yang wajib diisi dengan benar.',
                'errors'  => $validator->errors(),
            ], 422));
        }

        parent::failedValidation($validator);
    }
}