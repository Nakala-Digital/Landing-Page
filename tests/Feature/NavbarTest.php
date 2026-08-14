<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class NavbarTest extends TestCase
{
    public function test_hub_and_detail_pages_include_nav_item_in_both_locales(): void
    {
        $this->assertTrue(Route::has('solusi-pendidikan'));
        $this->assertTrue(Route::has('solusi-pendidikan.en'));
        $this->assertTrue(Route::has('solusi-pendidikan.detail'));
        $this->assertTrue(Route::has('solusi-pendidikan.detail.en'));

        $this->get('/solusi-pendidikan')
            ->assertOk()
            ->assertSee('Solusi Pendidikan')
            ->assertSee(route('solusi-pendidikan'));

        $this->get('/en/solusi-pendidikan')
            ->assertOk()
            ->assertSee('Education Solutions')
            ->assertSee(route('solusi-pendidikan.en'));

        $this->get('/solusi-pendidikan/detail/attract-admit')
            ->assertOk()
            ->assertSee('Solusi Pendidikan');

        $this->get('/en/solusi-pendidikan/detail/attract-admit')
            ->assertOk()
            ->assertSee('Education Solutions');
    }

    public function test_education_item_is_active_on_hub_and_detail_pages_but_not_services(): void
    {
        $indent = str_repeat(' ', 20);
        $activeMark = 'after:bg-primary after:rounded-full"'."\n".$indent.'href="';

        $paths = [
            ['/solusi-pendidikan', 'solusi-pendidikan', 'services'],
            ['/solusi-pendidikan/detail/attract-admit', 'solusi-pendidikan', 'services'],
            ['/solutions', 'solusi-pendidikan', 'services'],
            ['/solutions/attract-admit', 'solusi-pendidikan', 'services'],
            ['/en/solusi-pendidikan', 'solusi-pendidikan.en', 'services.en'],
            ['/en/solusi-pendidikan/detail/attract-admit', 'solusi-pendidikan.en', 'services.en'],
            ['/en/solutions/attract-admit', 'solusi-pendidikan.en', 'services.en'],
        ];

        foreach ($paths as [$path, $activeRoute, $inactiveRoute]) {
            $content = $this->get($path)->assertOk()->getContent();

            $this->assertStringContainsString($activeMark.route($activeRoute).'">', $content);
            $this->assertStringNotContainsString($activeMark.route($inactiveRoute).'">', $content);
        }

        $content = $this->get('/services')->assertOk()->getContent();
        $this->assertStringContainsString($activeMark.route('services').'">', $content);
        $this->assertStringNotContainsString($activeMark.route('solusi-pendidikan').'">', $content);
    }

    public function test_services_item_is_active_on_service_detail_and_layanan_alias(): void
    {
        $this->assertTrue(Route::has('layanan.detail'));
        $this->assertTrue(Route::has('layanan.detail.en'));

        $indent = str_repeat(' ', 20);
        $activeMark = 'after:bg-primary after:rounded-full"'."\n".$indent.'href="';

        foreach (['/services/ai-genai' => 'services', '/layanan/ai-genai' => 'services', '/en/layanan/ai-genai' => 'services.en'] as $path => $navRoute) {
            $content = $this->get($path)->assertOk()->getContent();

            $this->assertStringContainsString($activeMark.route($navRoute).'">', $content);
            $this->assertStringNotContainsString($activeMark.route('solusi-pendidikan').'">', $content);
        }

        $this->get('/layanan/does-not-exist')->assertNotFound();
        $this->get('/en/layanan/does-not-exist')->assertNotFound();
    }

    public function test_d2_10_detail_instances_render_in_both_locales(): void
    {
        $slugs = ['attract-admit', 'learn-engage', 'operate-pay', 'manage-grow', 'ai-hiring', 'hrms-mahya', 'crm-ai-admissions', 'd365-support'];

        foreach ($slugs as $slug) {
            $this->get("/solusi-pendidikan/detail/{$slug}")->assertOk();
            $this->get("/en/solusi-pendidikan/detail/{$slug}")->assertOk();
            $this->get("/solutions/{$slug}")->assertOk();
        }

        $this->get('/solusi-pendidikan/detail/does-not-exist')->assertNotFound();
        $this->get('/en/solutions/does-not-exist')->assertNotFound();
    }
}
