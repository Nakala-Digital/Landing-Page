<?php

use Illuminate\Support\Facades\Route;

function registerCompanyProfileRoutes($suffix = '')
{
    $prefix = $suffix === '.en' ? '/en' : '';

    Route::view('/', 'pages.home')->name('home'.$suffix);
    Route::view('/home', 'pages.home')->name('home.page'.$suffix);
    Route::view('/company-profile', 'pages.company-profile')->name('company-profile'.$suffix);
    Route::redirect('/about', $prefix.'/company-profile', 301)->name('about'.$suffix);
    Route::view('/services', 'pages.service')->name('services'.$suffix);
    Route::view('/service', 'pages.service')->name('service'.$suffix);
    Route::view('/solutions', 'pages.solutions')->name('solutions'.$suffix);
    Route::get('/solutions/{solution}', function (string $solution) {
        $solutionCase = collect(config('solutions.cases'))->firstWhere('id', $solution);

        abort_unless($solutionCase, 404);

        return view('pages.solution-detail', [
            'solutionCase' => $solutionCase,
        ]);
    })->name('solutions.detail'.$suffix);
    Route::redirect('/delivery', $prefix.'/company-profile', 301)->name('delivery'.$suffix);
    Route::view('/portfolio', 'pages.portfolio')->name('portfolio'.$suffix);
    Route::view('/portopolio', 'pages.portfolio')->name('portopolio'.$suffix);
    Route::view('/partnership', 'pages.partnership')->name('partnership'.$suffix);
    Route::view('/patnership', 'pages.partnership')->name('patnership'.$suffix);
    Route::redirect('/team', $prefix.'/company-profile', 301)->name('team'.$suffix);
    Route::redirect('/team-leadership', $prefix.'/company-profile', 301)->name('team.leadership'.$suffix);
    Route::view('/faq', 'pages.faq')->name('faq'.$suffix);
    Route::view('/insights', 'pages.insights')->name('insights'.$suffix);
    Route::view('/contact', 'pages.contact')->name('contact'.$suffix);

    /* BLOG INSIGHT */
    Route::get('/insights/{slug}', function ($slug) {

        $files = [
            'PPDB',
            'D365',
        ];

        $article = null;
        $portal = null;

        foreach ($files as $p) {

            $data = require config_path("insights/{$p}.php");

            $article = collect($data['articles'])->firstWhere('slug', $slug);

            if ($article) {
                $portal = $p;
                break;
            }
        }

        abort_unless($article, 404);

        return view('pages.insight-detail', compact('article', 'portal'));
    })->name('insights.detail'.$suffix);
}

// English prefix
Route::prefix('en')->group(function () {
    registerCompanyProfileRoutes('.en');
});

// Default (Indonesian)
registerCompanyProfileRoutes();
