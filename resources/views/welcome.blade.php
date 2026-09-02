<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Evolusi App') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #ffffff;
            --bg-dark: #fafafa;
            --fg: #1a1a1a;
            --fg-dark: #f5f5f5;
            --accent: #ff6b35;
            --accent-hover: #e55a2b;
            --muted: #6b7280;
            --card: #ffffff;
            --border: #e5e7eb;
        }

        .dark {
            --bg: #0a0a0a;
            --bg-dark: #121212;
            --fg: #f5f5f5;
            --fg-dark: #1a1a1a;
            --accent: #ff6b35;
            --accent-hover: #e55a2b;
            --muted: #9ca3af;
            --card: #1a1a1a;
            --border: #272727;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--fg);
            min-height: 100vh;
        }

        .dark body {
            background-color: var(--bg-dark);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.2s ease;
            cursor: pointer;
            border: none;
            font-family: inherit;
        }

        .btn-primary {
            background-color: var(--accent);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            transform: translateY(-1px);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--accent);
            border: 1px solid var(--accent);
        }

        .btn-secondary:hover {
            background-color: var(--accent);
            color: white;
        }

        .card {
            background-color: var(--card);
            border: 1px solid var(--border);
            border-radius: 0.75rem;
            padding: 2rem;
            transition: all 0.2s ease;
        }

        .card:hover {
            border-color: var(--accent);
        }

        .dark .card {
            background-color: var(--card);
        }

        .nav-link {
            color: var(--muted);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: var(--accent);
        }

        .hero-badge {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .section {
            padding: 4rem 0;
        }

        @media (min-width: 768px) {
            .section {
                padding: 6rem 0;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="min-h-screen">

<nav class="bg-white dark:bg-[#1a1a1a] shadow-sm sticky top-0 z-50">
    <div class="container flex items-center justify-between h-16">
        <a href="/">
            <span class="text-xl font-bold tracking-wider" style="color: var(--accent);">Evolusi</span>
        </a>
        <div class="hidden md:flex items-center gap-8">
            <a href="#fitur" class="nav-link text-sm font-medium">Fitur</a>
            <a href="#tentang" class="nav-link text-sm font-medium">Tentang</a>
            <a href="#" class="btn btn-secondary text-sm">Mulai Sekarang</a>
        </div>
    </div>
</nav>

<header class="hero-section min-h-[80vh] relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="bg-gradient-to-b from-gray-50 to-white dark:from-gray-900 dark:to-gray-800"></div>
    </div>
    <div class="relative flex items-center justify-center text-center pt-20 pb-24">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6 fade-in">
                Selamat Datang di<br>
                <span class="text-[var(--accent)]">Evolusi App</span>
            </h1>
            <p class="text-lg text-[var(--muted)] max-w-2xl mx-auto mb-10 fade-in" style="transition-delay: 0.1s;">
                Aplikasi web modern built with Laravel untuk memenuhi tugas akademik dan beyond.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in" style="transition-delay: 0.2s;">
                <a href="#fitur" class="btn btn-primary px-6 py-3">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                    Lihat Fitur
                </a>
                <a href="#tentang" class="btn btn-secondary px-6 py-3">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                    Tentang Kami
                </a>
            </div>
        </div>
    </div>
    
    <div class="absolute bottom-0 left-0 right-0 bg-white dark:bg-gray-800 py-8">
        <div class="container flex items-center justify-between">
            <div class="text-center">
                <p class="text-sm text-[var(--muted)]">Dibuat dengan <heart class="text-red-500" style="vertical-align: middle;">.</p>
                <p class="text-sm font-medium mt-1">Tugas Akhir PKW</p>
            </div>
            <div class="hidden md:flex items-center gap-2 text-sm">
                <span class="text-[var(--muted)]">Versi 1.0.0</span>
            </div>
        </div>
    </div>
</header>

<main>
    <section id="fitur" class="section">
        <div class="container">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Fitur Utama</h2>
                <p class="text-[var(--muted)] max-w-2xl mx-auto">
                    Aplikasi ini menyediakan berbagai fitur untuk memudahkan pekerjaan sehari-hari.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card fade-in" style="transition-delay: 0.1s;">
                    <div class="h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[var(--accent)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v4M12 20v4M4.93 4.93l2.83 2.83M15.07 15.07l2.83 2.83M1 12l6-6m6 6l6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Authentication</h3>
                    <p class="text-[var(--muted)] text-sm">Sistem login dan registrasi terintegrasi menggunakan Laravel Breeze.</p>
                </div>
                <div class="card fade-in" style="transition-delay: 0.2s;">
                    <div class="h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[var(--accent)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v4M12 20v4M4.93 4.93l2.83 2.83M15.07 15.07l2.83 2.83M1 12l6-6m6 6l6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Responsive Design</h3>
                    <p class="text-[var(--muted)] text-sm">Tampilan yang indah di semua perangkat, dari mobile hingga desktop.</p>
                </div>
                <div class="card fade-in" style="transition-delay: 0.3s;">
                    <div class="h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[var(--accent)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v4M12 20v4M4.93 4.93l2.83 2.83M15.07 15.07l2.83 2.83M1 12l6-6m6 6l6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Database Migrations</h3>
                    <p class="text-[var(--muted)] text-sm">Migrasi database yang terstruktur dengan Laravel Eloquent ORM.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="section bg-gray-50 dark:bg-gray-900">
        <div class="container">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold mb-6">Tentang Aplikasi Ini</h2>
                <div class="card p-8">
                    <p class="text-[var(--muted)] text-lg leading-relaxed">
                        Aplikasi ini dibuat sebagai tugas akhir mata kuliah Pemrograman Web. Aplikasi ini dibangun menggunakan framework Laravel dan menampilkan desain yang modern dan minimalis.
                    </p>
                    <p class="text-[var(--muted)] text-lg mt-6 leading-relaxed">
                        Tujuan dari aplikasi ini adalah untuk memenuhi persyaratan tugas akademik sambil menunjukkan kemampuan dalam pengembangan aplikasi web modern menggunakan teknologi yang terkini.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="bg-gray-900 dark:bg-gray-800 text-white py-12">
    <div class="container">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <div>
                <span class="text-xl font-bold tracking-wider" style="color: var(--accent);">Evolusi</span>
                <p class="text-[var(--muted)] text-sm mt-1">Aplikasi tugas akhir PKW</p>
            </div>
            <div class="flex items-center gap-4 text-sm">
                <a href="#" class="nav-link">GitHub</a>
                <a href="#" class="nav-link">Documentation</a>
            </div>
        </div>
        <div class="mt-6 flex flex-col sm:flex-row justify-center gap-6 text-[var(--muted)]">
            <span>&copy; 2026 Evolusi App. All rights reserved.</span>
        </div>
    </div>
</footer>

<script>
    // Fade-in animation on scroll
    const fadeElements = document.querySelectorAll('.fade-in');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    fadeElements.forEach(el => observer.observe(el));

    // Mobile menu toggle
    const nav = document.querySelector('nav');
    const menuBtn = document.createElement('button');
    menuBtn.className = 'md:hidden w-10 h-10 flex items-center justify-center p-2';
    menuBtn.innerHTML = '<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>';
    nav.prepend(menuBtn);

    menuBtn.addEventListener('click', () => {
        nav.classList.toggle('bg-white dark:bg-gray-800');
    });
</script>

</body>
</html>