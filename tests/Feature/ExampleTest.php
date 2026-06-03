<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    private function schemaGraph(string $path): array
    {
        $content = $this->get($path)
            ->assertOk()
            ->getContent();

        preg_match_all('/<script type="application\/ld\+json">(.*?)<\/script>/s', $content, $matches);

        $graphs = [];

        foreach ($matches[1] as $json) {
            $decoded = json_decode(html_entity_decode($json), true);

            if (isset($decoded['@graph'])) {
                $graphs = array_merge($graphs, $decoded['@graph']);
            } elseif (is_array($decoded)) {
                $graphs[] = $decoded;
            }
        }

        return $graphs;
    }

    private function schemaTypes(array $graph): array
    {
        $types = [];
        $walk = function (mixed $value) use (&$walk, &$types): void {
            if (! is_array($value)) {
                return;
            }

            if (isset($value['@type'])) {
                foreach ((array) $value['@type'] as $type) {
                    $types[] = $type;
                }
            }

            foreach ($value as $child) {
                $walk($child);
            }
        };

        $walk($graph);

        return array_values(array_unique($types));
    }

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
                    ->assertSee('rel="canonical" href="'.rtrim(config('site.public_url'), '/').route($page['route'], ['locale' => $locale], false).'"', false)
                    ->assertSee('hreflang="'.$locale.'"', false);
            }
        }
    }

    public function test_root_redirects_to_default_language(): void
    {
        $this->get('/')
            ->assertRedirect(route('home', ['locale' => config('site.default_locale')], false));
    }

    public function test_secondary_pages_use_shared_navigation_shell(): void
    {
        $this->get(route('contact', ['locale' => 'id'], false))
            ->assertOk()
            ->assertSee('Kontak', false)
            ->assertSee('mobile-nav', false)
            ->assertSee('src="'.asset('assets/logo.png').'"', false)
            ->assertSee('rel="icon" type="image/svg+xml" href="'.asset('assets/logo.svg').'"', false)
            ->assertDontSee('class="site-header"', false);
    }

    public function test_navigation_uses_real_pages_not_home_anchors(): void
    {
        $response = $this->get(route('home', ['locale' => 'id'], false))
            ->assertOk()
            ->assertSee('href="'.route('about', ['locale' => 'id']).'"', false)
            ->assertSee('href="'.route('services', ['locale' => 'id']).'"', false)
            ->assertSee('href="'.route('delivery', ['locale' => 'id']).'"', false)
            ->assertSee('href="'.route('portfolio', ['locale' => 'id']).'"', false)
            ->assertSee('id="services-overview"', false)
            ->assertSee('Strategic Partner of Romulus Digital', false)
            ->assertSee('Technology Consulting', false)
            ->assertDontSee('#service-pillars', false)
            ->assertDontSee('#mission', false)
            ->assertDontSee('#agile-delivery', false)
            ->assertDontSee('HIGH VOLTAGE TECH', false)
            ->assertDontSee('NKLA_OS', false);

        $content = $response->getContent();

        $this->assertStringNotContainsString('href="'.route('home', ['locale' => 'id']).'#', $content);
    }

    public function test_google_style_structured_data_is_rendered_without_fake_ratings(): void
    {
        $homeGraph = $this->schemaGraph(route('home', ['locale' => 'id'], false));
        $homeTypes = $this->schemaTypes($homeGraph);
        $homeJson = json_encode($homeGraph, JSON_UNESCAPED_SLASHES);

        $this->assertContains('WebSite', $homeTypes);
        $this->assertContains('BreadcrumbList', $homeTypes);
        $this->assertContains('SiteNavigationElement', $homeTypes);
        $this->assertNotContains('SearchAction', $homeTypes);
        $this->assertNotContains('AggregateRating', $homeTypes);
        $this->assertStringContainsString('https://nakala.digital/id', $homeJson);
        $this->assertStringNotContainsString('http://127.0.0.1:8010', $homeJson);

        $servicesTypes = $this->schemaTypes($this->schemaGraph(route('services', ['locale' => 'id'], false)));
        $this->assertContains('Service', $servicesTypes);
        $this->assertContains('ItemList', $servicesTypes);

        $portfolioTypes = $this->schemaTypes($this->schemaGraph(route('portfolio', ['locale' => 'id'], false)));
        $this->assertContains('CreativeWork', $portfolioTypes);
        $this->assertContains('ItemList', $portfolioTypes);

        $contactTypes = $this->schemaTypes($this->schemaGraph(route('contact', ['locale' => 'en'], false)));
        $this->assertContains('ContactPage', $contactTypes);
        $this->assertContains('ContactPoint', $contactTypes);
    }

    public function test_pdf_capability_details_are_rendered(): void
    {
        $this->get(route('portfolio', ['locale' => 'id'], false))
            ->assertOk()
            ->assertSee('Waktu CV screening dapat berkurang hingga 80%', false)
            ->assertSee('D365 Finance module support', false);

        $this->get(route('contact', ['locale' => 'en'], false))
            ->assertOk()
            ->assertSee('milzam.zihni@romulus.digital', false)
            ->assertSee('nakala.digital', false)
            ->assertSee('Output: project brief, scope document, and solution proposal.', false);
    }

    public function test_robots_and_sitemap_are_available(): void
    {
        $this->get('/robots.txt')
            ->assertOk()
            ->assertSee('Sitemap: '.rtrim(config('site.public_url'), '/').'/sitemap.xml');

        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertSee('<urlset', false)
            ->assertSee(rtrim(config('site.public_url'), '/').route('home', ['locale' => 'id'], false), false)
            ->assertSee(rtrim(config('site.public_url'), '/').route('home', ['locale' => 'en'], false), false);
    }
}
