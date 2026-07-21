<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Service Pillars
    |--------------------------------------------------------------------------
    |
    | The 6 core service pillars displayed on the Layanan & Solusi page.
    | Each card links to a service detail page via /services/{slug}.
    | Background colors: white, lime, navy, cyan (from Figma design).
    |
    */

    'pillars' => [
        [
            'id' => 'ai-genai',
            'icon' => 'psychology',
            'bgColor' => 'white',
            'title' => [
                'en' => 'AI Technology & GenAI',
                'id' => 'AI Technology & GenAI',
            ],
            'description' => [
                'en' => 'Developing AI-based solutions to automate business processes, increase productivity, and support smarter decision-making.',
                'id' => 'Mengembangkan solusi berbasis kecerdasan buatan untuk mengotomatisasi proses bisnis, meningkatkan produktivitas, dan mendukung pengambilan keputusan yang lebih cerdas.',
            ],
            'slug' => 'ai-genai',
        ],
        [
            'id' => 'web-portal',
            'icon' => 'web',
            'bgColor' => 'lime',
            'title' => [
                'en' => 'Web & Portal Development',
                'id' => 'Web & Portal Development',
            ],
            'description' => [
                'en' => 'Building corporate websites, digital portals, CMS, and modern web-based platforms that are responsive and deliver optimal user experience.',
                'id' => 'Mengembangkan website perusahaan, portal digital, CMS, dan platform berbasis web yang modern, responsif, serta memberikan pengalaman pengguna yang optimal.',
            ],
            'slug' => 'web-portal',
        ],
        [
            'id' => 'custom-software',
            'icon' => 'code',
            'bgColor' => 'navy',
            'title' => [
                'en' => 'Custom Software Development',
                'id' => 'Custom Software Development',
            ],
            'description' => [
                'en' => 'Building web, mobile, and enterprise applications tailored to business needs with secure, flexible, and scalable technology.',
                'id' => 'Membangun aplikasi web, mobile, dan sistem enterprise yang dirancang khusus sesuai kebutuhan bisnis dengan teknologi yang aman, fleksibel, dan mudah dikembangkan.',
            ],
            'slug' => 'custom-software',
        ],
        [
            'id' => 'operational-systems',
            'icon' => 'settings_suggest',
            'bgColor' => 'navy',
            'title' => [
                'en' => 'Operational Systems',
                'id' => 'Operational Systems',
            ],
            'description' => [
                'en' => 'Developing operational systems such as HRMS, HSE, cash management, and other industrial solutions to improve organizational efficiency and productivity.',
                'id' => 'Mengembangkan sistem operasional seperti HRMS, HSE, manajemen kas, dan solusi industri lainnya untuk meningkatkan efisiensi dan produktivitas organisasi.',
            ],
            'slug' => 'operational-systems',
        ],
        [
            'id' => 'qa-governance',
            'icon' => 'verified_user',
            'bgColor' => 'cyan',
            'title' => [
                'en' => 'QA Governance & Testing',
                'id' => 'QA Governance & Testing',
            ],
            'description' => [
                'en' => 'Ensuring software quality through testing processes, quality assurance, and development governance so systems are ready for optimal use.',
                'id' => 'Menjamin kualitas perangkat lunak melalui proses pengujian, quality assurance, dan tata kelola pengembangan agar sistem siap digunakan dengan optimal.',
            ],
            'slug' => 'qa-governance',
        ],
        [
            'id' => 'managed-support',
            'icon' => 'support_agent',
            'bgColor' => 'white',
            'title' => [
                'en' => 'Managed Support & Dynamic 365',
                'id' => 'Managed Support & Dynamic 365',
            ],
            'description' => [
                'en' => 'Providing support services, system maintenance, and Microsoft Dynamics 365 implementation to ensure business operations run optimally.',
                'id' => 'Menyediakan layanan dukungan, pemeliharaan sistem, serta implementasi Microsoft Dynamics 365 untuk memastikan operasional bisnis tetap berjalan optimal.',
            ],
            'slug' => 'managed-support',
        ],
    ],
];
