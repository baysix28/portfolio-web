@extends('layouts.app')

@section('title', 'Portofolio - Crystiano Bayu Satya Alves')

@section('content')

{{-- ==================== HERO SECTION ==================== --}}
<section id="beranda" class="hero">
    <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
        <p class="hero-greeting">Halo, Saya Bayu 👋</p>
        <h1 class="hero-title">
            <span class="title-accent">Informatics</span>
            <span class="title-dark">Student</span>
        </h1>
        <p class="hero-subtitle" id="typedText"></p>
        <p class="hero-subtitle-fallback">Mahasiswa Informatika Universitas Diponegoro dengan passion di Cloud Infrastructure, Linux System Administration, dan Web Development.</p>
        <div class="hero-buttons">
            <a href="#kontak" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i> Hubungi Saya
            </a>
            <a href="#proyek" class="btn btn-outline">
                <i class="fas fa-eye"></i> Lihat Proyek
            </a>
        </div>
        <div class="hero-stats">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-value">
                    <span class="stat-number" data-count="3">0</span><span class="stat-plus">+</span>
                </div>
                <span class="stat-label">Sertifikasi</span>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-value">
                    <span class="stat-number" data-count="4">0</span><span class="stat-plus">+</span>
                </div>
                <span class="stat-label">Pengalaman Organisasi</span>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="600">
                <div class="stat-value">
                    <span class="stat-number" data-count="50">0</span><span class="stat-plus">+</span>
                </div>
                <span class="stat-label">Koneksi</span>
            </div>
        </div>
    </div>
    <div class="hero-image-wrapper" data-aos="fade-left" data-aos-duration="1000">
        <div class="hero-image-ring">
            <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil Crystiano Bayu Satya Alves" class="hero-image" id="heroImage">
        </div>
        <div class="hero-floating-badge badge-1" data-aos="zoom-in" data-aos-delay="800">
            <i class="fab fa-linux"></i> Linux
        </div>
        <div class="hero-floating-badge badge-2" data-aos="zoom-in" data-aos-delay="1000">
            <i class="fab fa-microsoft"></i> Azure
        </div>
        <div class="hero-floating-badge badge-3" data-aos="zoom-in" data-aos-delay="1200">
            <i class="fab fa-redhat"></i> Red Hat
        </div>
        <div class="hero-floating-badge badge-4" data-aos="zoom-in" data-aos-delay="1400">
            <i class="fab fa-figma"></i> UI/UX
        </div>
    </div>
</section>

{{-- ==================== ABOUT SECTION ==================== --}}
<section id="tentang" class="about">
    <div class="section-container">
        <h2 class="section-title" data-aos="fade-up">
            About me<span class="title-dot">.</span>
        </h2>
        <div class="about-description" data-aos="fade-up" data-aos-delay="200">
            <div class="accent-bar"></div>
            <p>Mahasiswa Informatika di Universitas Diponegoro, Semarang. Berpengalaman sebagai SSC ICT Intern di PT Pertamina Patra Niaga, di mana saya menangani cloud infrastructure management dan deployment automation menggunakan Microsoft Azure. Aktif berorganisasi di BEM Undip sebagai Head of Research Media Division dan memiliki sertifikasi Red Hat System Administration serta Oracle Database Design.</p>
        </div>

        <div class="about-grid">
            <div class="about-column" data-aos="fade-up" data-aos-delay="300">
                <h3 class="about-card-title">My Stack<span class="title-dot">.</span></h3>
                <div class="stack-marquee-container">
                    {{-- Row 1: Left --}}
                    <div class="stack-marquee-row">
                        <div class="marquee-content">
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Microsoft Azure</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Linux / RHEL</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">DevOps & CI/CD</span>
                        </div>
                        <div class="marquee-content" aria-hidden="true">
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Microsoft Azure</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Linux / RHEL</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">DevOps & CI/CD</span>
                        </div>
                    </div>
                    
                    {{-- Row 2: Right (Reverse) --}}
                    <div class="stack-marquee-row reverse">
                        <div class="marquee-content">
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Python & C</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Database Design</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">UI/UX Design</span>
                        </div>
                        <div class="marquee-content" aria-hidden="true">
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Python & C</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Database Design</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">UI/UX Design</span>
                        </div>
                    </div>

                    {{-- Row 3: Left --}}
                    <div class="stack-marquee-row">
                        <div class="marquee-content">
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Team Leadership</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Figma</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Microsoft Azure</span>
                        </div>
                        <div class="marquee-content" aria-hidden="true">
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Team Leadership</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Figma</span>
                            <i class="far fa-star marquee-icon"></i>
                            <span class="stack-badge">Microsoft Azure</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-column" data-aos="fade-up" data-aos-delay="500">
                <h3 class="about-card-title">Sertifikasi<span class="title-dot">.</span></h3>
                <div class="about-card">
                    <div class="cert-list">
                        <div class="cert-item">
                            <div class="cert-icon"><i class="fab fa-redhat"></i></div>
                            <div class="cert-info">
                                <h4>Red Hat System Administration II (RH134)</h4>
                                <p>Red Hat &bull; Sep 2026</p>
                            </div>
                        </div>
                        <div class="cert-item">
                            <div class="cert-icon"><i class="fab fa-redhat"></i></div>
                            <div class="cert-info">
                                <h4>Red Hat System Administration I (RH124)</h4>
                                <p>Red Hat &bull; Sep 2026</p>
                            </div>
                        </div>
                        <div class="cert-item">
                            <div class="cert-icon"><i class="fas fa-database"></i></div>
                            <div class="cert-info">
                                <h4>Oracle Database Design</h4>
                                <p>Oracle &bull; Jan 2026</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== EXPERIENCE SECTION ==================== --}}
