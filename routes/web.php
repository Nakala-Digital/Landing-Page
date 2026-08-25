<?php

use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailInsightsController;
use Illuminate\Support\Facades\Route;

function registerCompanyProfileRoutes($suffix = '')
{
    $isEn = $suffix === '.en';

    Route::view('/', 'pages.home')->name('home' . $suffix);
    Route::view('/home', 'pages.home')->name('home.page' . $suffix);
    Route::view('/about', 'pages.about')->name('about' . $suffix);

    // Route Solusi
    Route::view('/solusi-pendidikan', 'pages.solutions')->name('solutions' . $suffix);
    Route::view('/solutions', 'pages.solutions');

    Route::get('/solutions/{solution}', function (string $solution) {
        $solutionCase = collect(config('solutions.cases'))->firstWhere('id', $solution);
        abort_unless($solutionCase, 404);
        return view('pages.solution-detail', ['solutionCase' => $solutionCase]);
    })->name('solutions.detail' . $suffix);

    Route::view('/ai-assistant', 'pages.ai-assistant')->name('ai-assistant' . $suffix);
    Route::view('/services', 'pages.service')->name('services' . $suffix);
    Route::view('/service', 'pages.service')->name('service' . $suffix);
    Route::view('/delivery', 'pages.delivery')->name('delivery' . $suffix);
    Route::view('/portfolio', 'pages.portfolio')->name('portfolio' . $suffix);

    // Route Studi Kasus dengan setLocale Otomatis
    Route::get('/studi-kasus', function () use ($isEn) {
        app()->setLocale($isEn ? 'en' : 'id');
        return app(CaseStudyController::class)->index();
    })->name('studi-kasus' . $suffix);

    Route::get('/studi-kasus/{slug}', function (string $slug) use ($isEn) {
        app()->setLocale($isEn ? 'en' : 'id');
        return app(CaseStudyController::class)->show($slug);
    })->name('studi-kasus.show' . $suffix);

    Route::view('/partnership', 'pages.partnership')->name('partnership' . $suffix);
    Route::view('/patnership', 'pages.partnership')->name('patnership' . $suffix);
    Route::view('/team', 'pages.team')->name('team' . $suffix);
    Route::view('/team-leadership', 'pages.team')->name('team.leadership' . $suffix);
    Route::view('/faq', 'pages.faq')->name('faq' . $suffix);

    Route::view('/insights', 'pages.insights')->name('insights' . $suffix);
    // Route untuk halaman detail insight menggunakan parameter slug
    Route::get('/insights/{slug}', [DetailInsightsController::class, 'show'])->name('insights.detail' . $suffix);

    // ================= ROUTE HALAMAN & SUBMIT FORM KONTAK =================
    Route::view('/contact', 'pages.contact')->name('contact' . $suffix);
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store' . $suffix);
}

// English prefix (/en/...)
Route::prefix('en')->group(function () {
    registerCompanyProfileRoutes('.en');
});

// Default (Indonesian)
registerCompanyProfileRoutes();
