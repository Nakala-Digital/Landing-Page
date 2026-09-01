<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Solusi Pendidikan page
    |--------------------------------------------------------------------------
    | Single data home for the /solusi-pendidikan landing page
    | (pages/solusi-pendidikan.blade.php). All copy is bilingual
    | ['en' => ..., 'id' => ...] pairs, mirroring the service-pillars
    | conventions. Prose is transcribed verbatim from the Figma export
    | docs/figma/pages/solusi-pendidikan.css (cross-checked against the PNG
    | via vision); only obvious typos are corrected (e.g. "hybird" -> "hybrid",
    | "pembayran" -> "pembayaran").
    |
    | Sections:
    |   hero          - badge, headline, summary, CTA labels.
    |   needs         - "Pilih Kebutuhan Institusi Anda": two institution cards.
    |                   detail_slug coordinates with Dev 1's
    |                   kebutuhan-institusi/{slug} pages (not registered yet —
    |                   the view must guard the route, see plan STEP-006).
    |   pillars       - "Ekosistem Solusi Pendidikan": 4 ecosystem pillars in a
    |                   2x2 grid; bgColor tokens white|lime|navy|cyan per the
    |                   Figma card colors (Attract & Admit white, Learn & Engage
    |                   navy, Operate & Pay lime, Manage & Grow cyan).
    |                   solution_slug links to /solusi-pendidikan/detail/{slug}.
    |   portfolio     - "Ekosistem Solusi Berbasis Portofolio": ordered
    |                   case ids resolved against config('solutions.cases').
    |   ai_assistant  - navy preview block: intro copy, 2 feature bullets, and
    |                   the WhatsApp chat mockup lines (author:
    |                   ai|user|system|human).
    |   cta           - final cyan banner.
    */

    'hero' => [
        'badge' => [
            'en' => 'EDUCATION SOLUTIONS',
            'id' => 'SOLUSI PENDIDIKAN',
        ],
        'headline' => [
            'en' => 'A Digital Ecosystem for Schools, Foundations, and Higher Education Institutions',
            'id' => 'Ekosistem Digital untuk Sekolah, Yayasan, dan Perguruan Tinggi',
        ],
        'highlight' => [
            'en' => ['Schools, Foundations,', 'Higher Education Institutions'],
            'id' => ['Sekolah, Yayasan,', 'Perguruan Tinggi'],
        ],
        'summary' => [
            'en' => 'Nakala Digital helps educational institutions integrate admissions, learning, student and parent services, payments, operations, and management dashboards into one ecosystem that can be built in stages.',
            'id' => 'Nakala Digital membantu institusi pendidikan mengintegrasikan penerimaan, pembelajaran, layanan siswa dan orang tua, pembayaran, operasional, hingga dashboard manajemen dalam satu ekosistem yang dapat dibangun bertahap.',
        ],
        'cta_primary' => [
            'en' => 'Schedule a Discovery Session',
            'id' => 'Jadwalkan Sesi Discovery',
        ],
        'cta_secondary' => [
            'en' => 'View Education Case Studies',
            'id' => 'Lihat Studi Kasus Pendidikan',
        ],
    ],

    'needs' => [
        'title' => [
            'en' => 'Choose Your Institution\'s Needs',
            'id' => 'Pilih Kebutuhan Institusi Anda',
        ],
        'subtitle' => [
            'en' => 'Modular solutions designed specifically for different education levels and scales.',
            'id' => 'Solusi modular yang dirancang spesifik untuk jenjang dan skala pendidikan yang berbeda.',
        ],
        'cards' => [
            [
                'id' => 'sekolah-yayasan',
                'icon' => 'domain',
                'title' => [
                    'en' => 'Schools & Foundations',
                    'id' => 'Sekolah & Yayasan',
                ],
                'subtitle' => [
                    'en' => 'Integrated solutions for early childhood through senior high school under one foundation umbrella.',
                    'id' => 'Solusi terintegrasi untuk TK, SD, SMP, hingga SMA dalam satu payung yayasan.',
                ],
                'checklist' => [
                    ['en' => 'PPDB and School Website', 'id' => 'PPDB dan website sekolah'],
                    ['en' => 'Parent & Student Portal', 'id' => 'Parent & Student Portal'],
                    ['en' => 'LMS and Assessment', 'id' => 'LMS dan assessment'],
                    ['en' => 'SPP & Payment Gateway', 'id' => 'SPP & Payment Gateway'],
                    ['en' => 'HRIS and Attendance', 'id' => 'HRIS dan absensi'],
                    ['en' => 'Foundation Dashboard', 'id' => 'Dashboard yayasan'],
                    ['en' => 'AI Parent & Admission Assistant', 'id' => 'AI Parent & Admission Assistant'],
                ],
                'cta' => [
                    'en' => 'Explore School Services',
                    'id' => 'Pelajari Layanan Sekolah',
                ],
                'detail_slug' => 'sekolah-yayasan',
            ],
            [
                'id' => 'perguruan-tinggi',
                'icon' => 'school',
                'dark' => true,
                'title' => [
                    'en' => 'Higher Education',
                    'id' => 'Perguruan Tinggi',
                ],
                'subtitle' => [
                    'en' => 'Manage complex academic ecosystems, research, and industry integration for universities and polytechnics.',
                    'id' => 'Kelola ekosistem akademik yang kompleks, riset, hingga integrasi industri untuk Universitas dan Politeknik.',
                ],
                'checklist' => [
                    ['en' => 'PMB and Admission CRM', 'id' => 'PMB dan admission CRM'],
                    ['en' => 'Student Experience Portal', 'id' => 'Student Experience Portal'],
                    ['en' => 'LMS/SIAKAD Integration', 'id' => 'Integrasi LMS/SIAKAD'],
                    ['en' => 'UKT & Payment Service', 'id' => 'UKT/payment service'],
                    ['en' => 'HRIS and Operations', 'id' => 'HRIS dan operasional'],
                    ['en' => 'Career & Assessment', 'id' => 'Career & assessment'],
                    ['en' => 'AI Student & Management Assistant', 'id' => 'AI Student & Management Assistant'],
                ],
                'cta' => [
                    'en' => 'Explore Campus Services',
                    'id' => 'Pelajari Layanan Kampus',
                ],
                'detail_slug' => 'perguruan-tinggi',
            ],
        ],
    ],

    'pillars' => [
        'eyebrow' => [
            'en' => 'CAPABILITY REFERENCE',
            'id' => 'REFERENSI KAPABILITAS',
        ],
        'title' => [
            'en' => 'Education Solutions Ecosystem',
            'id' => 'Ekosistem Solusi Pendidikan',
        ],
        'subtitle' => [
            'en' => 'One platform, four core pillars to streamline your institution\'s entire journey.',
            'id' => 'Satu platform, empat pilar utama untuk menyederhanakan seluruh perjalanan institusi Anda.',
        ],
        'cta' => [
            'en' => 'View Details',
            'id' => 'Lihat Detail',
        ],
        'items' => [
            [
                'id' => 'attract-admit',
                'icon' => 'campaign',
                'bgColor' => 'white',
                'span' => 'md:col-span-7',
                'title' => [
                    'en' => 'Attract & Admit',
                    'id' => 'Attract & Admit',
                ],
                'description' => [
                    'en' => 'Boost applicant conversion with an intuitive PMB portal, automated lead follow-up, and online application fee payments.',
                    'id' => 'Tingkatkan konversi pendaftar dengan portal PMB yang intuitif, otomatisasi follow-up leads, dan pembayaran biaya formulir online.',
                ],
                'solution_slug' => 'attract-admit',
            ],
            [
                'id' => 'learn-engage',
                'icon' => 'menu_book',
                'bgColor' => 'navy',
                'title' => [
                    'en' => 'Learn & Engage',
                    'id' => 'Learn & Engage',
                ],
                'description' => [
                    'en' => 'Deliver a modern hybrid learning experience with an integrated LMS, student collaboration features, and digital attendance tracking.',
                    'id' => 'Sediakan pengalaman belajar hybrid yang modern, dengan LMS terintegrasi, fitur kolaborasi siswa, dan tracking kehadiran digital.',
                ],
                'solution_slug' => 'learn-engage',
            ],
            [
                'id' => 'operate-pay',
                'icon' => 'account_balance_wallet',
                'bgColor' => 'lime',
                'title' => [
                    'en' => 'Operate & Pay',
                    'id' => 'Operate & Pay',
                ],
                'description' => [
                    'en' => 'Automate SPP billing, integrate payment gateways, and manage HR operations through school inventory in one dashboard.',
                    'id' => 'Otomatisasi tagihan SPP, integrasi Payment Gateway, dan kelola operasional SDM hingga inventory sekolah dalam satu dashboard.',
                ],
                'solution_slug' => 'operate-pay',
            ],
            [
                'id' => 'manage-grow',
                'icon' => 'monitoring',
                'bgColor' => 'cyan',
                'span' => 'md:col-span-7',
                'title' => [
                    'en' => 'Manage & Grow',
                    'id' => 'Manage & Grow',
                ],
                'description' => [
                    'en' => 'Make data-driven decisions with analytics dashboards, AI predictive student retention, and institutional accreditation reporting.',
                    'id' => 'Ambil keputusan berbasis data dengan Analytics Dashboard, AI Predictive retensi siswa, dan kelola laporan akreditasi institusi.',
                ],
                'solution_slug' => 'manage-grow',
            ],
        ],
    ],

    'portfolio' => [
        'title' => [
            'en' => 'Portfolio-Based Solutions Ecosystem',
            'id' => 'Ekosistem Solusi Berbasis Portofolio',
        ],
        'subtitle' => [
            'en' => 'Every solution below is mapped from Nakala Digital x Romulus Digital\'s portfolio and capabilities, so each detail points to real delivery areas.',
            'id' => 'Setiap solusi di bawah ini dipetakan dari portofolio dan kapabilitas Nakala Digital x Romulus Digital, sehingga detailnya mengarah ke area delivery yang nyata.',
        ],
        'cta' => [
            'en' => 'View Details',
            'id' => 'Lihat Detail',
        ],
        'case_ids' => ['ai-hiring', 'hrms-mahya', 'hse-operations', 'ppdb-school', 'ai-coach', 'd365-support', 'ai-automation'],
    ],

    'ai_assistant' => [
        'title' => [
            'en' => 'One AI Assistant for Every Education Journey',
            'id' => 'Satu AI Assistant untuk Setiap Perjalanan Pendidikan',
        ],
        'description' => [
            'en' => 'Nakala AI is not just a chatbot. It is a smart assistant that guides prospective students through enrollment, helps teachers prepare quizzes, and lets parents check bills via WhatsApp or the app.',
            'id' => 'Nakala AI bukan sekadar chatbot. Ini adalah asisten cerdas yang mendampingi calon siswa saat mendaftar, membantu guru menyiapkan kuis, dan memudahkan orang tua mengecek tagihan melalui WhatsApp atau Aplikasi.',
        ],
        'features' => [
            [
                'icon' => 'sync_alt',
                'title' => [
                    'en' => 'Context-Aware Responses',
                    'id' => 'Context-Aware Responses',
                ],
                'description' => [
                    'en' => 'The AI understands each user\'s specific academic and financial data.',
                    'id' => 'AI memahami data akademik & keuangan spesifik pengguna.',
                ],
            ],
            [
                'icon' => 'support_agent',
                'title' => [
                    'en' => 'Human Handoff',
                    'id' => 'Human Handoff',
                ],
                'description' => [
                    'en' => 'Automatically hands off to admin staff for complex issues.',
                    'id' => 'Otomatis beralih ke staf admin untuk masalah kompleks.',
                ],
            ],
        ],
        'chat' => [
            'contact' => [
                'en' => 'Nakala AI',
                'id' => 'Nakala AI',
            ],
            'status' => [
                'en' => 'Online',
                'id' => 'Online',
            ],
            'messages' => [
                ['author' => 'ai', 'text' => ['en' => 'Hello Mrs. Sarah! How can I help with your child\'s academics?', 'id' => 'Halo Bu Sarah! Ada yang bisa saya bantu terkait akademik anak Anda?']],
                ['author' => 'user', 'text' => ['en' => 'I\'d like to know the remaining SPP balance for this month.', 'id' => 'Saya ingin tahu sisa tagihan SPP untuk bulan ini.']],
                ['author' => 'ai', 'text' => ['en' => 'The remaining balance for Budi is Rp 750,000. Would you like the payment link?', 'id' => 'Sisa tagihan untuk Ananda Budi adalah Rp 750.000. Ingin link pembayarannya?']],
                ['author' => 'system', 'text' => 'HUMAN AGENT JOINED'],
                ['author' => 'human', 'text' => ['en' => 'Hello ma\'am, this is the Finance Admin. Would you like help with installments?', 'id' => 'Halo Bu, saya Admin Keuangan. Ingin dibantu cicilan?']],
            ],
        ],
    ],

    'cta' => [
        'title' => [
            'en' => 'Ready to start your digital transformation journey?',
            'id' => 'Siap mulai perjalanan transformasi digital Anda?',
        ],
        'description' => [
            'en' => 'Schedule a Discovery Session with our team and explore how we can help your organization grow.',
            'id' => 'Jadwalkan Sesi Discovery bersama tim kami dan jelajahi bagaimana kami dapat membantu organisasi Anda berkembang.',
        ],
        'button' => [
            'en' => 'Schedule a Discovery Session',
            'id' => 'Jadwalkan Sesi Discovery',
        ],
    ],
];
