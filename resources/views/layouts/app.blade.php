<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Web Developer - John Doe">
    <title>@yield('title', 'Portofolio.')</title>

    {{-- Google Fonts: Inter (body) + Syne (headings) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">

    {{-- Font Awesome 6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- AOS - Animate on Scroll --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>
<body>
    {{-- Navbar --}}
    <header class="navbar" id="navbar">
        <nav class="nav-container">
            <a href="#beranda" class="logo">Bayu Alves<span class="logo-dot">.</span></a>

            <ul class="nav-links" id="navLinks">
                <li><a href="#beranda" class="nav-link active" data-section="beranda">Beranda</a></li>
                <li><a href="#tentang" class="nav-link" data-section="tentang">Tentang</a></li>
                <li><a href="#pengalaman" class="nav-link" data-section="pengalaman">Pengalaman</a></li>
                <li><a href="#keahlian" class="nav-link" data-section="keahlian">Keahlian</a></li>
                <li><a href="#proyek" class="nav-link" data-section="proyek">Proyek</a></li>
                <li><a href="#kontak" class="nav-link" data-section="kontak">Kontak</a></li>
            </ul>

            {{-- Dark mode toggle --}}
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode">
                <i class="fas fa-moon"></i>
            </button>

            {{-- Hamburger --}}
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </nav>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <span class="logo">Bayu Alves<span class="logo-dot">.</span></span>
                <p class="footer-desc">Mahasiswa Informatika Universitas Diponegoro. Passionate in Cloud, Linux, dan Web Development.</p>
            </div>
            <div class="footer-links">
                <h4>Navigasi</h4>
                <a href="#beranda">Beranda</a>
                <a href="#tentang">Tentang</a>
                <a href="#pengalaman">Pengalaman</a>
                <a href="#proyek">Proyek</a>
                <a href="#kontak">Kontak</a>
            </div>
            <div class="footer-social">
                <h4>Sosial Media</h4>
                <div class="social-icons">
                    <a href="https://github.com/baysix28" target="_blank" aria-label="GitHub" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/bayualves/" target="_blank" aria-label="LinkedIn" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://instagram.com/bayuavs/" target="_blank" aria-label="Instagram" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Crystiano Bayu Satya Alves. Semua hak cipta dilindungi.</p>
        </div>
    </footer>

    {{-- Scroll to top button --}}
    <button class="scroll-top" id="scrollTop" aria-label="Scroll to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    {{-- Custom cursor follower --}}
    <div class="cursor-follower" id="cursorFollower"></div>

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('js/script.js') }}"></script>

    @stack('scripts')
</body>
</html>

