{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
@php($publicUrl = rtrim(config('site.public_url'), '/'))
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($locales as $locale)
@foreach ($pages as $page)
    <url>
        <loc>{{ $publicUrl.route($page['route'], ['locale' => $locale], false) }}</loc>
        <lastmod>{{ $lastmod }}</lastmod>
        <changefreq>{{ $page['changefreq'] }}</changefreq>
        <priority>{{ $page['priority'] }}</priority>
    </url>
@endforeach
@endforeach
</urlset>
