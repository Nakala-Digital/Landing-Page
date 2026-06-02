@php
    $publicUrl = rtrim($site['public_url'], '/');
    $currentUrl = $publicUrl.route($page['route'], ['locale' => $locale], false);
    $homeUrl = $publicUrl.route('home', ['locale' => $locale], false);
    $defaultHomeUrl = $publicUrl.route('home', ['locale' => $site['default_locale']], false);
    $organizationId = $publicUrl.'/#organization';
    $websiteId = $publicUrl.'/#website';
    $webpageId = $currentUrl.'#webpage';
    $breadcrumbId = $currentUrl.'#breadcrumb';
    $currentNavLabel = $site['brand']['name'];

    foreach ($site['navigation'] as $navItem) {
        if ($navItem['route'] === $page['route']) {
            $currentNavLabel = $navItem['labels'][$locale];
            break;
        }
    }

    $organizationSchema = [
        '@type' => ['Organization', 'ProfessionalService'],
        '@id' => $organizationId,
        'name' => $site['brand']['name'],
        'url' => $defaultHomeUrl,
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $publicUrl.'/'.ltrim($site['brand']['logo_png'], '/'),
        ],
        'image' => $publicUrl.'/'.ltrim($site['brand']['logo_png'], '/'),
        'description' => $content['brand']['description'],
        'telephone' => $site['brand']['phone'],
        'email' => $site['brand']['email'],
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Bandung',
            'addressCountry' => 'ID',
        ],
        'areaServed' => [
            ['@type' => 'Country', 'name' => 'Indonesia'],
            ['@type' => 'Place', 'name' => 'Southeast Asia'],
        ],
        'contactPoint' => [
            [
                '@type' => 'ContactPoint',
                'contactType' => 'sales',
                'telephone' => $site['brand']['phone'],
                'email' => $site['brand']['email'],
                'availableLanguage' => ['Indonesian', 'English'],
                'areaServed' => 'ID',
            ],
        ],
    ];

    $websiteSchema = [
        '@type' => 'WebSite',
        '@id' => $websiteId,
        'url' => $defaultHomeUrl,
        'name' => $site['brand']['name'],
        'alternateName' => 'Nakala',
        'description' => $content['brand']['description'],
        'inLanguage' => $locale,
        'publisher' => ['@id' => $organizationId],
    ];

    $breadcrumbItems = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => $site['navigation'][0]['labels'][$locale],
            'item' => $homeUrl,
        ],
    ];

    if ($page['route'] !== 'home') {
        $breadcrumbItems[] = [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $currentNavLabel,
            'item' => $currentUrl,
        ];
    }

    $breadcrumbSchema = [
        '@type' => 'BreadcrumbList',
        '@id' => $breadcrumbId,
        'itemListElement' => $breadcrumbItems,
    ];

    $webpageSchema = [
        '@type' => match ($page['route']) {
            'about', 'team' => 'AboutPage',
            'contact' => 'ContactPage',
            'services', 'portfolio' => 'CollectionPage',
            default => 'WebPage',
        },
        '@id' => $webpageId,
        'url' => $currentUrl,
        'name' => $page['title'],
        'description' => $page['description'],
        'inLanguage' => $locale,
        'isPartOf' => ['@id' => $websiteId],
        'about' => ['@id' => $organizationId],
        'breadcrumb' => ['@id' => $breadcrumbId],
        'publisher' => ['@id' => $organizationId],
    ];

    $graph = [$organizationSchema, $websiteSchema, $webpageSchema, $breadcrumbSchema];

    foreach ($site['navigation'] as $index => $navItem) {
        $graph[] = [
            '@type' => 'SiteNavigationElement',
            '@id' => $publicUrl.route($navItem['route'], ['locale' => $locale], false).'#navigation',
            'position' => $index + 1,
            'name' => $navItem['labels'][$locale],
            'url' => $publicUrl.route($navItem['route'], ['locale' => $locale], false),
            'isPartOf' => ['@id' => $websiteId],
        ];
    }

    if ($page['route'] === 'services') {
        $serviceItems = [];

        foreach ($content['service_pillar_details'] as $index => $service) {
            $serviceItems[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'item' => [
                    '@type' => 'Service',
                    'name' => $service['title'],
                    'description' => $service['body'],
                    'provider' => ['@id' => $organizationId],
                    'areaServed' => ['@type' => 'Country', 'name' => 'Indonesia'],
                    'serviceType' => $service['title'],
                ],
            ];
        }

        $graph[] = [
            '@type' => 'ItemList',
            '@id' => $currentUrl.'#services',
            'name' => $content['services']['pillars_title'],
            'description' => $content['services']['lead'],
            'itemListElement' => $serviceItems,
        ];
    }

    if ($page['route'] === 'portfolio') {
        $portfolioItems = [];

        foreach ($content['portfolio_items'] as $index => $project) {
            $portfolioItems[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'item' => [
                    '@type' => 'CreativeWork',
                    'name' => $project['name'],
                    'description' => $project['challenge'].' '.$project['solution'],
                    'creator' => ['@id' => $organizationId],
                    'about' => $project['relevant_capability'] ?? [],
                ],
            ];
        }

        $graph[] = [
            '@type' => 'ItemList',
            '@id' => $currentUrl.'#portfolio',
            'name' => $content['portfolio']['title'],
            'description' => $content['portfolio']['lead'],
            'itemListElement' => $portfolioItems,
        ];
    }

    if ($page['route'] === 'team') {
        $teamItems = [];

        foreach ($content['team_members'] as $index => $member) {
            $teamItems[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'item' => [
                    '@type' => 'Person',
                    'name' => $member['name'],
                    'jobTitle' => $member['role'],
                    'worksFor' => ['@id' => $organizationId],
                    'knowsAbout' => $member['focus'] ?? [],
                ],
            ];
        }

        $graph[] = [
            '@type' => 'ItemList',
            '@id' => $currentUrl.'#team',
            'name' => $content['team']['title'],
            'itemListElement' => $teamItems,
        ];
    }

    if ($page['route'] === 'delivery') {
        $deliveryItems = [];

        foreach ($content['delivery_steps'] as $index => $step) {
            $deliveryItems[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $step,
            ];
        }

        $graph[] = [
            '@type' => 'ItemList',
            '@id' => $currentUrl.'#delivery-process',
            'name' => $content['delivery']['agile_title'],
            'description' => $content['delivery']['lead'],
            'itemListElement' => $deliveryItems,
        ];
    }

    $schemaGraph = [
        '@context' => 'https://schema.org',
        '@graph' => $graph,
    ];
@endphp

<script type="application/ld+json">{!! json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