<section id="pengalaman" class="experience">
    <div class="section-container">
        <h2 class="section-title" data-aos="fade-up">
            Experience<span class="title-dot">.</span>
        </h2>

        <div class="experience-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="exp-tabs">
                <button class="exp-tab active" data-company="bem">
                    BEM Undip
                </button>
                <button class="exp-tab" data-company="pertamina">
                    Pertamina
                </button>
                <button class="exp-tab" data-company="hmif">
                    HMIF Undip
                </button>
                <button class="exp-tab" data-company="anforcom">
                    ANFORCOM
                </button>
            </div>

            <div class="exp-content">
                <div class="exp-panel active" id="panel-bem">
                    <h3 class="exp-role">Head of Research Media Division <span class="exp-at">@ BEM Universitas Diponegoro</span></h3>
                    <p class="exp-period">Feb 2026 — Sekarang</p>
                    <ul class="exp-list">
                        <li data-aos="fade-left" data-aos-delay="100">
                            <i class="fas fa-check-circle"></i>
                            Memimpin divisi Research Media di Badan Eksekutif Mahasiswa Universitas Diponegoro
                        </li>
                        <li data-aos="fade-left" data-aos-delay="200">
                            <i class="fas fa-check-circle"></i>
                            Mengelola tim dalam pembuatan konten dan riset menggunakan Figma
                        </li>
                        <li data-aos="fade-left" data-aos-delay="300">
                            <i class="fas fa-check-circle"></i>
                            Mengembangkan kemampuan Team Leadership dan manajemen proyek
                        </li>
                    </ul>
                </div>

                <div class="exp-panel" id="panel-pertamina">
                    <h3 class="exp-role">SSC ICT Intern <span class="exp-at">@ PT Pertamina Patra Niaga</span></h3>
                    <p class="exp-period">Jun 2026 — Jul 2026 &bull; Regional Jawa Bagian Tengah</p>
                    <ul class="exp-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Bertanggung jawab atas cloud infrastructure management dan deployment automation untuk aplikasi internal ASP.NET Core (Project SINTA).</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Otomatisasi Pipeline CI/CD:</strong> Merancang dan mengimplementasikan pipeline Continuous Integration dan Continuous Deployment (CI/CD) menggunakan GitHub Actions untuk merampingkan siklus rilis aplikasi dari build hingga production.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Implementasi Keamanan Cloud:</strong> Mengonfigurasi autentikasi aman tanpa kredensial antara GitHub workflows dan Microsoft Azure Web Apps menggunakan OpenID Connect (OIDC) dan User-Assigned Managed Identities.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Troubleshooting & Optimasi Sistem:</strong> Berhasil mendiagnosis dan menyelesaikan bottleneck deployment kritis (OneDeploy 500 Internal Server Errors) dengan merancang strategi pemaketan artefak yang efisien (kompresi ZIP otomatis via PowerShell), memastikan zero-downtime deployments.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Manajemen Infrastruktur Web:</strong> Mengelola konfigurasi dan jaringan Azure App Service, termasuk perencanaan arsitektur scalable dan pemetaan custom domain/subdomain via manajemen DNS dan CNAME record.</span>
                        </li>
                    </ul>
                </div>

                <div class="exp-panel" id="panel-hmif">
                    <h3 class="exp-role">Education Staff <span class="exp-at">@ HMIF Undip</span></h3>
                    <p class="exp-period">Feb 2025 — Jan 2026 &bull; 1 Tahun</p>
                    <ul class="exp-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Berkontribusi sebagai staff divisi pendidikan di Himpunan Mahasiswa Informatika
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Membantu penyelenggaraan kegiatan edukasi dan pengembangan akademik mahasiswa Informatika
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Berkolaborasi dengan tim untuk merancang program pembelajaran bagi anggota himpunan
                        </li>
                    </ul>
                </div>

                <div class="exp-panel" id="panel-anforcom">
                    <h3 class="exp-role">Vice Project Officer <span class="exp-at">@ ANFORCOM</span></h3>
                    <p class="exp-period">Mei 2025 — Sep 2025 &bull; 5 Bulan</p>
                    <ul class="exp-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Menjadi Vice Project Officer pada program ANFORCOM yang terdiri dari rangkaian acara pelatihan/seminar dan kompetisi IT
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Mengelola sesi training dan seminar yang terbuka untuk umum dan mahasiswa Informatika
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Mengembangkan kemampuan Project Management dalam mengoordinasikan tim dan acara
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== EDUCATION SECTION ==================== --}}
<section id="pendidikan" class="education">
    <div class="section-container">
        <h2 class="section-title" data-aos="fade-up">
            Education<span class="title-dot">.</span>
        </h2>
        <div class="education-card" data-aos="fade-up" data-aos-delay="200">
            <div class="edu-icon">
                <i class="fas fa-university"></i>
            </div>
            <div class="edu-info">
                <h3>Universitas Diponegoro</h3>
                <p class="edu-degree">Sarjana (S1) — Informatika</p>
                <p class="edu-location"><i class="fas fa-map-marker-alt"></i> Semarang, Jawa Tengah</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== SKILLS SECTION ==================== --}}
