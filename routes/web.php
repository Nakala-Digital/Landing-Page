<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

function registerCompanyProfileRoutes($suffix = '')
{
    Route::view('/', 'pages.home')->name('home' . $suffix);
    Route::view('/home', 'pages.home')->name('home.page' . $suffix);
    Route::view('/about', 'pages.about')->name('about' . $suffix);
    Route::view('/services', 'pages.service')->name('services' . $suffix);
    Route::view('/service', 'pages.service')->name('service' . $suffix);
    Route::view('/solutions', 'pages.solutions')->name('solutions' . $suffix);
    
    Route::get('/solutions/{solution}', function (string $solution) {
        $solutionCase = collect(config('solutions.cases'))->firstWhere('id', $solution);

        abort_unless($solutionCase, 404);

        return view('pages.solution-detail', [
            'solutionCase' => $solutionCase,
        ]);
    })->name('solutions.detail' . $suffix);

    Route::view('/delivery', 'pages.delivery')->name('delivery' . $suffix);
    Route::view('/portfolio', 'pages.portfolio')->name('portfolio' . $suffix);
    Route::view('/portopolio', 'pages.portfolio')->name('portopolio' . $suffix);
    Route::view('/partnership', 'pages.partnership')->name('partnership' . $suffix);
    Route::view('/patnership', 'pages.partnership')->name('patnership' . $suffix);
    Route::view('/team', 'pages.team')->name('team' . $suffix);
    Route::view('/team-leadership', 'pages.team')->name('team.leadership' . $suffix);
    Route::view('/faq', 'pages.faq')->name('faq' . $suffix);
    Route::view('/insights', 'pages.insights')->name('insights' . $suffix);
    
    // Step 1: Form Kontak
    Route::view('/contact', 'pages.contact')->name('contact' . $suffix);
    Route::post('/contact', [ContactController::class, 'store'])
        ->middleware('throttle:10,1')
        ->name('contact.store' . $suffix);

    // Step 2: Halaman Pilih Jadwal Sesi
    Route::get('/schedule-session', [ContactController::class, 'showSchedule'])
        ->name('booking.schedule' . $suffix);

    // Step 3: Konfirmasi Jadwal (Mengirim Email & Redirect WA)
    Route::post('/booking/confirm', [ContactController::class, 'storeSchedule'])
        ->name('booking.confirm' . $suffix);
}

// English prefix (/en/...)
Route::prefix('en')->group(function () {
    registerCompanyProfileRoutes('.en');
});

// Default (Indonesian)
registerCompanyProfileRoutes();