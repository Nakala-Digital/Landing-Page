<?php

/*
|--------------------------------------------------------------------------
| Solution cases
|--------------------------------------------------------------------------
| Each 'cases' entry is one solution-detail instance rendered by
| pages/solution-detail.blade.php. Text fields are bilingual pairs
| ['en' => ..., 'id' => ...].
|
| 'variant' (optional, default 'desk'): set to 'pilar' for the four
|   education ecosystem-pillar records (attract-admit, learn-engage,
|   operate-pay, manage-grow), which render the detail-solusi Figma variant
|   ("Solusi Detail & Fitur" headline, "Dampak Nyata" stat block, and
|   "Jadwalkan Sesi Discovery" CTA). Omitted/'desk' records render the
|   desk-solusi Figma variant (original headline, "Dampak Bisnis" list, and
|   "Mulai Konsultasi Gratis" CTA).
| 'impact_stats' (optional): used only by 'pilar' records. Bilingual block
|   with 'stats' => [['value' => '85%', 'label' => ...], ...] and an optional
|   'callout' quote. When omitted, the plain 'impact' list renders instead.
|   Stat values are transcribed verbatim from the Figma exports.
|   NOTE: 'impact' is fallback-only content — omit it from records that
|   carry 'impact_stats' in both locales (it never renders for them).
| 'hero_image' (optional, default 'assets/detail-solusi-hero.webp'): per-record
|   hero band art for the pilar variant ('pilar' records all share the default
|   PORTOFOLIO band until per-pillar art is confirmed).
| 'image' (optional): thumbnail used by case-study cards on
|   pages/service-detail.blade.php. Values reference config('portfolio')
|   artwork (/images/portfolio/*.webp); cards fall back to a placeholder
|   icon when omitted.
| 'hero_highlight' (optional): bilingual array of phrases within 'title' that
|   the hero renders in Electric Cyan per the detail-solusi Figma exports
|   (e.g. attract-admit: 'Tingkatkan Konversi Pendaftar').
| 'feature_icons' (optional): Material Symbols names, one per 'features'
|   entry, transcribed from the per-feature icon set in the detail-solusi
|   Figma exports. Falls back to 'check_circle' when omitted.
| 'features_split' (optional): set true to render the feature rows as a
|   2-column split grid (learn-engage per its Figma export); the last row
|   spans both columns and centers its content.
| 'accent_colors' (optional): Tailwind border-color token names without the
|   'border-' prefix, one per feature row (the cycle repeats for longer
|   lists). Defaults to ['electric-cyan', 'impact-lime', 'midnight-navy'].
|
| SLUG RECONCILIATION (spec D2-10 vs canonical records):
|   The spec lists instances as `ai-hiring`, `crm-ai-admissions`, `hrms`,
|   and `d365-managed-support`. Canonical record ids are kept where records
|   already existed:
|     - spec `hrms`                  -> canonical record `hrms-mahya`
|     - spec `d365-managed-support`  -> canonical record `d365-support`
|   `crm-ai-admissions` was added as a new record (spec slug = record id).
|   No alias records are registered; links must use the canonical ids.
|
*/

