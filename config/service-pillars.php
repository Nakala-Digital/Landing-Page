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
    | Detail page fields:
    |   - hero_description: bilingual hero section text
    |   - hero_image: shared full-bleed hero background (Figma 'image 22' pattern)
    |   - capabilities_intro: bilingual intro text for capabilities section
    |   - capabilities: array of capability cards with title + description
    |   - case_studies: array of solution_id strings (looked up from config('solutions.cases'))
    |   - case_studies_label: bilingual uppercase category label shown on the
    |     case-study cards of the detail page (from the Figma exports, e.g.
    |     'AI TECHNOLOGY', 'MANAGED SUPPORT'). Falls back to the case's own
    |     'category' when omitted.
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
            'hero_description' => [
                'en' => 'Developing AI-based solutions to automate business processes, increase productivity, and support smarter decision-making.',
                'id' => 'Mengembangkan solusi berbasis kecerdasan buatan untuk mengotomatisasi proses bisnis, meningkatkan produktivitas, dan mendukung pengambilan keputusan yang lebih cerdas.',
            ],
            'hero_image' => '/images/service-pillars/hero-detail-layanan.webp',
            'capabilities_intro' => [
                'en' => 'Each AI capability is developed to deliver flexible, scalable solutions ready to support digital transformation across various industry sectors.',
                'id' => 'Setiap kapabilitas AI dikembangkan untuk memberikan solusi yang fleksibel, skalabel, dan siap mendukung transformasi digital di berbagai sektor industri.',
            ],
            'capabilities' => [
                [
                    'title' => ['en' => 'GenAI Applications', 'id' => 'GenAI Applications'],
                    'description' => ['en' => 'Innovative generative AI applications to enhance user experience and automate processes across various industries.', 'id' => 'Aplikasi inovatif generative AI untuk meningkatkan pengalaman pengguna dan mengotomatisasi proses di berbagai industri.'],
                ],
                [
                    'title' => ['en' => 'AI SaaS Platform Development', 'id' => 'AI SaaS Platform Development'],
                    'description' => ['en' => 'End-to-end AI-based SaaS product development for B2B and enterprise markets.', 'id' => 'Pengembangan end-to-end produk SaaS berbasis AI untuk pasar B2B dan enterprise.'],
                ],
                [
                    'title' => ['en' => 'AI Hiring & Recruitment', 'id' => 'AI Hiring & Recruitment'],
                    'description' => ['en' => 'AI-powered recruitment solutions for CV screening, candidate scoring, and analytics to optimize hiring processes.', 'id' => 'Solusi rekrutmen berbasis AI untuk screening CV, scoring kandidat, dan analitik guna mengoptimalkan proses hiring.'],
                ],
                [
                    'title' => ['en' => 'Data & Analytics Integration', 'id' => 'Data & Analytics Integration'],
                    'description' => ['en' => 'Intelligence dashboards, automated reporting, and data pipeline development for actionable insights.', 'id' => 'Dashboard intelijen, otomasi pelaporan, dan pengembangan data pipeline untuk insight yang actionable.'],
                ],
                [
                    'title' => ['en' => 'AI Coaching Platforms', 'id' => 'AI Coaching Platforms'],
                    'description' => ['en' => 'Personalized coaching solutions leveraging AI to track performance and create learning paths for users.', 'id' => 'Solusi coaching yang dipersonalisasi memanfaatkan AI untuk melacak performa dan membuat learning path bagi pengguna.'],
                ],
                [
                    'title' => ['en' => 'Microsoft Power Platform', 'id' => 'Microsoft Power Platform'],
                    'description' => ['en' => 'Integration of Power BI, Power Automate, and AI Builder for enterprise clients and digital operations.', 'id' => 'Integrasi Power BI, Power Automate, dan AI Builder untuk klien enterprise dan operasional digital.'],
                ],
                [
                    'title' => ['en' => 'Intelligent Automation', 'id' => 'Intelligent Automation'],
                    'description' => ['en' => 'Automation of repetitive tasks through AI technology, increasing efficiency and freeing up team resources.', 'id' => 'Otomasi tugas repetitif melalui teknologi AI, meningkatkan efisiensi dan membebaskan sumber daya tim.'],
                ],
                [
                    'title' => ['en' => 'Strategic AI Advisory', 'id' => 'Strategic AI Advisory'],
                    'description' => ['en' => 'AI readiness assessment, use case identification, and implementation roadmap for organizations.', 'id' => 'Penilaian kesiapan AI (AI readiness), identifikasi use case, dan roadmap implementasi untuk organisasi.'],
                ],
            ],
            'case_studies' => ['ai-hiring', 'ai-coach'],
            'case_studies_label' => ['en' => 'AI TECHNOLOGY', 'id' => 'AI TECHNOLOGY'],
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
            'hero_description' => [
                'en' => 'Building corporate websites, digital portals, CMS, and modern web-based platforms that are responsive and deliver optimal user experience.',
                'id' => 'Mengembangkan website perusahaan, portal digital, CMS, dan platform berbasis web yang modern, responsif, serta memberikan pengalaman pengguna yang optimal.',
            ],
            'hero_image' => '/images/service-pillars/hero-detail-layanan.webp',
            'capabilities_intro' => [
                'en' => 'Each AI capability is developed to deliver flexible, scalable solutions ready to support digital transformation across various industry sectors.',
                'id' => 'Setiap kapabilitas AI dikembangkan untuk memberikan solusi yang fleksibel, skalabel, dan siap mendukung transformasi digital di berbagai sektor industri.',
            ],
            'capabilities' => [
                [
                    'title' => ['en' => 'Corporate Website Development', 'id' => 'Corporate Website Development'],
                    'description' => ['en' => 'Professional and representative company websites as the main digital face of the organization.', 'id' => 'Website perusahaan yang profesional dan representatif sebagai etalase digital utama organisasi.'],
                ],
                [
                    'title' => ['en' => 'Public-facing Digital Portals', 'id' => 'Public-facing Digital Portals'],
                    'description' => ['en' => 'Public service portals such as online registration and community-based web services.', 'id' => 'Portal layanan publik seperti pendaftaran online dan layanan masyarakat berbasis web.'],
                ],
                [
                    'title' => ['en' => 'CMS Implementation', 'id' => 'CMS Implementation'],
                    'description' => ['en' => 'Content management systems easily managed by non-technical teams without developer dependency.', 'id' => 'Sistem manajemen konten yang mudah dikelola oleh tim non-teknis tanpa bergantung pada developer.'],
                ],
                [
                    'title' => ['en' => 'School & Education Portals', 'id' => 'School & Education Portals'],
                    'description' => ['en' => 'PPDB portals, academic systems, and digital school platforms for foundations and educational institutions.', 'id' => 'Sistem PPDB, portal akademik, dan platform sekolah digital untuk yayasan dan institusi pendidikan.'],
                ],
                [
                    'title' => ['en' => 'E-commerce Development', 'id' => 'E-commerce Development'],
                    'description' => ['en' => 'Online shopping platforms with payment integration and product catalog management.', 'id' => 'Platform belanja daring dengan integrasi pembayaran dan manajemen katalog produk.'],
                ],
                [
                    'title' => ['en' => 'Self-service Portal', 'id' => 'Self-service Portal'],
                    'description' => ['en' => 'Independent portals for parents/citizens to track status, verify documents, and make payments.', 'id' => 'Portal daring mandiri bagi orang tua/warga untuk tracking status, verifikasi dokumen, dan pembayaran.'],
                ],
            ],
            'case_studies' => ['ppdb-school', 'lms-berkemah'],
            'case_studies_label' => ['en' => 'SOFTWARE DEVELOPMENT', 'id' => 'SOFTWARE DEVELOPMENT'],
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
            'hero_description' => [
                'en' => 'Building web, mobile, and enterprise applications tailored to business needs with secure, flexible, and scalable technology.',
                'id' => 'Membangun aplikasi web, mobile, dan sistem enterprise yang dirancang khusus sesuai kebutuhan bisnis dengan teknologi yang aman, fleksibel, dan mudah dikembangkan.',
            ],
            'hero_image' => '/images/service-pillars/hero-detail-layanan.webp',
            'capabilities_intro' => [
                'en' => 'Each AI capability is developed to deliver flexible, scalable solutions ready to support digital transformation across various industry sectors.',
                'id' => 'Setiap kapabilitas AI dikembangkan untuk memberikan solusi yang fleksibel, skalabel, dan siap mendukung transformasi digital di berbagai sektor industri.',
            ],
            'capabilities' => [
                [
                    'title' => ['en' => 'Web Application Development', 'id' => 'Web Application Development'],
                    'description' => ['en' => 'Responsive and performant web applications built on modern frameworks with API-first architecture.', 'id' => 'Aplikasi web yang responsif dan performan, dibangun di atas framework modern dengan arsitektur API-first.'],
                ],
                [
                    'title' => ['en' => 'API & System Integration', 'id' => 'API & System Integration'],
                    'description' => ['en' => 'Connecting existing applications, third-party services, and legacy systems through secure API integration layers.', 'id' => 'Menghubungkan aplikasi yang sudah ada, layanan pihak ketiga, dan sistem lawas melalui lapisan integrasi API yang aman.'],
                ],
                [
                    'title' => ['en' => 'SaaS Platform Development', 'id' => 'SaaS Platform Development'],
                    'description' => ['en' => 'End-to-end SaaS product development, from architecture to deployment for B2B and enterprise markets.', 'id' => 'Pengembangan produk SaaS end-to-end, mulai dari arsitektur hingga deployment untuk pasar B2B dan enterprise.'],
                ],
                [
                    'title' => ['en' => 'Solution Architecture', 'id' => 'Solution Architecture'],
                    'description' => ['en' => 'Scalable solution architecture design aligned with long-term growth needs.', 'id' => 'Perancangan arsitektur solusi yang scalable dan sesuai dengan kebutuhan pertumbuhan jangka panjang.'],
                ],
                [
                    'title' => ['en' => 'Enterprise System Development', 'id' => 'Enterprise System Development'],
                    'description' => ['en' => 'Enterprise-grade systems built to specification and specific organizational business process needs.', 'id' => 'Sistem berskala enterprise yang dibangun sesuai spesifikasi dan kebutuhan proses bisnis khusus organisasi.'],
                ],
                [
                    'title' => ['en' => 'Mobile-friendly Interface', 'id' => 'Mobile-friendly Interface'],
                    'description' => ['en' => 'Interfaces optimized for mobile devices to support field user accessibility.', 'id' => 'Antarmuka yang dioptimalkan untuk perangkat mobile guna mendukung aksesibilitas pengguna di lapangan.'],
                ],
            ],
            'case_studies' => ['erp-platform-bisa', 'lms-berkemah'],
            'case_studies_label' => ['en' => 'SOFTWARE', 'id' => 'SOFTWARE'],
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
            'hero_description' => [
                'en' => 'Developing operational systems such as HRMS, HSE, cash management, and other industrial solutions to improve organizational efficiency and productivity.',
                'id' => 'Mengembangkan sistem operasional seperti HRMS, HSE, manajemen kas, dan solusi industri lainnya untuk meningkatkan efisiensi dan produktivitas organisasi.',
            ],
            'hero_image' => '/images/service-pillars/hero-detail-layanan.webp',
            'capabilities_intro' => [
                'en' => 'Each AI capability is developed to deliver flexible, scalable solutions ready to support digital transformation across various industry sectors.',
                'id' => 'Setiap kapabilitas AI dikembangkan untuk memberikan solusi yang fleksibel, skalabel, dan siap mendukung transformasi digital di berbagai sektor industri.',
            ],
            'capabilities' => [
                [
                    'title' => ['en' => 'HRMS (Human Resource Management System)', 'id' => 'HRMS (Human Resource Management System)'],
                    'description' => ['en' => 'Centralized employee management for attendance, leave, payroll, and data with self-service access.', 'id' => 'Manajemen absensi, cuti, payroll, dan data karyawan secara terpusat dengan akses self-service.'],
                ],
                [
                    'title' => ['en' => 'Asset Management', 'id' => 'Asset Management'],
                    'description' => ['en' => 'Centralized corporate asset management with real-time visibility.', 'id' => 'Pengelolaan aset perusahaan secara terpusat dengan visibilitas real-time.'],
                ],
                [
                    'title' => ['en' => 'HSE (Health, Safety & Environment) Platform', 'id' => 'HSE (Health, Safety & Environment) Platform'],
                    'description' => ['en' => 'Digital incident reporting, safety checklists, and compliance dashboards for workplace safety.', 'id' => 'Pelaporan insiden digital, safety checklist, dan compliance dashboard untuk keselamatan kerja.'],
                ],
                [
                    'title' => ['en' => 'Industry-specific Operational Platform', 'id' => 'Industry-specific Operational Platform'],
                    'description' => ['en' => 'Operational systems tailored to specific client industry needs.', 'id' => 'Sistem operasional yang disesuaikan dengan kebutuhan spesifik industri klien.'],
                ],
                [
                    'title' => ['en' => 'Cash & Financial Management', 'id' => 'Cash & Financial Management'],
                    'description' => ['en' => 'Cash, installment, and financial management for communities and organizations.', 'id' => 'Manajemen kas, tagihan, dan pengelolaan keuangan untuk komunitas maupun organisasi.'],
                ],
                [
                    'title' => ['en' => 'Approval Workflow & Self-service', 'id' => 'Approval Workflow & Self-service'],
                    'description' => ['en' => 'Structured approval workflows and self-service access for employees and end users.', 'id' => 'Alur persetujuan yang terstruktur dan akses self-service bagi karyawan maupun pengguna akhir.'],
                ],
            ],
            'case_studies' => ['erp-platform-bisa', 'hrms-mahya', 'hse-operations'],
            'case_studies_label' => ['en' => 'OPERATIONAL SYSTEMS', 'id' => 'OPERATIONAL SYSTEMS'],
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
            'hero_description' => [
                'en' => 'Ensuring software quality through testing processes, quality assurance, and development governance so systems are ready for optimal use.',
                'id' => 'Menjamin kualitas perangkat lunak melalui proses pengujian, quality assurance, dan tata kelola pengembangan agar sistem siap digunakan dengan optimal.',
            ],
            'hero_image' => '/images/service-pillars/hero-detail-layanan.webp',
            'capabilities_intro' => [
                'en' => 'Each AI capability is developed to deliver flexible, scalable solutions ready to support digital transformation across various industry sectors.',
                'id' => 'Setiap kapabilitas AI dikembangkan untuk memberikan solusi yang fleksibel, skalabel, dan siap mendukung transformasi digital di berbagai sektor industri.',
            ],
            'capabilities' => [
                [
                    'title' => ['en' => 'Requirement Review', 'id' => 'Requirement Review'],
                    'description' => ['en' => 'Functional and non-functional requirement validation before development begins.', 'id' => 'Validasi kebutuhan fungsional dan non-fungsional sebelum tahap pengembangan dimulai.'],
                ],
                [
                    'title' => ['en' => 'BAST, Handover & Warranty', 'id' => 'BAST, Handover & Warranty'],
                    'description' => ['en' => 'Official delivery documentation, knowledge transfer, and post-launch warranty support.', 'id' => 'Dokumentasi serah terima resmi, transfer pengetahuan, dan dukungan garansi pasca-peluncuran.'],
                ],
                [
                    'title' => ['en' => 'Test Planning & SIT/UAT', 'id' => 'Test Planning & SIT/UAT'],
                    'description' => ['en' => 'Structured test scenario planning along with formal User Acceptance Testing.', 'id' => 'Perencanaan skenario uji tersrtruktur beserta pengujian penerimaan pengguna (User Acceptance Testing) secara formal.'],
                ],
                [
                    'title' => ['en' => 'Sprint-based QA Cycle', 'id' => 'Sprint-based QA Cycle'],
                    'description' => ['en' => 'QA cycle integrated into sprints: backlog refinement, sprint planning, daily scrum, sprint review, and retrospective.', 'id' => 'Siklus QA terintegrasi dalam sprint: backlog refinement, sprint planning, daily scrum, sprint review, dan retrospective.'],
                ],
                [
                    'title' => ['en' => 'Bug Tracking & Release Readiness', 'id' => 'Bug Tracking & Release Readiness'],
                    'description' => ['en' => 'Issue recording, severity-based prioritization, and release readiness go/no-go assessment.', 'id' => 'Pencatatan issue, klasifikasi tingkat kepentuhan (severity), dan penilaian kelayakan rilis (go/no-go).'],
                ],
                [
                    'title' => ['en' => 'Design Thinking Validation', 'id' => 'Design Thinking Validation'],
                    'description' => ['en' => 'Define-ideate-prototype-evaluate process to ensure solutions match user needs from the start.', 'id' => 'Proses discover-define-ideate-prototype-evaluate untuk memastikan solusi sesuai kebutuhan pengguna sejak awal.'],
                ],
            ],
            'case_studies' => ['ppdb-school'],
            'case_studies_label' => ['en' => 'WEB/PORTAL', 'id' => 'WEB/PORTAL'],
        ],

        [
            'id' => 'managed-support',
            'icon' => 'support_agent',
            'bgColor' => 'white',
            'title' => [
                'en' => 'Managed Support & Dynamics 365',
                'id' => 'Managed Support & Dynamics 365',
            ],
            'description' => [
                'en' => 'Providing support services, system maintenance, and Microsoft Dynamics 365 implementation to ensure business operations run optimally.',
                'id' => 'Menyediakan layanan dukungan, pemeliharaan sistem, serta implementasi Microsoft Dynamics 365 untuk memastikan operasional bisnis tetap berjalan optimal.',
            ],
            'slug' => 'managed-support',
            'hero_description' => [
                'en' => 'Providing support services, system maintenance, and Microsoft Dynamics 365 implementation to ensure business operations run optimally.',
                'id' => 'Menyediakan layanan dukungan, pemeliharaan sistem, serta implementasi Microsoft Dynamics 365 untuk memastikan operasional bisnis tetap berjalan optimal.',
            ],
            'hero_image' => '/images/service-pillars/hero-detail-layanan.webp',
            'capabilities_intro' => [
                'en' => 'Each AI capability is developed to deliver flexible, scalable solutions ready to support digital transformation across various industry sectors.',
                'id' => 'Setiap kapabilitas AI dikembangkan untuk memberikan solusi yang fleksibel, skalabel, dan siap mendukung transformasi digital di berbagai sektor industri.',
            ],
            'capabilities' => [
                [
                    'title' => ['en' => 'D365 Finance Module Support', 'id' => 'D365 Finance Module Support'],
                    'description' => ['en' => 'Configuration support and customization of Microsoft Dynamics 365 Finance modules.', 'id' => 'Dukungan konfigurasi dan kustomisasi modul Microsoft Dynamics 365 Finance.'],
                ],
                [
                    'title' => ['en' => 'Tiered Support (L1-L3)', 'id' => 'Tiered Support (L1-L3)'],
                    'description' => ['en' => 'Ongoing support for configurations, incidents, and escalations based on issue complexity.', 'id' => 'Dukungan berjenjang untuk konfigurasi, insiden, dan eskalasi sesuai kompleksitas masalah.'],
                ],
                [
                    'title' => ['en' => 'Power BI Reporting Integration', 'id' => 'Power BI Reporting Integration'],
                    'description' => ['en' => 'Business report integration and dashboards through Power BI for operational visibility.', 'id' => 'Integrasi pelaporan dan dashboard bisnis melalui Power BI untuk visibilitas operasional.'],
                ],
                [
                    'title' => ['en' => 'SLA-based Managed Service', 'id' => 'SLA-based Managed Service'],
                    'description' => ['en' => 'Structured services with defined response and resolution timelines per agreed SLA.', 'id' => 'Layanan terstruktur dengan waktu respons dan resolusi yang tentu sesuai SLA yang disepakati.'],
                ],
                [
                    'title' => ['en' => 'Power Automate Workflow Automation', 'id' => 'Power Automate Workflow Automation'],
                    'description' => ['en' => 'Cross-divisional workflow automation using Power Automate.', 'id' => 'Otomatisasi alur kerja lintas divisi menggunakan Power Automate.'],
                ],
                [
                    'title' => ['en' => 'Smooth Vendor Transition', 'id' => 'Smooth Vendor Transition'],
                    'description' => ['en' => 'Taking over support from previous vendors without disrupting ongoing operations.', 'id' => 'Pengambilalihan dukungan dari vendor sebelumnya tanpa mengganggu operasional yang berjalan.'],
                ],
                [
                    'title' => ['en' => 'AI Builder Integration', 'id' => 'AI Builder Integration'],
                    'description' => ['en' => 'AI Builder implementation for intelligent automation needs within the Microsoft ecosystem.', 'id' => 'Penerapan AI Builder untuk kebutuhan otomatisasi cerdas dalam ekosistem Microsoft.'],
                ],
            ],
            'case_studies' => ['d365-support', '360-finance-support'],
            'case_studies_label' => ['en' => 'MANAGED SUPPORT', 'id' => 'MANAGED SUPPORT'],
        ],
    ],
];
