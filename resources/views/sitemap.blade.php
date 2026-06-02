{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($locales as $locale)
@foreach ($pages as $page)
    <url>
        <loc>{{ route($page['route'], ['locale' => $locale]) }}</loc>
        <lastmod>{{ $lastmod }}</lastmod>
        <changefreq>{{ $page['changefreq'] }}</changefreq>
        <priority>{{ $page['priority'] }}</priority>
    </url>
@endforeach
@endforeach
</urlset>