return [
    'cases' => [
        [
            'id' => 'ai-hiring',
            'image' => '/images/portfolio/ai-hiring.webp',
            'icon' => 'psychology',
            'featured' => true,
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'AI Hiring & GenAI Recruitment',
                'id' => 'AI Hiring & Rekrutmen GenAI',
            ],
            'headline' => [
                'en' => 'Accelerate talent acquisition with AI-driven screening and precision candidate matching.',
                'id' => 'Akselerasi akuisisi talenta dengan seleksi berbasis AI dan pencocokan kandidat yang presisi.',
            ],
            'category' => [
                'en' => 'Intelligent Talent Acquisition',
                'id' => 'Akuisisi Talenta Cerdas',
            ],
            'summary' => [
                'en' => 'Empower your HR teams to hire smarter. Our Generative AI platform automates CV parsing, evaluates job-fit accurately, and shortlists top-tier candidates, eliminating manual bottlenecks.',
                'id' => 'Berdayakan tim HR Anda untuk merekrut lebih cerdas. Platform Generative AI kami mengotomatiskan ekstraksi data CV, mengevaluasi kecocokan secara akurat, dan menyeleksi kandidat terbaik, menghilangkan hambatan proses manual.',
            ],
            'who_it_helps' => [
                'en' => ['HR Enterprise Teams', 'Recruitment Managers', 'Talent Acquisition Agencies'],
                'id' => ['Tim HR Enterprise', 'Manajer Rekrutmen', 'Agensi Akuisisi Talenta'],
            ],
            'business_value' => [
                'en' => 'Reduce screening overhead by up to 80%, eliminate unconscious bias in evaluations, and seamlessly scale high-volume recruitment operations.',
                'id' => 'Pangkas waktu screening hingga 80%, eliminasi bias tak sadar dalam evaluasi, dan skalakan operasional rekrutmen volume tinggi tanpa hambatan.',
            ],
            'challenge' => [
                'en' => 'Enterprise HR departments often lose weeks manually screening thousands of CVs. This manual bottleneck results in inconsistent candidate evaluations, prolonged time-to-hire, and the risk of losing top talent to competitors.',
                'id' => 'Departemen HR enterprise seringkali membuang waktu berminggu-minggu untuk menyaring ribuan CV secara manual. Hambatan ini memicu evaluasi yang tidak konsisten, time-to-hire yang lambat, dan risiko kehilangan talenta unggul ke kompetitor.',
            ],
            'solution' => [
                'en' => 'We deploy an intelligent automation platform that parses CVs, analyzes candidate profiles against strict job criteria, and provides unbiased, data-driven scoring—ensuring your team engages only with the most qualified talent.',
                'id' => 'Kami mengimplementasikan platform otomasi cerdas yang mengekstraksi CV, menganalisis profil kandidat berdasarkan kriteria pekerjaan, dan memberikan penilaian berbasis data yang objektif—memastikan tim Anda hanya berinteraksi dengan talenta paling memenuhi syarat.',
            ],
            'features' => [
                'en' => ['Intelligent CV parsing and candidate scoring', 'Precision job-fit ranking and automated shortlisting', 'Integrated interview scheduling and recruiter dashboard', 'Transparent candidate status portal and analytics'],
                'id' => ['Parsing CV cerdas dan sistem penilaian kandidat', 'Peringkat kecocokan presisi dan shortlisting otomatis', 'Penjadwalan wawancara terintegrasi dan dashboard rekrutmen', 'Portal status kandidat transparan dan analitik komprehensif'],
            ],
            'impact' => [
                'en' => ['Decreased CV screening time by up to 80%', 'Established consistent, bias-reduced evaluations', 'Accelerated time-to-hire ensuring better candidate experience', 'Seamlessly scalable for high-volume enterprise hiring'],
                'id' => ['Waktu screening CV berkurang secara dramatis hingga 80%', 'Menciptakan evaluasi yang konsisten dan meminimalisir bias', 'Time-to-hire yang jauh lebih cepat demi pengalaman kandidat terbaik', 'Sangat skalabel untuk rekrutmen skala enterprise bervolume tinggi'],
            ],
            'blurb' => [
                'en' => 'AI-based recruitment platform for CV parsing, candidate scoring, automated shortlisting, scheduling, and recruitment analytics.',
                'id' => 'Platform rekrutmen berbasis AI untuk parsing CV, scoring kandidat, shortlisting otomatis, penjadwalan, dan analitik rekrutmen.',
            ],
            'accent' => 'cyan',
            'capability' => 'AI Technology & GenAI, Custom Software Development, SaaS Platform',
        ],
        [
            'id' => 'crm-ai-admissions',
            'icon' => 'campaign',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'CRM AI Admissions',
                'id' => 'CRM AI Admissions',
            ],
            'headline' => [
                'en' => 'Turn every admission inquiry into a guided, trackable journey with an AI-assisted CRM.',
                'id' => 'Ubah setiap pertanyaan pendaftaran menjadi perjalanan yang terpandu dan terlacak dengan CRM berbantuan AI.',
            ],
            'category' => [
                'en' => 'Admission CRM & AI Assistant',
                'id' => 'CRM Penerimaan & AI Assistant',
            ],
            'summary' => [
                'en' => 'Centralize PMB/PPDB leads, documents, and follow-ups in one admission CRM, with an AI Admission Assistant that answers program, fee, requirement, and status questions around the clock.',
                'id' => 'Pusatkan lead, dokumen, dan tindak lanjut PMB/PPDB dalam satu CRM penerimaan, dengan AI Admission Assistant yang menjawab pertanyaan program, biaya, persyaratan, dan status kapan saja.',
            ],
            'who_it_helps' => [
                'en' => ['Admission Officers', 'Marketing Teams of Schools & Campuses', 'Prospective Students & Parents'],
                'id' => ['Petugas Admisi', 'Tim Marketing Sekolah & Kampus', 'Calon Siswa/Mahasiswa & Orang Tua'],
            ],
            'business_value' => [
                'en' => 'Every inquiry answered consistently and instantly, documents tracked to completeness, and follow-ups escalated to admission officers exactly when needed.',
                'id' => 'Setiap pertanyaan terjawab konsisten dan instan, dokumen terlacak hingga lengkap, dan tindak lanjut naik ke petugas admisi tepat saat dibutuhkan.',
            ],
            'challenge' => [
                'en' => 'Admission inquiries arrive through scattered channels, requirements and documents are checked manually, and slow follow-ups quietly lose prospective students before they enroll.',
                'id' => 'Pertanyaan pendaftaran datang dari kanal yang tersebar, persyaratan dan dokumen diperiksa manual, dan tindak lanjut yang lambat membuat calon siswa/mahasiswa hilang sebelum mendaftar.',
            ],
            'solution' => [
                'en' => 'We build an admission CRM with lead management, document completeness checks, and an AI Admission Assistant that guides applicants through program, fee, requirement, and status questions — with human handoff for anything that needs an admission officer.',
                'id' => 'Kami membangun CRM penerimaan dengan manajemen lead, pemeriksaan kelengkapan dokumen, dan AI Admission Assistant yang memandu pendaftar menjawab pertanyaan program, biaya, persyaratan, dan status — dengan eskalasi ke petugas manusia untuk hal yang membutuhkan admisi.',
            ],
            'features' => [
                'en' => ['Admission CRM & lead pipeline management', 'AI Admission Assistant for program, fee, and requirement answers', 'Document status tracking and completeness reminders', 'Human handoff, activity logs, and audit trail', 'Admission funnel dashboard for management insight'],
                'id' => ['Admission CRM & pengelolaan pipeline lead', 'AI Admission Assistant untuk jawaban program, biaya, dan persyaratan', 'Tracking status dokumen dan reminder kelengkapan', 'Human handoff, log aktivitas, dan audit trail', 'Dashboard funnel penerimaan untuk insight manajemen'],
            ],
            'impact' => [
                'en' => ['Consistent, instant answers on every channel applicants use', 'Admission documents tracked until complete', 'Follow-ups that never slip through the cracks', 'Management visibility into the admission funnel'],
                'id' => ['Jawaban konsisten dan instan di setiap kanal yang digunakan pendaftar', 'Dokumen pendaftaran terlacak hingga lengkap', 'Tindak lanjut yang tidak pernah terlewat', 'Visibilitas manajemen atas funnel penerimaan'],
            ],
            'capability' => 'AI Technology & GenAI, Custom Software Development, Admission CRM',
        ],
        [
            'id' => 'hrms-mahya',
            'image' => '/images/portfolio/hrms-mahya.webp',
            'icon' => 'badge',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'HRMS / Mahya Platform',
                'id' => 'HRMS / Platform Mahya',
            ],
            'headline' => [
                'en' => 'Simplify people management from attendance to payroll, all in one place.',
                'id' => 'Sederhanakan pengelolaan karyawan dari absensi hingga payroll, semua dalam satu tempat.',
            ],
            'category' => [
                'en' => 'Employee Self-Service & HR Operations',
                'id' => 'Employee Self-Service & Operasional HR',
            ],
            'summary' => [
                'en' => 'Stop juggling spreadsheets. Mahya centralizes attendance, leave, payroll, and employee data into one easy-to-use system with self-service access for everyone.',
                'id' => 'Berhenti mengelola banyak spreadsheet. Mahya memusatkan absensi, cuti, payroll, dan data karyawan dalam satu sistem yang mudah digunakan dengan akses self-service.',
            ],
            'who_it_helps' => [
                'en' => ['HR Departments', 'Company Managers', 'Employees'],
                'id' => ['Departemen HR', 'Manajer Perusahaan', 'Karyawan'],
            ],
            'business_value' => [
                'en' => 'Reduce manual HR processing, give employees self-service access, and get real-time visibility into your workforce data.',
                'id' => 'Kurangi proses manual HR, berikan akses self-service ke karyawan, dan dapatkan visibilitas real-time data karyawan.',
            ],
            'challenge' => [
                'en' => 'HR operations scattered across spreadsheets messy, error-prone, and impossible to track. Employees queue up for leave approvals and payslip requests.',
                'id' => 'Operasional HR tersebar di banyak spreadsheet berantakan, rawan error, dan sulit dilacak. Karyawan mengantre untuk approval cuti dan request slip gaji.',
            ],
            'solution' => [
                'en' => 'Mahya brings everything into one platform attendance, leave, payroll, employee profiles, and approvals accessible from anywhere.',
                'id' => 'Mahya menyatukan semuanya dalam satu platform absensi, cuti, payroll, profil karyawan, dan approval bisa diakses dari mana saja.',
            ],
            'features' => [
                'en' => ['Attendance and leave management', 'Payroll processing and employee profiles', 'Approval workflows and reporting dashboard', 'Mobile-friendly interface'],
                'id' => ['Manajemen absensi dan cuti', 'Proses payroll dan profil karyawan', 'Approval workflow dan dashboard reporting', 'Interface mobile-friendly'],
            ],
            'impact' => [
                'en' => ['Centralized HR data with real-time visibility', 'Significantly reduced manual HR processing time', 'Improved employee experience with self-service', 'Ready for multi-entity or multi-branch deployment'],
                'id' => ['Data HR terpusat dengan visibilitas real-time', 'Waktu proses manual HR berkurang signifikan', 'Pengalaman karyawan meningkat dengan self-service', 'Siap untuk deployment multi-entitas atau multi-cabang'],
            ],
            'blurb' => [
                'en' => 'Custom HRMS platform for attendance, leave, payroll, employee profiles, manager approval, and HR reporting.',
                'id' => 'Platform HRMS custom untuk absensi, cuti, payroll, profil karyawan, approval manager, dan pelaporan HR.',
            ],
            'accent' => 'lime',
            'capability' => 'Custom Software Development, SaaS Platform, Operational Systems',
        ],
        [
            'id' => 'hse-operations',
            'image' => '/images/portfolio/hse-operations.webp',
            'icon' => 'health_and_safety',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'HSE / Operations Platform',
                'id' => 'Platform HSE / Operasional',
            ],
            'headline' => [
                'en' => 'Keep your workplace safe, compliant, and audit-ready.',
                'id' => 'Jaga tempat kerja tetap aman, patuh, dan siap audit.',
            ],
            'category' => [
                'en' => 'Health, Safety & Environment Digitalization',
                'id' => 'Digitalisasi Health, Safety & Environment',
            ],
            'summary' => [
                'en' => 'Move from paper-based safety reporting to a digital system. Report incidents, manage checklists, and track compliance in real time.',
                'id' => 'Beralih dari pelaporan keselamatan berbasis kertas ke sistem digital. Laporkan insiden, kelola checklist, dan lacak kepatuhan secara real-time.',
            ],
            'who_it_helps' => [
                'en' => ['HSE Teams', 'Operations Managers', 'Compliance Officers'],
                'id' => ['Tim HSE', 'Manajer Operasional', 'Petugas Kepatuhan'],
            ],
            'business_value' => [
                'en' => 'Faster incident response, reduced compliance risk, and audit-ready documentation all from one platform.',
                'id' => 'Respons insiden lebih cepat, risiko kepatuhan berkurang, dan dokumentasi siap audit semua dari satu platform.',
            ],
            'challenge' => [
                'en' => 'Safety reporting still relies on paper forms and scattered emails incidents go unreported, and proving compliance is a struggle.',
                'id' => 'Pelaporan keselamatan masih mengandalkan form kertas dan email terpisah insiden tidak terlapor, dan membuktikan kepatuhan sangat sulit.',
            ],
            'solution' => [
                'en' => 'We provide a central platform for digital incident reporting, safety checklist management, compliance dashboards, and real-time alerts.',
                'id' => 'Kami menyediakan platform terpusat untuk pelaporan insiden digital, manajemen checklist keselamatan, dashboard kepatuhan, dan alert real-time.',
            ],
            'features' => [
                'en' => ['Incident reporting and tracking', 'Safety checklist management', 'Compliance dashboard and real-time alerts', 'Audit trail and role-based access'],
                'id' => ['Pelaporan dan tracking insiden', 'Manajemen safety checklist', 'Dashboard kepatuhan dan alert real-time', 'Audit trail dan akses berbasis role'],
            ],
            'impact' => [
                'en' => ['Faster incident response through real-time reporting', 'Clear HSE compliance visibility for management', 'Reduced risk of unreported safety incidents', 'Audit-ready documentation and reporting trail'],
                'id' => ['Respons insiden lebih cepat lewat pelaporan real-time', 'Visibilitas kepatuhan HSE jelas untuk manajemen', 'Risiko insiden tak terlapor berkurang', 'Dokumentasi dan trail siap audit'],
            ],
            'blurb' => [
                'en' => 'Digital platform for incident reporting, safety checklists, compliance dashboards, alerts, audit trail, and role-based access.',
                'id' => 'Platform digital untuk pelaporan insiden, safety checklist, dashboard kepatuhan, alert, audit trail, dan akses berbasis role',
            ],
            'accent' => 'navy',
            'capability' => 'Operational Systems, Custom Software Development, QA Governance',
        ],
        [
            'id' => 'ppdb-school',
            'image' => '/images/portfolio/website-ppdb.webp',
            'icon' => 'school',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'PPDB Website & School Portal',
                'id' => 'Website PPDB & Portal Sekolah',
            ],
            'headline' => [
                'en' => 'Transform school admissions from paper chaos to digital clarity.',
                'id' => 'Transformasi penerimaan siswa dari kekacauan kertas ke kejelasan digital.',
            ],
            'category' => [
                'en' => 'Education Digital Transformation',
                'id' => 'Transformasi Digital Pendidikan',
            ],
            'summary' => [
                'en' => 'Move school admissions online. Digital registration, document verification, real-time status tracking, and a public school website all in one solution.',
                'id' => 'Pindahkan penerimaan siswa ke online. Registrasi digital, verifikasi dokumen, tracking status real-time, dan website sekolah publik semua dalam satu solusi.',
            ],
            'who_it_helps' => [
                'en' => ['School Administrators', 'Yayasan / Education Foundations', 'Parents & Prospective Students'],
                'id' => ['Admin Sekolah', 'Yayasan Pendidikan', 'Orang Tua & Calon Siswa'],
            ],
            'business_value' => [
                'en' => 'Streamlined admissions, happier parents, reduced admin workload, and a professional school website ready for PPDB season.',
                'id' => 'Penerimaan lebih lancar, orang tua lebih puas, beban admin berkurang, dan website sekolah profesional siap untuk PPDB.',
            ],
            'challenge' => [
                'en' => 'Schools are buried in paper forms during PPDB season slow verification, lost documents, frustrated parents, and no real-time status visibility.',
                'id' => 'Sekolah tenggelam dalam form kertas saat PPDB verifikasi lambat, dokumen hilang, orang tua frustrasi, dan tidak ada visibilitas status real-time.',
            ],
            'solution' => [
                'en' => 'We build a complete digital admission system: online registration, automated document handling, real-time status tracking, and a school website.',
                'id' => 'Kami membangun sistem penerimaan digital lengkap: registrasi online, penanganan dokumen otomatis, tracking status real-time, dan website sekolah.',
            ],
            'features' => [
                'en' => ['Online registration forms', 'Document verification workflow', 'Admin dashboard and parent portal', 'Public school website'],
                'id' => ['Form registrasi online', 'Workflow verifikasi dokumen', 'Dashboard admin dan portal orang tua', 'Website publik sekolah'],
            ],
            'impact' => [
                'en' => ['More structured and auditable admission process', 'Better parent experience with real-time transparency', 'Reduced admin workload through automated workflows', 'SIT/UAT documentation and BAST handover delivered'],
                'id' => ['Proses penerimaan lebih terstruktur dan auditable', 'Pengalaman orang tua lebih baik dengan transparansi real-time', 'Beban admin berkurang lewat workflow otomatis', 'Dokumentasi SIT/UAT dan BAST handover tersedia'],
            ],
            'blurb' => [
                'en' => 'End-to-end student admission and school portal solution with online registration, document upload, verification workflow, and parent portal.',
                'id' => 'Solusi penerimaan siswa dan portal sekolah end-to-end dengan registrasi online, upload dokumen, workflow verifikasi, dan portal orang tua.',
            ],
            'accent' => 'lime',
            'capability' => 'Web & Portal Development, QA Governance, Agile Delivery',
        ],
        [
            'id' => 'ai-coach',
            'image' => '/images/portfolio/digital-coaching.webp',
            'icon' => 'smart_toy',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'Digital Coaching / AI Coach',
                'id' => 'Digital Coaching / AI Coach',
            ],
            'headline' => [
                'en' => 'Develop your team at scale with AI-powered coaching that adapts to each individual.',
                'id' => 'Kembangkan tim Anda secara skalabel dengan coaching berbasis AI yang beradaptasi dengan setiap individu.',
            ],
            'category' => [
                'en' => 'Personalized Learning & Performance Development',
                'id' => 'Pembelajaran Personal & Pengembangan Performa',
            ],
            'summary' => [
                'en' => 'Give every employee a personal coach. AI-powered learning journeys, goal tracking, and on-demand coaching conversations tailored to each person\'s needs.',
                'id' => 'Berikan setiap karyawan coach pribadi. Learning journey berbasis AI, tracking target, dan coaching percakapan on-demand disesuaikan dengan kebutuhan masing-masing.',
            ],
            'who_it_helps' => [
                'en' => ['HR Development Teams', 'Learning & Development Managers', 'Team Leaders'],
                'id' => ['Tim Pengembangan HR', 'Manager Learning & Development', 'Pimpinan Tim'],
            ],
            'business_value' => [
                'en' => 'Scale coaching without scaling costs, boost learning engagement, and get real-time visibility into team development progress.',
                'id' => 'Skalakan coaching tanpa menaikkan biaya proporsional, tingkatkan engagement belajar, dan dapatkan visibilitas real-time progres pengembangan tim.',
            ],
            'challenge' => [
                'en' => 'Scaling coaching across distributed teams is expensive and inconsistent limited human coaches, varying quality, and no way to track development progress.',
                'id' => 'Menghadirkan coaching untuk tim tersebar itu mahal dan tidak konsisten coach manusia terbatas, kualitas bervariasi, dan tidak ada cara melacak progres.',
            ],
            'solution' => [
                'en' => 'AI Coach delivers personalized learning journeys, goal tracking, on-demand conversational coaching, and manager visibility all in one platform.',
                'id' => 'AI Coach menghadirkan learning journey personal, tracking target, coaching percakapan on-demand, dan visibilitas manajer semua dalam satu platform.',
            ],
            'features' => [
                'en' => ['AI coaching chatbot', 'Personalized learning paths', 'Goal setting and progress dashboards', 'Manager visibility, content library, and reminders'],
                'id' => ['AI coaching chatbot', 'Learning path personal', 'Goal setting dan dashboard progres', 'Visibilitas manager, content library, dan reminder'],
            ],
            'impact' => [
                'en' => ['Scalable coaching without proportional cost increase', 'Personalized development for every employee', 'Improved learning engagement through AI nudges', 'Real-time performance visibility for managers and HR'],
                'id' => ['Coaching skalabel tanpa kenaikan biaya proporsional', 'Pengembangan personal untuk setiap karyawan', 'Engagement belajar meningkat lewat nudges AI', 'Visibilitas performa real-time untuk manager dan HR'],
            ],
            'blurb' => [
                'en' => 'AI coaching platform for personal learning journeys, goal tracking, progress dashboards, and on-demand conversational coaching.',
                'id' => 'Platform coaching berbasis AI untuk learning journey personal, tracking target, dashboard progres, dan coaching percakapan on-demand.',
            ],
            'accent' => 'navy',
            'capability' => 'AI Technology & GenAI, SaaS Platform Development, Custom Software Development',
        ],
        [
            'id' => 'd365-support',
            'image' => '/images/portfolio/d365-finance.webp',
            'icon' => 'account_balance',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'D365 Finance Support',
                'id' => 'D365 Finance Support',
            ],
            'headline' => [
                'en' => 'Enterprise-grade ERP with local support run D365 Finance without the headache.',
                'id' => 'ERP kelas enterprise dengan dukungan lokal jalankan D365 Finance tanpa pusing.',
            ],
            'category' => [
                'en' => 'Microsoft Dynamics 365 Capability Reference',
                'id' => 'Referensi Kapabilitas Microsoft Dynamics 365',
            ],
            'summary' => [
                'en' => 'Local Indonesia-based support for Microsoft D365 Finance configuration, customization, training, and managed services backed by regional expertise.',
                'id' => 'Dukungan lokal Indonesia untuk Microsoft D365 Finance konfigurasi, kustomisasi, training, dan managed service didukung expertise regional.',
            ],
            'who_it_helps' => [
                'en' => ['Finance Teams', 'IT Managers', 'Enterprise Operations'],
                'id' => ['Tim Keuangan', 'Manager IT', 'Operasional Enterprise'],
            ],
            'business_value' => [
                'en' => 'Faster local response, seamless configuration, and flexible engagement (project or retainer) bridging Microsoft enterprise capability with local business needs.',
                'id' => 'Respons lokal lebih cepat, konfigurasi lancar, dan engagement fleksibel (project atau retainer) menjembatani kapabilitas Microsoft enterprise dengan kebutuhan bisnis lokal.',
            ],
            'challenge' => [
                'en' => 'Running D365 Finance without local support means slow response times, configuration delays, low user adoption, and expensive international consultants.',
                'id' => 'Menjalankan D365 Finance tanpa dukungan lokal berarti respons lambat, keterlambatan konfigurasi, adopsi user rendah, dan konsultan internasional mahal.',
            ],
            'solution' => [
                'en' => 'We provide local D365 Finance configuration, customization, training, and managed support keeping your ERP running smoothly with people who understand your context.',
                'id' => 'Kami menyediakan konfigurasi D365 Finance lokal, kustomisasi, training, dan managed support menjaga ERP Anda berjalan lancar dengan orang yang memahami konteks Anda.',
            ],
            'features' => [
                'en' => ['D365 Finance module support', 'Power BI reporting integration', 'Power Automate workflow automation', 'AI Builder integration and user training'],
                'id' => ['Dukungan modul D365 Finance', 'Integrasi reporting Power BI', 'Otomasi workflow Power Automate', 'Integrasi AI Builder dan training user'],
            ],
            'impact' => [
                'en' => ['Faster response through dedicated local managed service', 'Bridge between Microsoft enterprise capability and local business needs', 'Flexible project-based or retainer engagement', 'Delivered with Romulus Digital certified Microsoft expertise'],
                'id' => ['Respons lebih cepat lewat managed service lokal khusus', 'Menjembatani kapabilitas Microsoft enterprise dengan kebutuhan bisnis lokal', 'Engagement fleksibel project-based atau retainer', 'Didukung expertise Microsoft tersertifikasi dari Romulus Digital'],
            ],
            'blurb' => [
                'en' => 'Indonesian local support for Microsoft D365 Finance backed by Romulus Digital regional capability.',
                'id' => 'Dukungan lokal Indonesia untuk Microsoft D365 Finance dengan dukungan kapabilitas regional Romulus Digital.',
            ],
            'accent' => 'cyan',
            'capability' => 'Microsoft D365 & Power Platform, Managed Support, Technology Consulting',
        ],
        [
            'id' => 'ai-automation',
            'icon' => 'hub',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'AI Automation & SaaS Platform',
                'id' => 'AI Automation & Platform SaaS',
            ],
            'headline' => [
                'en' => 'Automate repetitive work and unlock business insights practical AI for everyday operations.',
                'id' => 'Otomatiskan pekerjaan repetitif dan dapatkan wawasan bisnis AI praktis untuk operasional sehari-hari.',
            ],
            'category' => [
                'en' => 'AI Technology Capabilities',
                'id' => 'Kapabilitas Teknologi AI',
            ],
            'summary' => [
                'en' => 'Stop doing repetitive tasks manually. We help you automate workflows, process documents intelligently, and build AI-powered dashboards that make decision-making easier.',
                'id' => 'Berhenti mengerjakan tugas repetitif secara manual. Kami membantu Anda mengotomatiskan workflow, memproses dokumen secara cerdas, dan membangun dashboard AI yang memudahkan pengambilan keputusan.',
            ],
            'who_it_helps' => [
                'en' => ['Operations Teams', 'Business Analysts', 'Digital Transformation Leaders'],
                'id' => ['Tim Operasional', 'Analis Bisnis', 'Pemimpin Transformasi Digital'],
            ],
            'business_value' => [
                'en' => 'Less manual busywork, faster decisions, automation opportunities mapped through AI readiness assessment, and scalable AI capability for enterprise workflows.',
                'id' => 'Lebih sedikit pekerjaan manual, keputusan lebih cepat, peluang otomasi dipetakan lewat AI readiness assessment, dan kapabilitas AI skalabel untuk workflow enterprise.',
            ],
            'challenge' => [
                'en' => 'Manual repetitive tasks drain productivity across teams. Decision-making is slow because data is scattered, and teams lack the tools to automate and analyze efficiently.',
                'id' => 'Tugas repetitif manual menguras produktivitas tim. Pengambilan keputusan lambat karena data tersebar, dan tim kekurangan alat untuk otomatisasi dan analisis efisien.',
            ],
            'solution' => [
                'en' => 'We design and deploy GenAI workflows, document intelligence, data pipelines, analytics dashboards, and B2B AI SaaS platforms tailored to your operations.',
                'id' => 'Kami merancang dan membangun workflow GenAI, document intelligence, data pipeline, dashboard analitik, dan platform AI SaaS B2B yang disesuaikan dengan operasional Anda.',
            ],
            'features' => [
                'en' => ['Conversational AI and document intelligence', 'Intelligent automation and smart notifications', 'AI SaaS platform development', 'Data analytics and Microsoft Power Platform integration'],
                'id' => ['Conversational AI dan document intelligence', 'Intelligent automation dan smart notification', 'Pengembangan platform AI SaaS', 'Analitik data dan integrasi Microsoft Power Platform'],
            ],
            'impact' => [
                'en' => ['Reduced repetitive manual work across teams', 'Better operational decision support', 'Automation opportunities mapped through AI readiness assessment', 'Scalable AI capability for enterprise workflows'],
                'id' => ['Pekerjaan manual repetitif berkurang lintas tim', 'Decision support operasional lebih baik', 'Peluang otomasi dipetakan lewat AI readiness assessment', 'Kapabilitas AI skalabel untuk workflow enterprise'],
            ],
            'blurb' => [
                'en' => 'AI-based solutions for GenAI applications, document intelligence, intelligent automation, analytics dashboards, and AI SaaS products.',
                'id' => 'Solusi berbasis AI untuk aplikasi GenAI, document intelligence, intelligent automation, dashboard analytics, dan produk AI SaaS.',
            ],
            'accent' => 'navy',
            'capability' => 'GenAI Applications, Intelligent Automation, Data & Analytics, AI SaaS',
        ],
        [
            'id' => 'erp-platform-bisa',
            'image' => '/images/portfolio/erp-platform.webp',
            'icon' => 'dashboard_customize',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'ERP Platform BISA',
                'id' => 'ERP Platform BISA',
            ],
            'headline' => [
                'en' => 'Unify workflows, data, and cross-departmental reporting in one integrated ERP platform.',
                'id' => 'Satukan alur kerja, data, dan pelaporan lintas departemen dalam satu platform ERP terintegrasi.',
            ],
            'category' => [
                'en' => 'Enterprise Resource Planning',
                'id' => 'Perencanaan Sumber Daya Enterprise',
            ],
            'summary' => [
                'en' => 'An integrated ERP system that unifies workflows, data, and cross-departmental reporting in a single platform.',
                'id' => 'Sistem ERP terintegrasi yang menyatukan alur kerja, data, dan pelaporan lintas departemen dalam satu platform.',
            ],
            'who_it_helps' => [
                'en' => ['Operations Leaders', 'Finance & Accounting Teams', 'Department Managers'],
                'id' => ['Pemimpin Operasional', 'Tim Keuangan & Akuntansi', 'Manajer Departemen'],
            ],
            'business_value' => [
                'en' => 'A single source of truth across departments, streamlined cross-functional workflows, and real-time reporting that accelerates decision-making.',
                'id' => 'Satu sumber data terpercaya lintas departemen, alur kerja lintas fungsi yang lebih ramping, dan pelaporan real-time yang mempercepat pengambilan keputusan.',
            ],
            'challenge' => [
                'en' => 'Departments operate in silos with scattered data and disconnected workflows, making cross-departmental reporting slow and prone to error.',
                'id' => 'Departemen bekerja dalam silo dengan data yang tersebar dan alur kerja yang tidak terhubung, sehingga pelaporan lintas departemen lambat dan rawan kesalahan.',
            ],
            'solution' => [
                'en' => 'We implement an integrated ERP platform that connects workflows, consolidates data, and delivers unified reporting across the organization.',
                'id' => 'Kami mengimplementasikan platform ERP terintegrasi yang menghubungkan alur kerja, mengonsolidasikan data, dan menghadirkan pelaporan terpadu di seluruh organisasi.',
            ],
            'features' => [
                'en' => ['Cross-departmental workflow unification', 'Consolidated master data management', 'Real-time reporting and dashboards', 'Role-based access and audit trails'],
                'id' => ['Penyatuan alur kerja lintas departemen', 'Manajemen data master yang terkonsolidasi', 'Pelaporan real-time dan dashboard', 'Akses berbasis peran dan jejak audit'],
            ],
            'impact' => [
                'en' => ['Faster, more accurate cross-departmental reporting', 'Reduced duplicate data entry across teams', 'Improved operational visibility for leadership', 'Streamlined inter-department handoffs'],
                'id' => ['Pelaporan lintas departemen lebih cepat dan akurat', 'Pengurangan entri data ganda lintas tim', 'Visibilitas operasional lebih baik bagi pimpinan', 'Koordinasi antar departemen yang lebih lancar'],
            ],
            'blurb' => [
                'en' => 'Integrated ERP platform unifying workflows, data, and cross-departmental reporting.',
                'id' => 'Platform ERP terintegrasi yang menyatukan alur kerja, data, dan pelaporan lintas departemen.',
            ],
            'accent' => 'cyan',
            'capability' => 'Custom Software Development, Operational Systems, Technology Consulting',
        ],
        [
            'id' => 'lms-berkemah',
            'image' => '/images/portfolio/lms-berkemah.webp',
            'icon' => 'school',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => 'LMS Berkemah',
                'id' => 'LMS Berkemah',
            ],
            'headline' => [
                'en' => 'One digital learning ecosystem for online courses, psychology programs, and membership.',
                'id' => 'Satu ekosistem pembelajaran digital untuk kursus online, program psikologi, dan membership.',
            ],
            'category' => [
                'en' => 'Learning Management System',
                'id' => 'Sistem Manajemen Pembelajaran',
            ],
            'summary' => [
                'en' => 'A digital learning platform that combines online courses, psychology programs, and a membership system in one learning ecosystem.',
                'id' => 'Platform pembelajaran digital yang menggabungkan kursus online, program psikologi, dan sistem membership dalam satu ekosistem belajar.',
            ],
            'who_it_helps' => [
                'en' => ['Training Institutions', 'Course Creators', 'Membership Program Managers'],
                'id' => ['Lembaga Pelatihan', 'Pembuat Kursus', 'Pengelola Program Membership'],
            ],
            'business_value' => [
                'en' => 'A single ecosystem to deliver courses, manage psychology programs, and grow recurring membership revenue.',
                'id' => 'Satu ekosistem untuk menyelenggarakan kursus, mengelola program psikologi, dan menumbuhkan pendapatan membership berulang.',
            ],
            'challenge' => [
                'en' => 'Courses, programs, and membership content are scattered across separate tools, fragmenting the learner experience and complicating revenue management.',
                'id' => 'Kursus, program, dan konten membership tersebar di berbagai alat terpisah, memecah pengalaman belajar dan menyulitkan pengelolaan pendapatan.',
            ],
            'solution' => [
                'en' => 'We build an LMS that unifies online courses, psychology programs, and membership management in one integrated learning ecosystem.',
                'id' => 'Kami membangun LMS yang menyatukan kursus online, program psikologi, dan manajemen membership dalam satu ekosistem belajar terintegrasi.',
            ],
            'features' => [
                'en' => ['Online course delivery and progress tracking', 'Psychology program management', 'Membership and subscription management', 'Learner portal with payments and certificates'],
                'id' => ['Penyelenggaraan kursus online dan pelacakan progres', 'Manajemen program psikologi', 'Manajemen membership dan langganan', 'Portal peserta dengan pembayaran dan sertifikat'],
            ],
            'impact' => [
                'en' => ['Unified learner experience across all programs', 'Simplified membership and revenue management', 'Better program completion tracking', 'Scalable course and program delivery'],
                'id' => ['Pengalaman belajar terpadu di semua program', 'Manajemen membership dan pendapatan lebih sederhana', 'Pelacakan penyelesaian program lebih baik', 'Penyelenggaraan kursus dan program yang skalabel'],
            ],
            'blurb' => [
                'en' => 'Digital learning platform combining online courses, psychology programs, and membership in one ecosystem.',
                'id' => 'Platform pembelajaran digital yang menggabungkan kursus online, program psikologi, dan membership dalam satu ekosistem.',
            ],
            'accent' => 'navy',
            'capability' => 'Web & Portal Development, Custom Software Development, SaaS Platform',
        ],
        [
            'id' => '360-finance-support',
            'image' => '/images/portfolio/360-finance.webp',
            'icon' => 'monitoring',
            'span' => 'md:col-span-4',
            'title' => [
                'en' => '360 Finance Support & Managed Services',
                'id' => '360 Finance Support & Managed Services',
            ],
            'headline' => [
                'en' => 'An omnichannel analytics dashboard that turns sales, sentiment, and traffic data into accurate marketing strategy.',
                'id' => 'Dasbor analitik omnichannel yang mengubah data penjualan, sentimen, dan lalu lintas menjadi strategi pemasaran yang akurat.',
            ],
            'category' => [
                'en' => 'Finance & Marketing Analytics',
                'id' => 'Analitik Keuangan & Pemasaran',
            ],
            'summary' => [
                'en' => 'An omnichannel analytics dashboard that syncs e-commerce sales, social sentiment, and retail traffic to strengthen accurate, data-driven marketing strategies.',
                'id' => 'Dasbor analitik omnichannel yang menyinkronkan penjualan e-commerce, sentimen sosial, dan lalu lintas ritel untuk memperkuat strategi pemasaran berbasis data yang akurat.',
            ],
            'who_it_helps' => [
                'en' => ['Marketing Leaders', 'Finance Controllers', 'Retail & E-commerce Teams'],
                'id' => ['Pemimpin Pemasaran', 'Pengendali Keuangan', 'Tim Ritel & E-commerce'],
            ],
            'business_value' => [
                'en' => 'One consolidated view of channel performance, faster campaign adjustments, and marketing spend tied directly to measurable outcomes.',
                'id' => 'Satu pandangan terpadu atas kinerja kanal, penyesuaian kampanye yang lebih cepat, dan belanja pemasaran yang terhubung langsung dengan hasil terukur.',
            ],
            'challenge' => [
                'en' => 'Sales, sentiment, and traffic data live in separate channels, so marketing decisions rely on delayed, disconnected reports.',
                'id' => 'Data penjualan, sentimen, dan lalu lintas berada di kanal terpisah, sehingga keputusan pemasaran bergantung pada laporan yang tertunda dan tidak terhubung.',
            ],
            'solution' => [
                'en' => 'We deliver an omnichannel analytics dashboard that synchronizes e-commerce sales, social sentiment, and retail traffic for accurate, data-driven marketing strategy.',
                'id' => 'Kami menghadirkan dasbor analitik omnichannel yang menyinkronkan penjualan e-commerce, sentimen sosial, dan lalu lintas ritel untuk strategi pemasaran berbasis data yang akurat.',
            ],
            'features' => [
                'en' => ['Omnichannel data synchronization', 'E-commerce sales analytics', 'Social sentiment monitoring', 'Retail traffic and campaign reporting'],
                'id' => ['Sinkronisasi data omnichannel', 'Analitik penjualan e-commerce', 'Pemantauan sentimen sosial', 'Pelaporan lalu lintas ritel dan kampanye'],
            ],
            'impact' => [
                'en' => ['Consolidated cross-channel performance visibility', 'More accurate, data-driven marketing strategy', 'Faster response to channel trends', 'Marketing spend aligned to measurable outcomes'],
                'id' => ['Visibilitas kinerja lintas kanal yang terpadu', 'Strategi pemasaran berbasis data yang lebih akurat', 'Respon lebih cepat terhadap tren kanal', 'Belanja pemasaran selaras dengan hasil terukur'],
            ],
            'blurb' => [
                'en' => 'Omnichannel analytics dashboard syncing e-commerce sales, social sentiment, and retail traffic.',
                'id' => 'Dasbor analitik omnichannel yang menyinkronkan penjualan e-commerce, sentimen sosial, dan lalu lintas ritel.',
            ],
            'accent' => 'cyan',
            'capability' => 'Operational Systems, Data & Analytics, Managed Support',
        ],
        [
            'id' => 'attract-admit',
            'icon' => 'how_to_reg',
            'featured' => false,
            'span' => 'md:col-span-4',
            'variant' => 'pilar',
            'hero_image' => 'assets/detail-solusi-hero.webp',
            'variant' => 'pilar',
            'title' => [
                'en' => 'Attract & Admit: Boost Applicant Conversion from the First Contact',
                'id' => 'Attract & Admit: Tingkatkan Konversi Pendaftar Sejak Kontak Pertama',
            ],
            'hero_highlight' => [
                'en' => ['Boost Applicant Conversion'],
                'id' => ['Tingkatkan Konversi Pendaftar'],
            ],
            'headline' => [
                'en' => 'Build an easy, transparent admission experience from first outreach to official acceptance,',
                'id' => 'Bangun pengalaman pendaftaran yang mudah dan transparan dari promosi awal hingga siswa/mahasiswa resmi diterima,',
            ],
            'category' => [
                'en' => 'Attract & Admit Solution',
                'id' => 'Solusi Attract & Admit',
            ],
            'summary' => [
                'en' => 'supported by an AI Assistant that guides prospective applicants at every step.',
                'id' => 'didukung AI Assistant yang memandu calon pendaftar di setiap langkah.',
            ],
            'who_it_helps' => [
                'en' => ['Admissions Teams (New Student Admission)', 'PPDB Committee (New Student Enrollment)', 'School & Campus Marketing'],
                'id' => ['Tim Admisi/PMB (Penerimaan Mahasiswa Baru)', 'Panitia PPDB (Penerimaan Peserta Didik Baru)', 'Marketing Sekolah & Kampus'],
            ],
            'business_value' => [
                'en' => 'Increase registration conversion by up to 40% • Cut admin workload by 60% • Respond faster to prospective students',
                'id' => 'Meningkatkan Konversi Pendaftaran hingga 40% • Mengurangi Kerja Admin sebesar 60% • Mempercepat Respon ke Calon Siswa/Mahasiswa',
            ],
            'challenge' => [
                'en' => 'Manual repetitive tasks drain productivity across teams. Decision-making is slow because data is scattered, and teams lack the tools to automate and analyze efficiently.',
                'id' => 'Tugas repetitif manual menguras produktivitas tim. Pengambilan keputusan lambat karena data tersebar, dan tim kekurangan alat untuk otomatisasi dan analisis efisien.',
            ],
            'solution' => [
                'en' => 'We design and deploy GenAI workflows, document intelligence, data pipelines, analytics dashboards, and B2B AI SaaS platforms tailored to your operations.',
                'id' => 'Kami merancang dan membangun workflow GenAI, document intelligence, data pipeline, dashboard analitik, dan platform AI SaaS B2B yang disesuaikan dengan operasional Anda.',
            ],
            'features' => [
                'en' => ['Admission Website & Landing Page', 'PPDB / PMB Online Dashboard', 'Admission CRM & Lead Management', 'Payment Onboarding Integration', 'AI Admission Assistant 24/7'],
                'id' => ['Website & Landing Page Pendaftaran', 'PPDB / PMB Online Dashboard', 'Admission CRM & Lead Management', 'Payment Onboarding integrasi', 'AI Admission Assistant 24/7'],
            ],
            'feature_icons' => ['web', 'event_note', 'contact_phone', 'payments', 'smart_toy'],
            'impact_stats' => [
                'en' => [
                    'stats' => [
                        ['value' => '85%', 'label' => 'Higher prospective-student satisfaction'],
                        ['value' => '2.5×', 'label' => 'Faster document verification'],
                    ],
                    'callout' => 'Turn admission from a tedious process into a strategic recruitment asset.',
                ],
                'id' => [
                    'stats' => [
                        ['value' => '85%', 'label' => 'Meningkatkan Kepuasan Calon Siswa'],
                        ['value' => '2.5×', 'label' => 'Kecepatan Verifikasi Dokumen'],
                    ],
                    'callout' => 'Mengubah pendaftaran dari proses yang melelahkan menjadi aset strategis rekrutmen.',
                ],
            ],
            'capability' => 'Web Development, PPDB/PMB Platforms, Admission CRM, AI Technology & GenAI',
        ],
        [
            'id' => 'learn-engage',
            'icon' => 'menu_book',
            'featured' => false,
            'span' => 'md:col-span-4',
            'variant' => 'pilar',
            'hero_image' => 'assets/detail-solusi-hero.webp',
            'variant' => 'pilar',
            'title' => [
                'en' => 'Learn & Engage: Deliver Connected Learning Experiences',
                'id' => 'Learn & Engage: Hadirkan Pengalaman Belajar yang Terhubung',
            ],
            'hero_highlight' => [
                'en' => ['Deliver Connected Learning'],
                'id' => ['Hadirkan Pengalaman Belajar'],
            ],
            'headline' => [
                'en' => 'Bring learning, communication, and student engagement into one digital ecosystem',
                'id' => 'Satukan pembelajaran, komunikasi, dan keterlibatan siswa/mahasiswa dalam satu ekosistem yang digital',
            ],
            'category' => [
                'en' => 'Learn & Engage Solution',
                'id' => 'Solusi Learn & Engage',
            ],
            'summary' => [
                'en' => 'supported by an AI Assistant that helps with everyday learning.',
                'id' => 'didukung AI Assistant yang membantu proses belajar sehari-hari.',
            ],
            'who_it_helps' => [
                'en' => ['Teachers & Lecturers', 'Students', 'Parents', 'Academic Teams'],
                'id' => ['Guru & Dosen', 'Siswa & Mahasiswa', 'Orang Tua', 'Tim Akademik'],
            ],
            'business_value' => [
                'en' => 'Create consistent hybrid learning experiences, raise student engagement through collaborative features, and build more transparent communication between the school and parents.',
                'id' => 'Menciptakan pengalaman belajar hybrid yang konsisten, meningkatkan angka keterlibatan siswa melalui fitur kolaboratif, serta membangun komunikasi yang lebih transparan antara pihak sekolah dan orang tua.',
            ],
            'challenge' => [
                'en' => 'Learning materials, announcements, and parent communication are scattered across separate channels, making information easy to miss and hard to track for all stakeholders.',
                'id' => 'Materi pembelajaran, pengumuman, dan komunikasi dengan orang tua tersebar di berbagai kanal terpisah, membuat informasi mudah terlewat dan sulit dilacak oleh seluruh pemangku kepentingan.',
            ],
            'solution' => [
                'en' => 'An LMS integrated with student and parent portals, collaboration features, digital attendance tracking, and an AI Assistant that summarizes materials and answers academic questions.',
                'id' => 'LMS terintegrasi dengan portal siswa/mahasiswa dan orang tua, fitur kolaborasi, tracking kehadiran digital, serta AI Assistant yang membantu merangkum materi dan menjawab pertanyaan akademik.',
            ],
            'features' => [
                'en' => ['Modern LMS', 'Student Portal', 'Parent Portal', 'Communication', 'AI Learning Assistant'],
                'id' => ['LMS Modern', 'Student Portal', 'Parent Portal', 'Komunikasi', 'AI Learning Assistant'],
            ],
            'feature_icons' => ['school', 'manage_search', 'family_restroom', 'chat_bubble_outline', 'smart_toy'],
            'features_split' => true,
            'accent_colors' => ['electric-cyan', 'electric-cyan', 'impact-lime', 'impact-lime', 'midnight-navy'],
            'impact' => [
                'en' => ['Modern hybrid learning experiences', 'More intuitive student collaboration', 'Accurate automated attendance tracking'],
                'id' => ['Pengalaman belajar Hybrid modern', 'Kolaborasi siswa lebih intuitif', 'Tracking kehadiran otomatis akurat'],
            ],
            'capability' => 'LMS & E-Learning, Portal Development, Assessment Systems, AI Technology & GenAI',
        ],
        [
            'id' => 'operate-pay',
            'icon' => 'payments',
            'featured' => false,
            'span' => 'md:col-span-4',
            'variant' => 'pilar',
            'hero_image' => 'assets/detail-solusi-hero.webp',
            'variant' => 'pilar',
            'title' => [
                'en' => 'Operate & Pay: Simplify Institutional Operations and Finance',
                'id' => 'Operate & Pay: Sederhanakan Operasional dan Keuangan Institusi',
            ],
            'hero_highlight' => [
                'en' => ['Operations', 'Finance'],
                'id' => ['Operasional', 'Keuangan'],
            ],
            'headline' => [
                'en' => 'Manage billing, payments, HR, and school inventory from one dashboard',
                'id' => 'Kelola tagihan, pembayaran, SDM, hingga inventory sekolah dalam satu dashboard',
            ],
            'category' => [
                'en' => 'Operate & Pay Solution',
                'id' => 'Solusi Operate & Pay',
            ],
            'summary' => [
                'en' => 'supported by an AI Assistant that helps with everyday administrative tasks.',
                'id' => 'didukung AI Assistant yang membantu proses administrasi sehari-hari.',
            ],
            'who_it_helps' => [
                'en' => ['Finance & Tuition Billing Teams', 'HR & School Operations Teams', 'Head of Administration (KTU)'],
                'id' => ['Tim Keuangan & Penagihan SPP', 'Tim HR & Operasional Sekolah', 'Kepala Tata Usaha (KTU)'],
            ],
            'business_value' => [
                'en' => 'Automated billing & reconciliation • Real-time payment report transparency • Efficient daily HR and operations processes',
                'id' => 'Otomatisasi Tagihan & Rekonsilasi • Transparansi Laporan Pembayaran real-time • Efisiensi Proses HR dan Operasional Harian',
            ],
            'challenge' => [
                'en' => 'Managing tuition bills, attendance, and HR operations is still manual in spreadsheets, consuming thousands of staff hours a year and prone to costly data-entry errors.',
                'id' => 'Pengelolaan tagihan SPP, absensi, dan operasional SDM masih manual di spreadsheet, memakan waktu ribuan jam kerja staf per tahun dan rawan kesalahan entri data yang merugikan.',
            ],
            'solution' => [
                'en' => 'Automate tuition billing with payment gateway integration, and manage HRIS and school inventory in one operational dashboard, supported by an AI Assistant that answers administrative questions instantly.',
                'id' => 'Otomatisasi tagihan SPP dengan integrasi payment gateway, serta pengelolaan HRIS dan inventory sekolah dalam satu dashboard operasional didukung AI Assistant untuk menjawab pertanyaan administratif secara instan.',
            ],
            'features' => [
                'en' => ['Payment Gateway & SPP', 'Help Desk & Administration', 'AI Finance & HR Assistant', 'HRIS & Attendance', 'Inventory Management'],
                'id' => ['Payment Gateway & SPP', 'Help Desk & Administrasi', 'AI Finance & HR Assistant', 'HRIS & Absensi', 'Inventory Management'],
            ],
            'feature_icons' => ['payments', 'support_agent', 'psychology', 'calendar_month', 'inventory_2'],
            'impact_stats' => [
                'en' => [
                    'stats' => [
                        ['value' => '0%', 'label' => 'Human error in daily school financial reconciliation'],
                        ['value' => '3%', 'label' => 'Faster processing of HR leave and payroll administration'],
                        ['value' => '100%', 'label' => 'Real-time transparency of parents\' billing status'],
                    ],
                ],
                'id' => [
                    'stats' => [
                        ['value' => '0%', 'label' => 'Human Error dalam rekonsiliasi data keuangan sekolah harian'],
                        ['value' => '3%', 'label' => 'Lebih cepat dalam memproses administrasi cuti dan payroll SDM'],
                        ['value' => '100%', 'label' => 'Transparansi status tagihan orang tua murid secara real-time'],
                    ],
                ],
            ],
            'capability' => 'Financial Systems, Payment Gateway, HRIS & Attendance, Help Desk',
        ],
        [
            'id' => 'manage-grow',
            'icon' => 'monitoring',
            'featured' => false,
            'span' => 'md:col-span-4',
            'variant' => 'pilar',
            'hero_image' => 'assets/detail-solusi-hero.webp',
            'variant' => 'pilar',
            'title' => [
                'en' => 'Manage & Grow: Make Data-Driven Decisions',
                'id' => 'Manage & Grow: Ambil Keputusan Berbasis Data',
            ],
            'hero_highlight' => [
                'en' => ['Data-Driven'],
                'id' => ['Berbasis Data'],
            ],
            'headline' => [
                'en' => 'Monitor institutional performance in real time and make strategic decisions with an analytics dashboard',
                'id' => 'Pantau performa institusi secara real-time dan buat keputusan strategis dengan dashboard analitik',
            ],
            'category' => [
                'en' => 'Manage & Grow Solution',
                'id' => 'Solusi Manage & Grow',
            ],
            'summary' => [
                'en' => 'supported by an AI Assistant that summarizes insights for management.',
                'id' => 'didukung AI Assistant yang merangkum insight untuk manajemen.',
            ],
            'who_it_helps' => [
                'en' => ['School Principals', 'Foundations (Yayasan)', 'University Rectorate', 'Management Teams'],
                'id' => ['Kepala Sekolah', 'Yayasan', 'Rektorat', 'Tim Manajemen'],
            ],
            'business_value' => [
                'en' => 'Real-time data visibility • Data-driven decision support • Easier accreditation reporting',
                'id' => 'Visibilitas Data Real-time • Dukungan Keputusan Berbasis Data • Pelaporan Akreditasi Lebih Mudah',
            ],
            'challenge' => [
                'en' => 'Management often struggles to get a complete picture of institutional performance because data is scattered across separate systems, slowing down strategic decision-making.',
                'id' => 'Manajemen sering kali kesulitan mendapatkan gambaran menyeluruh soal performa institusi karena data tersebar di berbagai sistem terpisah, mengakibatkan lambatnya pengambilan keputusan strategis.',
            ],
            'solution' => [
                'en' => 'An integrated analytics dashboard with AI Predictive for student retention, plus institutional accreditation reporting in one place, supported by an AI Assistant for quick insights.',
                'id' => 'Dashboard analytics terintegrasi dengan AI Predictive untuk retensi siswa, serta pengelolaan laporan akreditasi institusi dalam satu tempat didukung AI Assistant untuk insight cepat.',
            ],
            'features' => [
                'en' => ['Analytics Dashboard', 'Management Report', 'AI Predictive Insight', 'Managed Service & Integration'],
                'id' => ['Analytics Dashboard', 'Management Report', 'AI Predictive Insight', 'Managed Service & Integration'],
            ],
            'feature_icons' => ['dashboard', 'edit_note', 'insights', 'integration_instructions'],
            'impact_stats' => [
                'en' => [
                    'stats' => [
                        ['value' => '90%', 'label' => 'Reduced time to compile accreditation reports'],
                        ['value' => '2.5×', 'label' => 'Operational visibility without technical barriers'],
                        ['value' => '95%', 'label' => 'Fast, accurate data-driven decision-making'],
                    ],
                ],
                'id' => [
                    'stats' => [
                        ['value' => '90%', 'label' => 'Mengurangi waktu penyusunan laporan akreditasi'],
                        ['value' => '2.5×', 'label' => 'Visibilitas operasional tanpa hambatan teknis'],
                        ['value' => '95%', 'label' => 'Cepat untuk mengambil keputusan berbasis data yang akurat'],
                    ],
                ],
            ],
            'capability' => 'Dashboard & Analytics, Management Reporting, Managed Service, System Integration',
        ],
    ],
];