<section id="keahlian" class="skills">
    <div class="section-container">
        <h2 class="section-title" data-aos="fade-up">
            Skills<span class="title-dot">.</span>
        </h2>

        <div class="skills-grid">
            <div class="skill-category" data-aos="fade-up" data-aos-delay="100">
                <div class="skill-icon-wrapper">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3>Cloud & DevOps</h3>
                <ul>
                    <li>Microsoft Azure</li>
                    <li>CI/CD</li>
                    <li>DevOps</li>
                    <li>Cloud Security</li>
                    <li>Ansible</li>
                </ul>
            </div>

            <div class="skill-category" data-aos="fade-up" data-aos-delay="200">
                <div class="skill-icon-wrapper">
                    <i class="fas fa-terminal"></i>
                </div>
                <h3>System Admin</h3>
                <ul>
                    <li>Linux</li>
                    <li>Red Hat Linux</li>
                    <li>Red Hat Enterprise Linux (RHEL)</li>
                    <li>Red Hat Certified System Administrator</li>
                </ul>
            </div>

            <div class="skill-category" data-aos="fade-up" data-aos-delay="300">
                <div class="skill-icon-wrapper">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Programming & Database</h3>
                <ul>
                    <li>Python</li>
                    <li>C (Programming Language)</li>
                    <li>Database Design</li>
                    <li>SDLC</li>
                </ul>
            </div>

            <div class="skill-category" data-aos="fade-up" data-aos-delay="400">
                <div class="skill-icon-wrapper">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Design & Leadership</h3>
                <ul>
                    <li>UI/UX Design</li>
                    <li>Figma (Software)</li>
                    <li>Team Leadership</li>
                    <li>Project Management</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ==================== PROJECTS SECTION ==================== --}}
