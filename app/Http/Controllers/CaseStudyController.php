<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    private function getCaseStudiesData()
    {
        $locale = app()->getLocale(); // Mengecek bahasa saat ini ('id' atau 'en')

        return [
            // --- ID 1: LMS Berkemah ---
            [
                'id' => 1,
                'slug' => 'lms-berkemah',
                'title' => 'LMS Berkemah',
                'tag' => 'EDUCATION',
                'category' => 'operating system',
                'img' => asset('assets/studi_kasus/lms_berkemah.png'),

                'hero_style' => 'full_bg',

                'hero_badge' => $locale == 'en' ? 'SERVICE DETAIL' : 'DETAIL LAYANAN',
                'hero_title' => 'LMS BERKEMAH PLATFORM',
                'hero_desc' => $locale == 'en'
                    ? 'Learning Management System platform specifically designed to support learning collaboration, digital classroom management, and interactive intensive training.'
                    : 'Platform Learning Management System yang dirancang khusus untuk mendukung kolaborasi belajar, manajemen kelas digital, dan pelatihan intensif yang interaktif.',
                'untuk_siapa' => null,
                'dampak_singkat' => null,

                'cap_badge' => $locale == 'en' ? 'CAPABILITY REFERENCE' : 'REFERENSI KAPABILITAS',
                'cap_title' => 'Learning Management System',
                'cap_subtitle' => $locale == 'en' ? 'Capabilities' : 'Kapabilitas',
                'cap_desc' => $locale == 'en'
                    ? 'Integrated education platform capabilities to support efficient teaching and learning performance.'
                    : 'Kapabilitas platform edukasi terintegrasi untuk menunjang performa belajar mengajar yang efisien.',

                'capabilities' => [
                    [
                        'title' => 'Virtual Class Management',
                        'desc' => $locale == 'en' ? 'Centralized management of digital classrooms, learning schedules, and material distribution.' : 'Pengelolaan ruang kelas digital, jadwal belajar, dan distribusi materi terpusat.',
                        'border_color' => '#12AED0'
                    ],
                    [
                        'title' => 'Progress Tracking Analytics',
                        'desc' => $locale == 'en' ? 'Real-time analytics dashboard to monitor grade progress and student engagement.' : 'Dashboard analitik real-time untuk memantau perkembangan nilai dan tingkat keaktifan siswa.',
                        'border_color' => '#A7F432'
                    ],
                    [
                        'title' => 'Interactive Assessment tools',
                        'desc' => $locale == 'en' ? 'Automated exams, online quizzes, and assignments with instant feedback.' : 'Fitur ujian, kuis online, dan tugas terotomatisasi dengan umpan balik instan.',
                        'border_color' => '#031A44'
                    ]
                ],
                'service_model' => null
            ],

            // --- ID 2: Website PPDB & School Portal ---
            [
                'id' => 2,
                'slug' => 'website-ppdb-school-portal',
                'title' => $locale == 'en' ? 'PPDB Website & School Portal' : 'Website PPDB & School Portal',
                'tag' => $locale == 'en' ? 'EDUCATION DIGITAL TRANSFORMATION' : 'TRANSFORMASI DIGITAL PENDIDIKAN',
                'category' => 'Education',
                'img' => asset('assets/studi_kasus/ppdb.png'),

                'hero_badge' => $locale == 'en' ? 'EDUCATION DIGITAL TRANSFORMATION' : 'TRANSFORMASI DIGITAL PENDIDIKAN',
                'badge_icon' => 'school',
                'hero_title' => $locale == 'en' ? 'PPDB Website & School Portal' : 'Website PPDB & Portal Sekolah',
                'hero_desc' => $locale == 'en'
                    ? 'Transform student admission from paper chaos to digital clarity. Move student admissions online. Digital registration, document verification, real-time status tracking, and public school website all in one solution.'
                    : 'Transformasi penerimaan siswa dari kekacauan kertas ke kejelasan digital. Pindahkan penerimaan siswa ke online. Registrasi digital, verifikasi dokumen, tracking status real-time, dan website sekolah publik semua dalam satu solusi.',

                'untuk_siapa' => $locale == 'en' ? "School Admin • Educational Foundation • Parents & Prospective Students" : "Admin Sekolah • Yayasan Pendidikan • Orang Tua & Calon Siswa",
                'dampak_singkat' => $locale == 'en' ? 'Smoother admissions, satisfied parents, reduced admin workload, and a professional school website ready for PPDB.' : 'Penerimaan lebih lancar, orang tua lebih puas, beban admin berkurang, dan website sekolah profesional siap untuk PPDB.',

                'masalah' => $locale == 'en'
                    ? 'Schools drown in paper forms during PPDB: slow verification, lost documents, frustrated parents, and no real-time status visibility.'
                    : 'Sekolah tenggelam dalam form kertas saat PPDB verifikasi lambat, dokumen hilang, orang tua frustrasi, dan tidak ada visibilitas status real-time.',
                'solusi' => $locale == 'en'
                    ? 'We built a complete digital admission system: online registration, automated document handling, real-time status tracking, and a school website.'
                    : 'Kami membangun sistem penerimaan digital lengkap: registrasi online, penanganan dokumen otomatis, tracking status real-time, dan website sekolah.',
                'fitur_utama' => $locale == 'en' ? [
                    'Online registration form',
                    'Public school website',
                    'Document verification workflow',
                    'Admin dashboard and parent portal',
                ] : [
                    'Form registrasi online',
                    'Website publik sekolah',
                    'Workflow verifikasi dokumen',
                    'Dashboard admin dan portal orang tua',
                ],
                'dampak_bisnis' => $locale == 'en' ? [
                    'More structured and auditable admission process',
                    'SIT/UAT documentation and BAST handover available',
                    'Reduced admin workload through automated workflow',
                    'Better parent experience with real-time transparency',
                ] : [
                    'Proses penerimaan lebih terstruktur dan auditable',
                    'Dokumentasi SIT/UAT dan BAST handover tersedia',
                    'Beban admin berkurang lewat workflow otomatis',
                    'Pengalaman orang tua lebih baik dengan transparansi real-time',
                ],

                'cta_title_prefix' => $locale == 'en' ? 'Discuss how this solution fits' : 'Diskusikan bagaimana solusi ini cocok untuk',
                'cta_title_highlight' => $locale == 'en' ? 'Your Operations' : 'Operasional Anda',
                'cta_desc' => $locale == 'en' ? 'Nakala remains primary for local delivery, with Romulus Digital as the trust layer for regional capabilities.' : 'Nakala tetap menjadi primary untuk delivery lokal, dengan Romulus Digital sebagai trust layer untuk kapabilitas regional.',

                'capabilities' => [
                    [
                        'title' => 'System Maintenance',
                        'desc' => $locale == 'en' ? 'Periodic maintenance to ensure financial system reliability and zero-downtime.' : 'Pemeliharaan berkala untuk menjamin reliabilitas dan zero-downtime sistem finansial.'
                    ],
                    [
                        'title' => 'Power BI Integration',
                        'desc' => $locale == 'en' ? 'Real-time financial data visualization for strategic decision making.' : 'Visualisasi data keuangan real-time untuk pengambilan keputusan strategis.'
                    ]
                ],
                'related_cases' => []
            ],

            // --- ID 3: Digital Coaching / AI Coach ---
            [
                'id' => 3,
                'slug' => 'digital-coaching-ai-coach',
                'title' => 'Digital Coaching / AI Coach',
                'tag' => 'Education',
                'category' => 'Education',
                'img' => asset('assets/studi_kasus/digital_coaching.png'),

                'hero_badge' => $locale == 'en' ? 'PROFESSIONAL LEARNING & PERFORMANCE DEVELOPMENT' : 'PEMBELAJARAN PROFESIONAL & PENGEMBANGAN PERFORMA',
                'badge_icon' => 'smart_toy',
                'hero_title' => 'Digital Coaching / AI Coach',
                'hero_desc' => $locale == 'en'
                    ? 'Scale your team development with AI-based coaching that adapts to each individual. Give every employee a personal coach. AI-based learning journeys, goal tracking, and on-demand conversational coaching tailored to individual needs.'
                    : 'Kembangkan tim Anda secara skalabel dengan coaching berbasis AI yang beradaptasi dengan setiap individu. Berikan setiap karyawan coach pribadi. Learning journey berbasis AI, tracking target, dan coaching percakapan on-demand disesuaikan dengan kebutuhan masing-masing.',

                'untuk_siapa' => $locale == 'en' ? "HR Development Team • Learning & Development Managers • Team Leaders" : "Tim Pengembangan HR • Manager Learning & Development • Pimpinan Tim",
                'dampak_singkat' => $locale == 'en' ? 'Scale coaching without proportional cost increases, boost learning engagement, and gain real-time visibility into team development progress.' : 'Skalakan coaching tanpa menaikkan biaya proporsional, tingkatkan engagement belajar, dan dapatkan visibilitas real-time progres pengembangan tim.',

                'masalah' => $locale == 'en'
                    ? 'Delivering coaching to dispersed teams is expensive and inconsistent: human coaches are limited, quality varies, and there is no way to track progress.'
                    : 'Menghadirkan coaching untuk tim tersebar itu mahal dan tidak konsisten coach manusia terbatas, kualitas bervariasi, dan tidak ada cara melacak progres.',
                'solusi' => $locale == 'en'
                    ? 'AI Coach provides personalized learning journeys, goal tracking, on-demand conversational coaching, and manager visibility all in one platform.'
                    : 'AI Coach menghadirkan learning journey personal, tracking target, coaching percakapan on-demand, dan visibilitas manajer semua dalam satu platform.',
                'fitur_utama' => $locale == 'en' ? [
                    'AI coaching chatbot',
                    'Personalized learning path',
                    'Goal setting and progress dashboard',
                    'Manager visibility, content library, and reminders',
                ] : [
                    'AI coaching chatbot',
                    'Learning path personal',
                    'Goal setting dan dashboard progres',
                    'Visibilitas manager, content library, dan reminder',
                ],
                'dampak_bisnis' => $locale == 'en' ? [
                    'Scalable coaching without proportional cost increases',
                    'Increased learning engagement via AI nudges',
                    'Personal development for every employee',
                    'Real-time performance visibility for managers and HR',
                ] : [
                    'Coaching skalabel tanpa kenaikan biaya proporsional',
                    'Engagement belajar meningkat lewat nudges AI',
                    'Pengembangan personal untuk setiap karyawan',
                    'Visibilitas performa real-time untuk manager dan HR',
                ],

                'cta_title_prefix' => $locale == 'en' ? 'Discuss how this solution fits' : 'Diskusikan bagaimana solusi ini cocok untuk',
                'cta_title_highlight' => $locale == 'en' ? 'Your Operations' : 'Operasional Anda',
                'cta_desc' => $locale == 'en' ? 'Nakala remains primary for local delivery, with Romulus Digital as the trust layer for regional capabilities.' : 'Nakala tetap menjadi primary untuk delivery lokal, dengan Romulus Digital sebagai trust layer untuk kapabilitas regional.',

                'capabilities' => [
                    [
                        'title' => 'System Maintenance',
                        'desc' => $locale == 'en' ? 'Periodic maintenance to ensure financial system reliability and zero-downtime.' : 'Pemeliharaan berkala untuk menjamin reliabilitas dan zero-downtime sistem finansial.'
                    ],
                    [
                        'title' => 'Power BI Integration',
                        'desc' => $locale == 'en' ? 'Real-time financial data visualization for strategic decision making.' : 'Visualisasi data keuangan real-time untuk pengambilan keputusan strategis.'
                    ]
                ],
                'related_cases' => []
            ],

            // --- ID 4: AI Hiring ---
            [
                'id' => 4,
                'slug' => 'ai-hiring-recruitment-platform',
                'title' => 'AI Hiring & Recruitment Platform',
                'tag' => 'Education',
                'category' => 'Education',
                'img' => asset('assets/studi_kasus/ai_hiring.png'),

                'hero_badge' => $locale == 'en' ? 'Smart Talent Acquisition' : 'Akuisi Talenta Cerdas',
                'badge_icon' => 'memory',
                'hero_title' => $locale == 'en' ? 'AI Hiring & Gen AI Recruitment' : 'AI Hiring & Rekrutmen Gen AI',
                'hero_desc' => $locale == 'en'
                    ? 'Accelerate talent acquisition with AI-driven screening and precise candidate matching. Empower your HR team to recruit smarter. Our Generative AI platform automates CV data extraction, evaluates fit accurately, and screens top candidates, eliminating manual process bottlenecks.'
                    : 'Akselerasi akuisisi talenta dengan seleksi berbasis AI dan pencocokan kandidat yang presisi. Berdayakan tim HR Anda untuk merekrut lebih cerdas. Platform Generative AI kami mengotomatiskan ekstraksi data CV, mengevaluasi kecocokan secara akurat, dan menyeleksi kandidat terbaik, menghilangkan hambatan proses manual.',

                'untuk_siapa' => $locale == 'en' ? "Enterprise HR Teams • Recruitment Managers • Talent Acquisition Agencies" : "Tim HR Enterprise • Manajer Rekrutmen • Agensi Akuisisi Talenta",
                'dampak_singkat' => $locale == 'en' ? 'Cut screening time by up to 80%, eliminate unconscious bias in evaluations, and scale high-volume recruitment seamlessly.' : 'Pangkas waktu screening hingga 80%, eliminasi bias tak sadar dalam evaluasi, dan skalakan operasional rekrutmen volume tinggi tanpa hambatan.',

                'masalah' => $locale == 'en'
                    ? 'Enterprise HR departments often waste weeks manually screening thousands of CVs. This bottleneck leads to inconsistent evaluations, slow time-to-hire, and the risk of losing top talent to competitors.'
                    : 'Departemen HR enterprise seringkali membuang waktu berminggu-minggu untuk menyaring ribuan CV secara manual. Hambatan ini memicu evaluasi yang tidak konsisten, time-to-hire yang lambat, dan risiko kehilangan talenta unggul ke kompetitor.',
                'solusi' => $locale == 'en'
                    ? 'We implement an intelligent automation platform that extracts CVs, analyzes candidate profiles against job criteria, and provides objective data-driven scoring—ensuring your team engages only with the most qualified talent.'
                    : 'Kami mengimplementasikan platform otomasi cerdas yang mengekstraksi CV, menganalisis profil kandidat berdasarkan kriteria pekerjaan, dan memberikan penilaian berbasis data yang objektif—memastikan tim Anda hanya berinteraksi dengan talenta paling memenuhi syarat.',
                'fitur_utama' => $locale == 'en' ? [
                    'Smart CV parsing and candidate scoring system',
                    'Precision match ranking and automated shortlisting',
                    'Integrated interview scheduling and recruitment dashboard',
                    'Transparent candidate status portal and comprehensive analytics',
                ] : [
                    'Parsing CV cerdas dan sistem penilaian kandidat',
                    'Peringkat kecocokan presisi dan shortlisting otomatis',
                    'Penjadwalan wawancara terintegrasi dan dashboard rekrutmen',
                    'Portal status kandidat transparan dan analitik komprehensif',
                ],
                'dampak_bisnis' => $locale == 'en' ? [
                    'CV screening time dramatically reduced by up to 80%',
                    'Creates consistent evaluations and minimizes bias',
                    'Significantly faster time-to-hire for an optimal candidate experience',
                    'Highly scalable for high-volume enterprise recruitment',
                ] : [
                    'Waktu screening CV berkurang secara dramatis hingga 80%',
                    'Menciptakan evaluasi yang konsisten dan meminimalisir bias',
                    'Time-to-hire yang jauh lebih cepat demi pengalaman kandidat terbaik',
                    'Sangat skalabel untuk rekrutmen skala enterprise bervolume tinggi',
                ],

                'cta_title_prefix' => $locale == 'en' ? 'Discuss how this solution fits' : 'Diskusikan bagaimana solusi ini cocok untuk',
                'cta_title_highlight' => $locale == 'en' ? 'Your Operations' : 'Operasional Anda',
                'cta_desc' => $locale == 'en' ? 'Nakala remains primary for local delivery, with Romulus Digital as the trust layer for regional capabilities.' : 'Nakala tetap menjadi primary untuk delivery lokal, dengan Romulus Digital sebagai trust layer untuk kapabilitas regional.',

                'capabilities' => [
                    [
                        'title' => 'System Maintenance',
                        'desc' => $locale == 'en' ? 'Periodic maintenance to ensure financial system reliability and zero-downtime.' : 'Pemeliharaan berkala untuk menjamin reliabilitas dan zero-downtime sistem finansial.'
                    ],
                    [
                        'title' => 'Power BI Integration',
                        'desc' => $locale == 'en' ? 'Real-time financial data visualization for strategic decision making.' : 'Visualisasi data keuangan real-time untuk pengambilan keputusan strategis.'
                    ]
                ],
                'related_cases' => []
            ],

            // --- ID 5: CRM AI ---
            [
                'id' => 5,
                'slug' => 'crm-ai-admissions',
                'title' => 'CRM AI & Admissions Platform',
                'tag' => 'Technology',
                'category' => 'Technology',
                'img' => asset('assets/studi_kasus/crm_ai.png'),

                'hero_badge' => $locale == 'en' ? 'AI TECHNOLOGY CAPABILITY' : 'KAPABILITAS TEKNOLOGI AI',
                'badge_icon' => 'share',
                'hero_title' => 'CRM AI & Admissions Platform',
                'hero_desc' => $locale == 'en'
                    ? 'Automate repetitive tasks and gain practical AI business insights for daily operations. Stop doing repetitive tasks manually. We help you automate workflows, process documents intelligently, and build AI dashboards that simplify decision making.'
                    : 'Otomatiskan pekerjaan repetitif dan dapatkan wawasan bisnis AI praktis untuk operasional sehari-hari. Berhenti mengerjakan tugas repetitif secara manual. Kami membantu Anda mengotomatiskan workflow, memproses dokumen secara cerdas, dan membangun dashboard AI yang memudahkan pengambilan keputusan.',

                'untuk_siapa' => $locale == 'en' ? "Operations Teams • Business Analysts • Digital Transformation Leaders" : "Tim Operasional • Analis Bisnis • Pemimpin Transformasi Digital",
                'dampak_singkat' => $locale == 'en' ? 'Less manual work, faster decisions, automation opportunities mapped via AI readiness assessment, and scalable AI capabilities for enterprise workflows.' : 'Lebih sedikit pekerjaan manual, keputusan lebih cepat, peluang otomasi dipetakan lewat AI readiness assessment, dan kapabilitas AI skalabel untuk workflow enterprise.',

                'masalah' => $locale == 'en'
                    ? 'Manual repetitive tasks drain team productivity. Decision making is slow due to scattered data, and teams lack tools for efficient automation and analysis.'
                    : 'Tugas repetitif manual menguras produktivitas tim. Pengambilan keputusan lambat karena data tersebar, dan tim kekurangan alat untuk otomatisasi dan analisis efisien.',
                'solusi' => $locale == 'en'
                    ? 'We design and build GenAI workflows, document intelligence, data pipelines, analytics dashboards, and B2B AI SaaS platforms tailored to your operations.'
                    : 'Kami merancang dan membangun workflow GenAI, document intelligence, data pipeline, dashboard analitik, dan platform AI SaaS B2B yang disesuaikan dengan operasional Anda.',
                'fitur_utama' => $locale == 'en' ? [
                    'Conversational AI and document intelligence',
                    'AI SaaS platform development',
                    'Intelligent automation and smart notifications',
                    'Data analytics and Microsoft Power Platform integration',
                ] : [
                    'Conversational AI dan document intelligence',
                    'Pengembangan platform AI SaaS',
                    'Intelligent automation dan smart notification',
                    'Analitik data dan integrasi Microsoft Power Platform',
                ],
                'dampak_bisnis' => $locale == 'en' ? [
                    'Reduced manual repetitive tasks across teams',
                    'Better operational decision support',
                    'Scalable AI capabilities for enterprise workflows',
                    'Automation opportunities mapped via AI readiness assessment',
                ] : [
                    'Pekerjaan manual repetitif berkurang lintas tim',
                    'Decision support operasional lebih baik',
                    'Kapabilitas AI skalabel untuk workflow enterprise',
                    'Peluang otomasi dipetakan lewat AI readiness assessment',
                ],

                'cta_title_prefix' => $locale == 'en' ? 'Discuss how this solution fits' : 'Diskusikan bagaimana solusi ini cocok untuk',
                'cta_title_highlight' => $locale == 'en' ? 'Your Operations' : 'Operasional Anda',
                'cta_desc' => $locale == 'en' ? 'Nakala remains primary for local delivery, with Romulus Digital as the trust layer for regional capabilities.' : 'Nakala tetap menjadi primary untuk delivery lokal, dengan Romulus Digital sebagai trust layer untuk kapabilitas regional.',

                'capabilities' => [
                    [
                        'title' => 'System Maintenance',
                        'desc' => $locale == 'en' ? 'Periodic maintenance to ensure financial system reliability and zero-downtime.' : 'Pemeliharaan berkala untuk menjamin reliabilitas dan zero-downtime sistem finansial.'
                    ],
                    [
                        'title' => 'Power BI Integration',
                        'desc' => $locale == 'en' ? 'Real-time financial data visualization for strategic decision making.' : 'Visualisasi data keuangan real-time untuk pengambilan keputusan strategis.'
                    ]
                ],
                'related_cases' => []
            ],

            // --- ID 6: HRMS / Mahya Platform ---
            [
                'id' => 6,
                'slug' => 'hrms-mahya-platform',
                'title' => 'HRMS / Mahya Platform',
                'tag' => 'Software',
                'category' => $locale == 'en' ? 'HR & OPERATIONAL SOLUTIONS' : 'SOLUSI HR & OPERASIONAL',
                'img' => asset('assets/studi_kasus/hrms.png'),

                'hero_badge' => $locale == 'en' ? 'EMPLOYEE SELF-SERVICE & HR OPERATIONS' : 'EMPLOYEE SELF-SERVICE & OPERASIONAL HR',
                'badge_icon' => 'badge',
                'hero_title' => 'HRMS / Mahya Platform',
                'hero_desc' => $locale == 'en'
                    ? 'Simplify employee management from attendance to payroll, all in one place. Stop managing multiple spreadsheets. Mahya centralizes attendance, leave, payroll, and employee data into one easy-to-use system with self-service access.'
                    : 'Sederhanakan pengelolaan karyawan dari absensi hingga payroll, semua dalam satu tempat. Berhenti mengelola banyak spreadsheet. Mahya memusatkan absensi, cuti, payroll, dan data karyawan dalam satu sistem yang mudah digunakan dengan akses self-service.',

                'untuk_siapa' => $locale == 'en' ? "HR Department • Company Managers • Employees" : "Departemen HR • Manajer Perusahaan • Karyawan",
                'dampak_singkat' => $locale == 'en' ? 'Reduce manual HR processes, provide self-service access to employees, and gain real-time visibility into employee data.' : 'Kurangi proses manual HR, berikan akses self-service ke karyawan, dan dapatkan visibilitas real-time data karyawan.',

                'masalah' => $locale == 'en'
                    ? 'HR operations are scattered across messy spreadsheets, prone to error, and hard to track. Employees queue up for leave approvals and payslip requests.'
                    : 'Operasional HR tersebar di banyak spreadsheet berantakan, rawan error, dan sulit dilacak. Karyawan mengantre untuk approval cuti dan request slip gaji.',
                'solusi' => $locale == 'en'
                    ? 'Mahya centralizes attendance, leave, payroll, and employee records in a seamless platform featuring employee self-service and automated manager approvals.'
                    : 'Mahya memusatkan absensi, cuti, payroll, dan data karyawan dalam satu sistem terintegrasi yang dilengkapi akses self-service serta approval otomatis.',
                'fitur_utama' => $locale == 'en' ? [
                    'Attendance and leave management',
                    'Mobile-friendly interface',
                    'Payroll processing and employee profiles',
                    'Approval workflows and reporting dashboard',
                ] : [
                    'Manajemen absensi dan cuti',
                    'Interface mobile-friendly',
                    'Proses payroll dan profil karyawan',
                    'Approval workflow dan dashboard reporting',
                ],
                'dampak_bisnis' => $locale == 'en' ? [
                    'Enhanced employee experience via self-service',
                    'Significantly reduced manual HR processing time',
                    'Centralized HR data with real-time visibility',
                    'Ready for multi-entity or multi-branch deployment',
                ] : [
                    'Pengalaman karyawan meningkat dengan self-service',
                    'Waktu proses manual HR berkurang signifikan',
                    'Data HR terpusat dengan visibilitas real-time',
                    'Siap untuk deployment multi-entitas atau multi-cabang',
                ],

                'cta_title_prefix' => $locale == 'en' ? 'Discuss how this solution fits' : 'Diskusikan bagaimana solusi ini cocok untuk',
                'cta_title_highlight' => $locale == 'en' ? 'Your Operations' : 'Operasional Anda',
                'cta_desc' => $locale == 'en' ? 'Nakala remains primary for local delivery, with Romulus Digital as the trust layer for regional capabilities.' : 'Nakala tetap menjadi primary untuk delivery lokal, dengan Romulus Digital sebagai trust layer untuk kapabilitas regional.',

                'capabilities' => [
                    [
                        'title' => 'System Maintenance',
                        'desc' => $locale == 'en' ? 'Periodic maintenance to ensure financial system reliability and zero-downtime.' : 'Pemeliharaan berkala untuk menjamin reliabilitas dan zero-downtime sistem finansial.'
                    ],
                    [
                        'title' => 'Power BI Integration',
                        'desc' => $locale == 'en' ? 'Real-time financial data visualization for strategic decision making.' : 'Visualisasi data keuangan real-time untuk pengambilan keputusan strategis.'
                    ]
                ],
                'related_cases' => []
            ],

            // --- ID 7: ERP Platform BISA ---
            [
                'id' => 7,
                'slug' => 'erp-platform-bisa',
                'title' => 'Custom Software Development',
                'tag' => 'DEVELOPMENT',
                'category' => 'enterprise',
                'img' => asset('assets/studi_kasus/erp.png'),

                'hero_style' => 'full_bg',

                'hero_badge' => $locale == 'en' ? 'SERVICE DETAIL' : 'DETAIL LAYANAN',
                'hero_title' => 'CUSTOM SOFTWARE DEVELOPMENT',
                'hero_desc' => $locale == 'en'
                    ? 'Developing operational systems such as HRMS, HSE, cash management, and other industry solutions to enhance organizational efficiency and productivity.'
                    : 'Mengembangkan sistem operasional seperti HRMS, HSE, manajemen kas, dan solusi industri lainnya untuk meningkatkan efisiensi dan produktivitas organisasi.',
                'untuk_siapa' => null,
                'dampak_singkat' => null,

                'capabilities' => [
                    [
                        'title' => 'Web Application Development',
                        'desc' => $locale == 'en' ? 'Responsive and high-performance web applications built on modern frameworks with API-first architecture.' : 'Aplikasi web yang responsif dan performan, dibangun di atas framework modern dengan arsitektur API-first.',
                        'border_color' => '#12AED0'
                    ],
                    [
                        'title' => 'API & System Integration',
                        'desc' => $locale == 'en' ? 'Connect existing applications, third-party services, and legacy systems through secure API integration layers.' : 'Menghubungkan aplikasi yang sudah ada, layanan pihak ketiga, dan sistem lawas melalui lapisan integrasi API yang aman.',
                        'border_color' => '#A7F432'
                    ],
                    [
                        'title' => 'SaaS Platform Development',
                        'desc' => $locale == 'en' ? 'End-to-end SaaS product building, from architecture to deployment for B2B and enterprise markets.' : 'Pembangunan produk SaaS end-to-end, mulai dari arsitektur hingga deployment untuk pasar B2B dan enterprise.',
                        'border_color' => '#031A44'
                    ],
                    [
                        'title' => 'Solution Architecture',
                        'desc' => $locale == 'en' ? 'Designing scalable solution architectures aligned with long-term growth needs.' : 'Perancangan arsitektur solusi yang scalable dan sesuai dengan kebutuhan pertumbuhan jangka panjang.',
                        'border_color' => '#031A44'
                    ],
                    [
                        'title' => 'Enterprise System Development',
                        'desc' => $locale == 'en' ? 'Enterprise-scale systems custom-built to specific organizational business process requirements.' : 'Sistem berskala enterprise yang dibangun sesuai spesifikasi dan kebutuhan proses bisnis khusus organisasi.',
                        'border_color' => '#A7F432'
                    ],
                    [
                        'title' => 'Mobile-friendly Interface',
                        'desc' => $locale == 'en' ? 'Interfaces optimized for mobile devices to support field user accessibility.' : 'Antarmuka yang dioptimalkan untuk perangkat mobile guna mendukung aksesibilitas pengguna di lapangan.',
                        'border_color' => '#12AED0'
                    ]
                ],
                'service_model' => [
                    'section_badge' => $locale == 'en' ? 'SERVICE MODEL' : 'MODEL LAYANAN',
                    'section_title' => $locale == 'en' ? 'Product & Solution Model' : 'Model Produk & Solusi Model',
                    'section_desc' => $locale == 'en'
                        ? 'Our service approach covers the complete solution lifecycle, from understanding business needs to building the right tech and providing ongoing post-implementation support.'
                        : 'Pendekatan layanan kami mencakup seluruh siklus pengembangan solusi, mulai dari memahami kebutuhan bisnis, membangun teknologi yang tepat, hingga memberikan dukungan berkelanjutan setelah implementasi.',
                    'columns' => [
                        [
                            'category' => 'CONSULTING & STRATEGY',
                            'header_bg' => '#031A44',
                            'border_color' => '#A7F432',
                            'items' => [
                                [
                                    'title' => $locale == 'en' ? 'Technology Consulting' : 'Konsultasi Teknologi',
                                    'desc' => $locale == 'en' ? 'Helping organizations map digital transformation strategies, design architectures, and choose technology.' : 'Membantu organisasi menyusun strategi transformasi digital, merancang arsitektur solusi, dan memilih teknologi yang tepat untuk mencapai tujuan bisnis.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'User Experience Centric Design' : 'Desain Berpusat pada Pengalaman Pengguna',
                                    'desc' => $locale == 'en' ? 'Designing user experiences through research, wireframes, and interface designs centered on user needs.' : 'Merancang pengalaman pengguna melalui riset, wireframe, dan desain antarmuka yang berfokus pada kebutuhan pengguna.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'AI Readiness Assessment' : 'Evaluasi Kesiapan AI',
                                    'desc' => $locale == 'en' ? 'Evaluating organization readiness for AI adoption and identifying high-value automation opportunities.' : 'Mengevaluasi kesiapan organisasi dalam mengadopsi AI serta mengidentifikasi peluang otomatisasi yang memberikan nilai bisnis.'
                                ]
                            ]
                        ],
                        [
                            'category' => 'BUILD & DEVELOPMENT',
                            'header_bg' => '#12AED0',
                            'border_color' => '#031A44',
                            'items' => [
                                [
                                    'title' => $locale == 'en' ? 'Custom Software Development' : 'Pengembangan Perangkat Lunak Kustom',
                                    'desc' => $locale == 'en' ? 'Developing web, mobile, SaaS, and enterprise applications that are secure, flexible, and scalable.' : 'Mengembangkan aplikasi web, mobile, SaaS, dan sistem enterprise yang aman, fleksibel, dan mudah dikembangkan.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'AI & Generative AI Platform' : 'Platform AI & Generative AI',
                                    'desc' => $locale == 'en' ? 'Building AI & GenAI platforms to automate processes, process documents, and boost productivity.' : 'Membangun platform berbasis AI dan Generative AI untuk mengotomatisasi proses, mengolah dokumen, dan meningkatkan produktivitas bisnis.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'Operational Systems' : 'Sistem Operasional',
                                    'desc' => $locale == 'en' ? 'Developing operational systems helping organizations manage integrated business processes efficiently.' : 'Mengembangkan sistem operasional yang membantu organisasi mengelola proses bisnis secara lebih efisien dan terintegrasi.'
                                ]
                            ]
                        ],
                        [
                            'category' => 'RUN & SUPPORT',
                            'header_bg' => '#A7F432',
                            'header_text_color' => '#031A44',
                            'border_color' => '#12AED0',
                            'items' => [
                                [
                                    'title' => $locale == 'en' ? 'Quality Assurance (QA) Governance' : 'Tata Kelola Jaminan Kualitas (QA) / Tata Kelola QA',
                                    'desc' => $locale == 'en' ? 'Ensuring software quality through rigorous testing, QA governance, and structured release processes.' : 'Memastikan kualitas perangkat lunak melalui pengujian menyeluruh, tata kelola QA, dan proses rilis yang terstruktur.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'Managed Support Services' : 'Layanan Dukungan Terkelola',
                                    'desc' => $locale == 'en' ? 'Providing support and maintenance services so business operations run smoothly post-implementation.' : 'Menyediakan layanan dukungan dan pemeliharaan sistem agar operasional bisnis tetap berjalan optimal setelah implementasi.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'Microsoft Dynamics 365 & Power Platform' : 'Microsoft Dynamics 365 & Power Platform',
                                    'desc' => $locale == 'en' ? 'Supporting Microsoft Dynamics 365 implementations and Power Platform integrations.' : 'Mendukung implementasi Microsoft Dynamics 365 dan integrasi Power Platform untuk meningkatkan produktivitas dan efisiensi bisnis.'
                                ]
                            ]
                        ]
                    ]
                ],
            ],

            // --- ID 8: D365 FINANCE SUPPORT ---
            [
                'id' => 8,
                'slug' => 'd365-finance-support',
                'title' => 'D365 Finance Support',
                'tag' => 'MANAGED SUPPORT',
                'category' => 'enterprise',
                'img' => asset('assets/studi_kasus/d365.png'),

                'hero_badge' => $locale == 'en' ? 'MICROSOFT DYNAMICS 365 CAPABILITY REFERENCE' : 'REFERENSI KAPABILITAS MICROSOFT DYNAMICS 365',
                'badge_icon' => 'account_balance',
                'hero_title' => 'D365 Finance Support',
                'hero_desc' => $locale == 'en'
                    ? 'Enterprise class ERP with local support: run D365 Finance hassle-free. Local Indonesian support for Microsoft D365 Finance configuration, customization, training, and managed services backed by regional expertise.'
                    : 'ERP kelas enterprise dengan dukungan lokal jalankan D365 Finance tanpa pusing. Dukungan lokal Indonesia untuk Microsoft D365 Finance konfigurasi, kustomisasi, training, dan managed service didukung expertise regional.',

                'untuk_siapa' => $locale == 'en' ? "Finance Teams • IT Managers • Enterprise Operations" : "Tim Keuangan •\nManager IT •\nOperasional Enterprise",
                'dampak_singkat' => $locale == 'en' ? 'Faster local response, smooth configuration, and flexible engagements (project or retainer) bridging enterprise Microsoft capabilities with local business needs.' : 'Respons lokal lebih cepat, konfigurasi lancar, dan engagement fleksibel (project atau retainer) menjembatani kapabilitas Microsoft enterprise dengan kebutuhan bisnis lokal.',

                'masalah' => $locale == 'en'
                    ? 'Running D365 Finance without local support means slow response times, delayed configuration, low user adoption, and expensive international consultants.'
                    : 'Menjalankan D365 Finance tanpa dukungan lokal berarti respons lambat, keterlambatan konfigurasi, adopsi user rendah, dan konsultan internasional mahal.',
                'solusi' => $locale == 'en'
                    ? 'We deliver local D365 Finance configuration, customization, training, and managed support—keeping your ERP running smoothly with people who understand your context.'
                    : 'Kami menyediakan konfigurasi D365 Finance lokal, kustomisasi, training, dan managed support menjaga ERP Anda berjalan lancar dengan orang yang memahami konteks Anda.',
                'fitur_utama' => $locale == 'en' ? [
                    'D365 Finance module support',
                    'Power BI reporting integration',
                    'AI Builder integration and user training',
                    'Power Automate workflow automation',
                ] : [
                    'Dukungan modul D365 Finance',
                    'Integrasi reporting Power BI',
                    'Integrasi AI Builder dan training user',
                    'Otomasi workflow Power Automate',
                ],
                'dampak_bisnis' => $locale == 'en' ? [
                    'Faster response times via dedicated local managed services',
                    'Flexible project-based or retainer engagements',
                    'Bridges enterprise Microsoft capabilities with local business needs',
                    'Backed by certified Microsoft expertise from Romulus Digital',
                ] : [
                    'Respons lebih cepat lewat managed service lokal khusus',
                    'Engagement fleksibel project-based atau retainer',
                    'Menjembatani kapabilitas Microsoft enterprise dengan kebutuhan bisnis lokal',
                    'Didukung expertise Microsoft tersertifikasi dari Romulus Digital',
                ],

                'cta_title_prefix' => $locale == 'en' ? 'Discuss how this solution fits' : 'Diskusikan bagaimana solusi ini cocok untuk',
                'cta_title_highlight' => $locale == 'en' ? 'Your Operations' : 'Operasional Anda',
                'cta_desc' => $locale == 'en' ? 'Nakala remains primary for local delivery, with Romulus Digital as the trust layer for regional capabilities.' : 'Nakala tetap menjadi primary untuk delivery lokal, dengan Romulus Digital sebagai trust layer untuk kapabilitas regional.',

                'capabilities' => [
                    [
                        'title' => 'System Maintenance',
                        'desc' => $locale == 'en' ? 'Periodic maintenance to ensure financial system reliability and zero-downtime.' : 'Pemeliharaan berkala untuk menjamin reliabilitas dan zero-downtime sistem finansial.'
                    ],
                    [
                        'title' => 'Power BI Integration',
                        'desc' => $locale == 'en' ? 'Real-time financial data visualization for strategic decision making.' : 'Visualisasi data keuangan real-time untuk pengambilan keputusan strategis.'
                    ]
                ],
                'related_cases' => []
            ],

            // --- ID 9: HSE Operations Platform ---
            [
                'id' => 9,
                'slug' => 'hse-operations-platform',
                'title' => 'HSE Operations Platform',
                'tag' => 'INNOVATION',
                'category' => 'operating system',
                'img' => asset('assets/studi_kasus/hse.png'),

                'hero_badge' => $locale == 'en' ? 'MICROSOFT DYNAMICS 365 CAPABILITY REFERENCE' : 'REFERENSI KAPABILITAS MICROSOFT DYNAMICS 365',
                'badge_icon' => 'health_and_safety',
                'hero_title' => $locale == 'en' ? 'HSE / Operations Platform' : 'Platform HSE / Operasional',
                'hero_desc' => $locale == 'en'
                    ? 'Keep workplace safe, compliant, and audit-ready. Switch from paper-based safety reporting to digital systems. Report incidents, manage checklists, and track compliance in real-time.'
                    : 'Jaga tempat kerja tetap aman, patuh, dan siap audit. Beralih dari pelaporan keselamatan berbasis kertas ke sistem digital. Laporkan insiden, kelola checklist, dan lacak kepatuhan secara real-time.',

                'untuk_siapa' => $locale == 'en' ? "HSE Team • Operations Managers • Compliance Officers" : "Tim HSE • Manajer Operasional • Petugas Kepatuhan",
                'dampak_singkat' => $locale == 'en' ? 'Faster incident response, reduced compliance risk, and audit-ready documentation all from a single platform.' : 'Respons insiden lebih cepat, risiko kepatuhan berkurang, dan dokumentasi siap audit semua dari satu platform.',

                'masalah' => $locale == 'en'
                    ? 'Safety reporting still relies on paper forms and isolated emails: incidents go unreported, and proving compliance is extremely difficult.'
                    : 'Pelaporan keselamatan masih mengandalkan form kertas dan email terpisah insiden tidak terlapor, dan membuktikan kepatuhan sangat sulit.',
                'solusi' => $locale == 'en'
                    ? 'We provide a centralized platform for digital incident reporting, safety checklist management, compliance dashboards, and real-time alerts.'
                    : 'Kami menyediakan platform terpusat untuk pelaporan insiden digital, manajemen checklist keselamatan, dashboard kepatuhan, dan alert real-time.',
                'fitur_utama' => $locale == 'en' ? [
                    'Incident reporting and tracking',
                    'Safety checklist management',
                    'Compliance dashboard and real-time alerts',
                    'Audit trail and role-based access',
                ] : [
                    'Pelaporan dan tracking insiden',
                    'Manajemen safety checklist',
                    'Dashboard kepatuhan dan alert real-time',
                    'Audit trail dan akses berbasis role',
                ],
                'dampak_bisnis' => $locale == 'en' ? [
                    'Audit-ready documentation and trails',
                    'Reduced risk of unreported incidents',
                    'Clear HSE compliance visibility for management',
                    'Faster incident response via real-time reporting',
                ] : [
                    'Dokumentasi dan trail siap audit',
                    'Risiko insiden tak terlapor berkurang',
                    'Visibilitas kepatuhan HSE jelas untuk manajemen',
                    'Respons insiden lebih cepat lewat pelaporan real-time',
                ],

                'cta_title_prefix' => $locale == 'en' ? 'Discuss how this solution fits' : 'Diskusikan bagaimana solusi ini cocok untuk',
                'cta_title_highlight' => $locale == 'en' ? 'Your Operations' : 'Operasional Anda',
                'cta_desc' => $locale == 'en' ? 'Nakala remains primary for local delivery, with Romulus Digital as the trust layer for regional capabilities.' : 'Nakala tetap menjadi primary untuk delivery lokal, dengan Romulus Digital sebagai trust layer untuk kapabilitas regional.',

                'capabilities' => [
                    [
                        'title' => 'System Maintenance',
                        'desc' => $locale == 'en' ? 'Periodic maintenance to ensure financial system reliability and zero-downtime.' : 'Pemeliharaan berkala untuk menjamin reliabilitas dan zero-downtime sistem finansial.'
                    ],
                    [
                        'title' => 'Power BI Integration',
                        'desc' => $locale == 'en' ? 'Real-time financial data visualization for strategic decision making.' : 'Visualisasi data keuangan real-time untuk pengambilan keputusan strategis.'
                    ]
                ],
                'related_cases' => []
            ],

            // --- ID 10: 360 Finance Support & Managed Services ---
            [
                'id' => 10,
                'slug' => '360-finance-support',
                'title' => '360 Finance Support & Managed Services',
                'tag' => 'Support',
                'category' => 'Managed Support',
                'img' => asset('assets/studi_kasus/360_finance.png'),

                'hero_style' => 'full_bg',

                'hero_badge' => 'HERO SECTION',
                'hero_title' => 'Managed Support & D365',
                'hero_desc' => $locale == 'en'
                    ? 'Providing support services, system maintenance, and Microsoft Dynamics 365 implementation to ensure business operations run optimally.'
                    : 'Menyediakan layanan dukungan, pemeliharaan sistem, serta implementasi Microsoft Dynamics 365 untuk memastikan operasional bisnis tetap berjalan optimal.',

                'title_badge' => $locale == 'en' ? 'CAPABILITY REFERENCE' : 'REFERENSI KAPABILITAS',
                'title' => 'Managed Support & D365',
                'desc' => $locale == 'en'
                    ? 'Every AI capability is developed to provide flexible, scalable solutions ready to support digital transformation across various industry sectors.'
                    : 'Setiap kapabilitas AI dikembangkan untuk memberikan solusi yang fleksibel, skalabel, dan siap mendukung transformasi digital di berbagai sektor industri.',

                'capabilities' => [
                    [
                        'title' => 'D365 Finance Module Support',
                        'desc' => $locale == 'en' ? 'Configuration and customization support for Microsoft Dynamics 365 Finance modules.' : 'Dukungan konfigurasi dan kustomisasi modul Microsoft Dynamics 365 Finance.',
                        'border_color' => '#12AED0'
                    ],
                    [
                        'title' => 'Tiered Support (L1–L3)',
                        'desc' => $locale == 'en' ? 'Tiered support for configurations, incidents, and escalation based on issue complexity.' : 'Dukungan berjenjang untuk konfigurasi, insiden, dan eskalasi sesuai kompleksitas masalah.',
                        'border_color' => '#A7F432'
                    ],
                    [
                        'title' => 'Power BI Reporting Integration',
                        'desc' => $locale == 'en' ? 'Business reporting and dashboard integration via Power BI for operational visibility.' : 'Integrasi pelaporan dan dashboard bisnis melalui Power BI untuk visibilitas operasional.',
                        'border_color' => '#031A44'
                    ],
                    [
                        'title' => 'SLA-based Managed Service',
                        'desc' => $locale == 'en' ? 'Managed services with measurable response and resolution times aligned with agreed SLAs.' : 'Layanan terkelola dengan waktu respon dan resolusi yang terukur sesuai SLA yang disepakati.',
                        'border_color' => '#031A44'
                    ],
                    [
                        'title' => 'Power Automate Workflow Automation',
                        'desc' => $locale == 'en' ? 'Cross-departmental workflow automation using Power Automate.' : 'Otomatisasi alur kerja lintas divisi menggunakan Power Automate.',
                        'border_color' => '#A7F432'
                    ],
                    [
                        'title' => 'Smooth Vendor Transition',
                        'desc' => $locale == 'en' ? 'Support takeover from previous vendors without disrupting ongoing operations.' : 'Pengambilalihan dukungan dari vendor sebelumnya tanpa mengganggu operasional yang berjalan.',
                        'border_color' => '#12AED0'
                    ],
                    [
                        'title' => 'AI Builder Integration',
                        'desc' => $locale == 'en' ? 'AI Builder application for intelligent automation within the Microsoft ecosystem.' : 'Penerapan AI Builder untuk kebutuhan otomatisasi cerdas dalam ekosistem Microsoft.',
                        'border_color' => '#12AED0'
                    ]
                ],
                'service_model' => [
                    'section_badge' => $locale == 'en' ? 'SERVICE MODEL' : 'MODEL LAYANAN',
                    'section_title' => $locale == 'en' ? 'Product & Solution Model' : 'Model Produk & Solusi Model',
                    'section_desc' => $locale == 'en'
                        ? 'Our service approach covers the complete solution lifecycle, from understanding business needs to building technology and providing ongoing support.'
                        : 'Pendekatan layanan kami mencakup seluruh siklus pengembangan solusi, mulai dari memahami kebutuhan bisnis, membangun teknologi yang tepat, hingga memberikan dukungan berkelanjutan setelah implementasi.',
                    'columns' => [
                        [
                            'category' => 'CONSULTING & STRATEGY',
                            'header_bg' => '#031A44',
                            'border_color' => '#A7F432',
                            'items' => [
                                [
                                    'title' => $locale == 'en' ? 'Technology Consulting' : 'Konsultasi Teknologi',
                                    'desc' => $locale == 'en' ? 'Helping organizations map digital transformation strategies and choose technology.' : 'Membantu organisasi menyusun strategi transformasi digital, merancang arsitektur solusi, dan memilih teknologi yang tepat untuk mencapai tujuan bisnis.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'User Experience Centric Design' : 'Desain Berpusat pada Pengalaman Pengguna',
                                    'desc' => $locale == 'en' ? 'Designing user experiences through research, wireframes, and interface designs.' : 'Merancang pengalaman pengguna melalui riset, wireframe, dan desain antarmuka yang berfokus pada kebutuhan pengguna.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'AI Readiness Assessment' : 'Evaluasi Kesiapan AI',
                                    'desc' => $locale == 'en' ? 'Evaluating organization readiness for AI adoption and identifying high-value automation opportunities.' : 'Mengevaluasi kesiapan organisasi dalam mengadopsi AI serta mengidentifikasi peluang otomatisasi yang memberikan nilai bisnis.'
                                ]
                            ]
                        ],
                        [
                            'category' => 'BUILD & DEVELOPMENT',
                            'header_bg' => '#12AED0',
                            'border_color' => '#031A44',
                            'items' => [
                                [
                                    'title' => $locale == 'en' ? 'Custom Software Development' : 'Pengembangan Perangkat Lunak Kustom',
                                    'desc' => $locale == 'en' ? 'Developing web, mobile, SaaS, and enterprise applications that are secure, flexible, and scalable.' : 'Mengembangkan aplikasi web, mobile, SaaS, dan sistem enterprise yang aman, fleksibel, dan mudah dikembangkan.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'AI & Generative AI Platform' : 'Platform AI & Generative AI',
                                    'desc' => $locale == 'en' ? 'Building AI & GenAI platforms to automate processes, process documents, and boost productivity.' : 'Membangun platform berbasis AI dan Generative AI untuk mengotomatisasi proses, mengolah dokumen, dan meningkatkan produktivitas bisnis.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'Operational Systems' : 'Sistem Operasional',
                                    'desc' => $locale == 'en' ? 'Developing operational systems helping organizations manage integrated business processes efficiently.' : 'Mengembangkan sistem operasional yang membantu organisasi mengelola proses bisnis secara lebih efisien dan terintegrasi.'
                                ]
                            ]
                        ],
                        [
                            'category' => 'RUN & SUPPORT',
                            'header_bg' => '#A7F432',
                            'header_text_color' => '#031A44',
                            'border_color' => '#12AED0',
                            'items' => [
                                [
                                    'title' => $locale == 'en' ? 'Quality Assurance (QA) Governance' : 'Tata Kelola Jaminan Kualitas (QA) / Tata Kelola QA',
                                    'desc' => $locale == 'en' ? 'Ensuring software quality through testing, QA governance, and structured release processes.' : 'Memastikan kualitas perangkat lunak melalui pengujian menyeluruh, tata kelola QA, dan proses rilis yang terstruktur.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'Managed Support Services' : 'Layanan Dukungan Terkelola',
                                    'desc' => $locale == 'en' ? 'Providing support and maintenance services so business operations run smoothly.' : 'Menyediakan layanan dukungan dan pemeliharaan sistem agar operasional bisnis tetap berjalan optimal setelah implementasi.'
                                ],
                                [
                                    'title' => $locale == 'en' ? 'Microsoft Dynamics 365 & Power Platform' : 'Microsoft Dynamics 365 & Power Platform',
                                    'desc' => $locale == 'en' ? 'Supporting Microsoft Dynamics 365 implementations and Power Platform integrations.' : 'Mendukung implementasi Microsoft Dynamics 365 dan integrasi Power Platform untuk meningkatkan produktivitas dan efisiensi bisnis.'
                                ]
                            ]
                        ]
                    ]
                ],
            ],

        ];
    }

    public function index()
    {
        $caseStudies = $this->getCaseStudiesData();
        return view('pages.studi-kasus', compact('caseStudies'));
    }

    public function show($slug)
    {
        $allStudies = $this->getCaseStudiesData();

        $caseStudy = collect($allStudies)->firstWhere('slug', $slug);

        abort_unless($caseStudy, 404);

        $relatedCases = collect($allStudies)
            ->reject(function ($item) use ($slug) {
                return $item['slug'] === $slug;
            })
            ->take(2)
            ->values()
            ->all();

        $caseStudy['related_cases'] = $relatedCases;

        return view('pages.studi-kasus-detail', compact('caseStudy'));
    }
}
