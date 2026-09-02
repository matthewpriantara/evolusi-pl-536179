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

    <section id="info-proyek" class="section">
        <div class="container">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold mb-4">Informasi Proyek</h2>
                    <p class="text-[var(--muted)] max-w-2xl mx-auto">
                        Detail teknis dan informasi akademik proyek ini.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                    <div class="card fade-in" style="transition-delay: 0.1s;">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: linear-gradient(135deg, var(--accent), #ff9f7a);">
                                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5zM6 12v5c3 3 9 3 12 0v-5"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-[var(--muted)] uppercase tracking-wider">Mata Kuliah</p>
                                <p class="font-semibold">Pemrograman Web</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card fade-in" style="transition-delay: 0.2s;">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: linear-gradient(135deg, #6366f1, #818cf8);">
                                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-[var(--muted)] uppercase tracking-wider">Framework</p>
                                <p class="font-semibold">Laravel {{ Illuminate\Foundation\Application::VERSION }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card fade-in" style="transition-delay: 0.3s;">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: linear-gradient(135deg, #10b981, #34d399);">
                                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2v4M12 20v4M4.93 4.93l2.83 2.83M15.07 15.07l2.83 2.83M1 12l6-6m6 6l6 6"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-[var(--muted)] uppercase tracking-wider">PHP Version</p>
                                <p class="font-semibold">PHP {{ PHP_MAJOR_VERSION }}.{{ PHP_MINOR_VERSION }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card fade-in" style="transition-delay: 0.4s;">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: linear-gradient(135deg, #f59e0b, #fbbf24);">
                                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 18l6-6-6-6"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-[var(--muted)] uppercase tracking-wider">Frontend</p>
                                <p class="font-semibold">TailwindCSS + Vite</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-6 fade-in" style="transition-delay: 0.5s;">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-[var(--accent)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        Detail Akademik
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                        <div class="flex justify-between py-2 border-b border-[var(--border)]">
                            <span class="text-[var(--muted)]">Program Studi</span>
                            <span class="font-medium">Teknologi Rekayasa Perangkat Lunak</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-[var(--border)]">
                            <span class="text-[var(--muted)]">Semester</span>
                            <span class="font-medium">5 (Lima)</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-[var(--border)]">
                            <span class="text-[var(--muted)]">Tugas</span>
                            <span class="font-medium">Repository Pertama (UAS)</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-[var(--border)]">
                            <span class="text-[var(--muted)]">Repository</span>
                            <span class="font-medium">evolusi-pl-24/536179/SV/24400</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-[var(--border)]">
                            <span class="text-[var(--muted)]">Branch Strategy</span>
                            <span class="font-medium">main → dev → feature/*</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-[var(--muted)]">CI/CD</span>
                            <span class="font-medium">GitHub Actions</span>
                        </div>
                    </div>
                </div>

                <div class="card p-6 mt-6 fade-in" style="transition-delay: 0.6s;">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-[var(--accent)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                        Quick Links
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="https://github.com" target="_blank" class="btn btn-secondary text-sm">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Repository
                        </a>
                        <a href="#" class="btn btn-secondary text-sm">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                                <polyline points="10 9 9 9 8 9"/>
                            </svg>
                            Documentation
                        </a>
                        <a href="#" class="btn btn-secondary text-sm">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="2" y1="12" x2="22" y2="12"/>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                            </svg>
                            Issues
                        </a>
                    </div>
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

<footer class="bg-gray-950 dark:bg-gray-950 text-white py-16 border-t border-gray-800">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div class="lg:col-span-1">
                <a href="/" class="block mb-4">
                    <span class="text-2xl font-bold tracking-wider" style="color: var(--accent);">Evolusi</span>
                </a>
                <p class="text-[var(--muted)] text-sm leading-relaxed mb-6">
                    Aplikasi web modern dibangun dengan Laravel untuk memenuhi tugas akhir mata kuliah Pemrograman Web.
                </p>
                <div class="flex items-center gap-4">
                    <a href="https://github.com" target="_blank" class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200" style="background: rgba(255, 107, 53, 0.1);" aria-label="GitHub">
                        <svg class="w-5 h-5" style="color: var(--accent);" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200" style="background: rgba(255, 107, 53, 0.1);" aria-label="Twitter">
                        <svg class="w-5 h-5" style="color: var(--accent);" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 9.24-3.308.867L9.865 12.09l-7.43 7.76-3.32-.819 8.476-9.27-7.224-8.21L9.276.846h3.53l5.5 6.534 1.306-1.447 1.406-.757h.002z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200" style="background: rgba(255, 107, 53, 0.1);" aria-label="LinkedIn">
                        <svg class="w-5 h-5" style="color: var(--accent);" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="font-semibold text-lg mb-4">Navigasi</h4>
                <nav class="space-y-3">
                    <a href="#fitur" class="nav-link text-sm block hover:translate-x-1 transition-transform">Fitur Utama</a>
                    <a href="#info-proyek" class="nav-link text-sm block hover:translate-x-1 transition-transform">Informasi Proyek</a>
                    <a href="#tentang" class="nav-link text-sm block hover:translate-x-1 transition-transform">Tentang Kami</a>
                    <a href="#" class="nav-link text-sm block hover:translate-x-1 transition-transform">Changelog</a>
                </nav>
            </div>

            <div>
                <h4 class="font-semibold text-lg mb-4">Resources</h4>
                <nav class="space-y-3">
                    <a href="https://laravel.com/docs" target="_blank" class="nav-link text-sm block hover:translate-x-1 transition-transform">Laravel Documentation</a>
                    <a href="https://tailwindcss.com/docs" target="_blank" class="nav-link text-sm block hover:translate-x-1 transition-transform">TailwindCSS Docs</a>
                    <a href="https://vitejs.dev" target="_blank" class="nav-link text-sm block hover:translate-x-1 transition-transform">Vite Documentation</a>
                    <a href="https://github.com/laravel/laravel" target="_blank" class="nav-link text-sm block hover:translate-x-1 transition-transform">Laravel GitHub</a>
                </nav>
            </div>

            <div>
                <h4 class="font-semibold text-lg mb-4">Kontak & Info</h4>
                <address class="not-italic text-sm text-[var(--muted)] space-y-3">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0" style="color: var(--accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span>Universitas Pendidikan Indonesia</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0" style="color: var(--accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="4" width="20" height="16" rx="2"/>
                            <path d="M22 6l-10 7L2 6"/>
                        </svg>
                        <span>pkw@upi.edu</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0" style="color: var(--accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>Bandung, Jawa Barat</span>
                    </div>
                </address>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-[var(--muted)]">
                    &copy; {{ date('Y') }} Evolusi App. Dibuat untuk tugas akhir Pemrograman Web.
                </p>
                <div class="flex items-center gap-6 text-sm text-[var(--muted)]">
                    <a href="#" class="nav-link hover:text-[var(--accent)] transition-colors">Privacy Policy</a>
                    <a href="#" class="nav-link hover:text-[var(--accent)] transition-colors">Terms of Service</a>
                    <a href="#" class="nav-link hover:text-[var(--accent)] transition-colors">Cookie Policy</a>
                </div>
            </div>
            
            <div class="mt-6 flex items-center justify-center gap-4 text-xs text-[var(--muted)]">
                <span class="flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" style="color: var(--accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    Built with Laravel {{ Illuminate\Foundation\Application::VERSION }}
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" style="color: var(--accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v4M12 20v4M4.93 4.93l2.83 2.83M15.07 15.07l2.83 2.83M1 12l6-6m6 6l6 6"/>
                    </svg>
                    PHP {{ PHP_MAJOR_VERSION }}.{{ PHP_MINOR_VERSION }}
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" style="color: #06B6D4;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                    TailwindCSS
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" style="color: #646CFF;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                    </svg>
                    Vite
                </span>
            </div>
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