<section id="proyek" class="projects">
    <div class="section-container">
        <h2 class="section-title" data-aos="fade-up">
            Projects<span class="title-dot">.</span>
        </h2>

        <div class="project-grid">
            <div class="project-card" data-aos="fade-up" data-aos-delay="100" data-tilt>
                <div class="project-image">
                    <img src="{{ asset('images/risetra.png') }}" alt="RISETRA UI/UX Design" style="object-position: top;">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="https://www.figma.com/proto/MsMpqaT5kCP2LjnANfrM54/RISETRA?node-id=1-775&p=f&t=7Xc1xHTsXIXDlf02-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1" target="_blank" class="project-link" aria-label="View Prototype">
                                <i class="fab fa-figma"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>RISETRA - Academic Ecosystem</h3>
                    <p style="font-size: 13px; line-height: 1.5; margin-bottom: 12px;">Risetra adalah platform yang dirancang untuk membantu mahasiswa mengembangkan potensi dan berpartisipasi dalam kompetisi akademik. Menyediakan fitur Bank Riset, Partner Matching, Info Lomba, dan Mentor Connect yang saling terhubung untuk persiapan kompetisi secara terarah.</p>
                    <div class="project-tags">
                        <span>UI/UX</span>
                        <span>Figma</span>
                        <span>Prototyping</span>
                    </div>
                </div>
            </div>

            <div class="project-card" data-aos="fade-up" data-aos-delay="200" data-tilt>
                <div class="project-image">
                    <img src="{{ asset('images/cicd.png') }}" alt="Azure CI/CD Pipeline" style="object-fit: contain; background-color: #ffffff; padding: 10px; box-sizing: border-box;">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="https://github.com/baysix28/azure-cicd-pipeline-architecture" target="_blank" class="project-link" aria-label="Source Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Azure CI/CD Pipeline - Pertamina</h3>
                    <p style="font-size: 13px; line-height: 1.5; margin-bottom: 12px;">Arsitektur CI/CD otomatis menggunakan GitHub Actions untuk merilis aplikasi ASP.NET ke Azure App Service. Memecahkan masalah keamanan Zero-Trust dengan implementasi otentikasi OIDC (Passwordless), serta menyelesaikan kendala Azure OneDeploy Error 500 melalui manipulasi kompresi artefak menggunakan PowerShell.</p>
                    <div class="project-tags">
                        <span>Azure</span>
                        <span>CI/CD</span>
                        <span>GitHub Actions</span>
                        <span>OIDC</span>
                    </div>
                </div>
            </div>

            {{-- TEMPORARILY HIDDEN PENDING DOCUMENTATION
            <div class="project-card" data-aos="fade-up" data-aos-delay="200" data-tilt>
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&h=400&fit=crop" alt="ANFORCOM Event">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link" aria-label="View Project">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>ANFORCOM Event</h3>
                    <p>Rangkaian acara pelatihan IT, seminar, dan kompetisi yang terbuka untuk umum dan mahasiswa Informatika Undip.</p>
                    <div class="project-tags">
                        <span>Event</span>
                        <span>Management</span>
                        <span>IT Training</span>
                    </div>
                </div>
            </div>

            <div class="project-card" data-aos="fade-up" data-aos-delay="300" data-tilt>
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&h=400&fit=crop" alt="Linux Server">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link" aria-label="View Project">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="project-link" aria-label="Source Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Linux System Administration</h3>
                    <p>Proyek sertifikasi Red Hat — konfigurasi dan manajemen server Linux enterprise menggunakan RHEL.</p>
                    <div class="project-tags">
                        <span>Red Hat</span>
                        <span>Linux</span>
                        <span>RHEL</span>
                    </div>
                </div>
            </div>
            --}}
        </div>
    </div>
</section>

{{-- ==================== CONTACT SECTION ==================== --}}
<section id="kontak" class="contact">
    <div class="section-container">
        <div class="contact-content" data-aos="fade-up">
            <h2 class="section-title section-title-light">
                Mari Bekerja Sama<span class="title-dot">.</span>
            </h2>
            <p class="contact-desc">Apakah Anda memiliki proyek menarik atau peluang kolaborasi? Jangan ragu untuk menghubungi saya. Saya selalu terbuka untuk kesempatan baru!</p>
            <div class="contact-buttons">
                <a href="mailto:bayualves6126@gmail.com" class="btn btn-light">
                    <i class="fas fa-envelope"></i> Kirim Email
                </a>
                <a href="https://www.linkedin.com/in/bayualves/" class="btn btn-light-outline" target="_blank">
                    <i class="fab fa-linkedin-in"></i> LinkedIn
                </a>
            </div>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Semarang, Jawa Tengah, Indonesia</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-university"></i>
                    <span>Universitas Diponegoro</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
