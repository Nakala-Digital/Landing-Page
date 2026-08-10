<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title>Project Inquiry | Nakala Digital</title>
</head>

<body style="font-family: Arial, sans-serif; background:#F7FAFC; padding:24px; color:#031A44;">
    <table role="presentation" width="100%"
        style="max-width:600px;margin:0 auto;background:#ffffff;border:1px solid #dee3e6;border-radius:8px;overflow:hidden;">
        <tr>
            <td style="background:#031A44;padding:24px;">
                <h1 style="color:#ffffff;font-size:20px;margin:0;">New Project Inquiry</h1>
                <p style="color:#12AED0;margin:4px 0 0;font-size:13px;">Nakala Digital — Contact Form</p>
            </td>
        </tr>
        <tr>
            <td style="padding:24px;">
                <table role="presentation" width="100%" style="border-collapse:collapse;font-size:14px;">
                    <tr>
                        <td style="padding:8px 0;width:160px;color:#5b6b82;">Nama Lengkap</td>
                        <td style="padding:8px 0;font-weight:600;">{{ $data['full_name'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#5b6b82;">Perusahaan</td>
                        <td style="padding:8px 0;">{{ $data['company'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#5b6b82;">Jabatan</td>
                        <td style="padding:8px 0;">{{ $data['position'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#5b6b82;">Email</td>
                        <td style="padding:8px 0;"><a href="mailto:{{ $data['email'] ?? '' }}"
                                style="color:#12AED0;">{{ $data['email'] ?? '-' }}</a></td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#5b6b82;">Telepon</td>
                        <td style="padding:8px 0;"><a href="tel:{{ $data['phone'] ?? '' }}"
                                style="color:#12AED0;">{{ $data['phone'] ?? '-' }}</a></td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#5b6b82;">Jenis Proyek</td>
                        <td style="padding:8px 0;font-weight:600;">
                            @switch($data['project_type'] ?? '')
                                @case('enterprise_web_app')
                                    Enterprise Web App
                                @break

                                @case('mobile_app')
                                    Mobile App
                                @break

                                @case('cloud_infrastructure')
                                    Cloud Infrastructure
                                @break

                                @case('ai_ml_solutions')
                                    AI / ML Solutions
                                @break

                                @default
                                    {{ $data['project_type'] ?? '-' }}
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#5b6b82;">Rentang Anggaran</td>
                        <td style="padding:8px 0;">
                            @switch($data['budget_range'] ?? '')
                                @case('10k_25k')
                                    $10,000 - $25,000
                                @break

                                @case('25k_50k')
                                    $25,000 - $50,000
                                @break

                                @case('50k_plus')
                                    > $50,000
                                @break

                                @case('not_sure')
                                    Belum Pasti
                                @break

                                @default
                                    {{ $data['budget_range'] ?? '-' }}
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#5b6b82;">Lini Masa</td>
                        <td style="padding:8px 0;">
                            @switch($data['timeline'] ?? '')
                                @case('asap')
                                    Secepatnya (ASAP)
                                @break

                                @case('1_3_months')
                                    1 - 3 Bulan
                                @break

                                @case('3_6_months')
                                    3 - 6 Bulan
                                @break

                                @case('ongoing')
                                    Berkelanjutan (Ongoing)
                                @break

                                @default
                                    {{ $data['timeline'] ?? '-' }}
                            @endswitch
                        </td>
                    </tr>
                </table>

                <div style="margin-top:16px;">
                    <p style="color:#5b6b82;font-size:14px;margin:0 0 4px;">Pesan / Detail Proyek</p>
                    <p
                        style="background:#eff4f7;padding:12px;border-radius:6px;white-space:pre-line;font-size:14px;line-height:1.6;margin:0;">
                        {{ $data['message'] ?? '-' }}
                    </p>
                </div>

                {{-- Action Buttons --}}
                <div style="margin-top:24px; text-align:center;">
                    @if (!empty($data['email']))
                        <a href="mailto:{{ $data['email'] }}"
                            style="background:#031A44; color:#ffffff; padding:10px 18px; text-decoration:none; border-radius:6px; font-size:13px; font-weight:bold; display:inline-block; margin:4px;">
                            Balas via Email
                        </a>
                    @endif

                    @if (!empty($data['phone']))
                        @php
                            $waPhone = preg_replace('/[^0-9]/', '', $data['phone']);
                            if (str_starts_with($waPhone, '0')) {
                                $waPhone = '62' . substr($waPhone, 1);
                            }
                        @endphp
                        <a href="https://wa.me/{{ $waPhone }}"
                            style="background:#25D366; color:#ffffff; padding:10px 18px; text-decoration:none; border-radius:6px; font-size:13px; font-weight:bold; display:inline-block; margin:4px;"
                            target="_blank">
                            Chat via WhatsApp
                        </a>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td style="padding:16px 24px;background:#eff4f7;font-size:12px;color:#5b6b82;">
                Dikirim otomatis dari form kontak nakala.digital pada {{ now()->format('d M Y H:i') }} WIB.
            </td>
        </tr>
    </table>
</body>

</html>
