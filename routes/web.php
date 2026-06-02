<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

$renderPage = static function (string $locale, string $key) {
    abort_unless(array_key_exists($locale, config('site.locales')), 404);

    app()->setLocale($locale);

    $page = config("site.pages.$key");

    return view($page['view'], [
        'locale' => $locale,
        'pageKey' => $key,
        'page' => array_merge($page, $page['meta'][$locale]),
        'site' => config('site'),
        'content' => config("site.content.$locale"),
    ]);
};

Route::get('/', fn () => redirect()->route('home', ['locale' => config('site.default_locale')]));

Route::prefix('{locale}')
    ->whereIn('locale', array_keys(config('site.locales')))
    ->group(function () use ($renderPage) {
        Route::get('/', fn (string $locale) => $renderPage($locale, 'home'))->name('home');
        Route::get('/about', fn (string $locale) => $renderPage($locale, 'about'))->name('about');
        Route::get('/services', fn (string $locale) => $renderPage($locale, 'services'))->name('services');
        Route::get('/delivery', fn (string $locale) => $renderPage($locale, 'delivery'))->name('delivery');
        Route::get('/portfolio', fn (string $locale) => $renderPage($locale, 'portfolio'))->name('portfolio');
        Route::get('/team', fn (string $locale) => $renderPage($locale, 'team'))->name('team');
        Route::get('/contact', fn (string $locale) => $renderPage($locale, 'contact'))->name('contact');
    });

Route::get('/robots.txt', function () {
    $body = implode("\n", [
        'User-agent: *',
        'Allow: /',
        'Sitemap: '.url('/sitemap.xml'),
        '',
    ]);

    return Response::make($body, 200, ['Content-Type' => 'text/plain']);
})->name('robots');

Route::get('/sitemap.xml', function () {
    return response()
        ->view('sitemap', [
            'pages' => config('site.pages'),
            'locales' => array_keys(config('site.locales')),
            'lastmod' => now()->toAtomString(),
        ], 200)
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
