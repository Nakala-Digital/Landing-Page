<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_public_pages_render_seo_metadata(): void
    {
        foreach (array_keys(config('site.locales')) as $locale) {
            foreach (config('site.pages') as $page) {
                $this->get(route($page['route'], ['locale' => $locale], false))
                    ->assertOk()
                    ->assertSee('<title>'.e($page['meta'][$locale]['title']).'</title>', false)
                    ->assertSee('name="description"', false)
                    ->assertSee('rel="canonical"', false)
                    ->assertSee('hreflang="'.$locale.'"', false);
            }
        }
    }

    public function test_root_redirects_to_default_language(): void
    {
        $this->get('/')
            ->assertRedirect(route('home', ['locale' => config('site.default_locale')], false));
    }

    public function test_robots_and_sitemap_are_available(): void
    {
        $this->get('/robots.txt')
            ->assertOk()
            ->assertSee('Sitemap: '.url('/sitemap.xml'));

        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertSee('<urlset', false)
            ->assertSee(route('home', ['locale' => 'id']), false)
            ->assertSee(route('home', ['locale' => 'en']), false);
    }
}
