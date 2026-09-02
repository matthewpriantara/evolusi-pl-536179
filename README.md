<div align="center">

<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo" style="margin-bottom: 1rem;"/>

# **Evolusi App**

<p align="center">
  <strong>Aplikasi Web Modern untuk Tugas Akhir Pemrograman Web</strong>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
  <img src="https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php&logoColor=white" alt="PHP Version">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?logo=laravel&logoColor=white" alt="Laravel Version">
  <img src="https://img.shields.io/badge/TailwindCSS-3.x-06B6D4?logo=tailwindcss&logoColor=white" alt="TailwindCSS">
</p>

<p align="center">
  <a href="#-tentang-proyek">Tentang</a> •
  <a href="#-fitur-utama">Fitur</a> •
  <a href="#-tech-stack">Tech Stack</a> •
  <a href="#-instalasi">Instalasi</a> •
  <a href="#-struktur-proyek">Struktur</a> •
  <a href="#-workflow-git">Workflow</a> •
  <a href="#-license">License</a>
</p>

</div>

---

## 📖 Tentang Proyek

**Evolusi App** adalah aplikasi web yang dibangun menggunakan **Laravel 11** sebagai pemenuhan tugas akhir mata kuliah **Pemrograman Web (PKW)**. Aplikasi ini dirancang dengan arsitektur modern, desain *responsive*, dan mengikuti *best practices* pengembangan web kontemporer.

<div align="center">

| Detail | Informasi |
|--------|-----------|
| **Mata Kuliah** | Pemrograman Web |
| **Tugas** | Repository Pertama (UAS) |
| **Framework** | Laravel 11 |
| **Status** | 🟢 Aktif Development |

</div>

---

## ✨ Fitur Utama

| Fitur | Deskripsi |
|-------|-----------|
| 🔐 **Authentication System** | Login, Register, Email Verification, Password Reset dengan Laravel Breeze |
| 📱 **Responsive Design** | Mobile-first approach, optimal di semua ukuran layar |
| 🎨 **Modern UI/UX** | Custom design dengan TailwindCSS, dark mode support |
| 🗄️ **Database & Migrations** | Eloquent ORM, migrasi terstruktur, seeder & factory |
| ⚡ **Performance** | Route caching, config caching, optimized asset loading |
| 🔒 **Security** | CSRF protection, XSS prevention, SQL injection protection |
| 🧪 **Testing** | Feature & Unit tests dengan PHPUnit |
| 🚀 **CI/CD Ready** | GitHub Actions workflow untuk testing otomatis |

---

## 🛠 Tech Stack

<div align="center">

### Backend
<img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"/>
<img src="https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"/>
<img src="https://img.shields.io/badge/Composer-Dependency_Manager-885630?style=for-the-badge&logo=composer&logoColor=white" alt="Composer"/>

### Frontend
<img src="https://img.shields.io/badge/TailwindCSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="TailwindCSS"/>
<img src="https://img.shields.io/badge/Vite-Build_Tool-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite"/>
<img src="https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white" alt="Alpine.js"/>

### Database & Tools
<img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
<img src="https://img.shields.io/badge/Git-VCS-F05032?style=for-the-badge&logo=git&logoColor=white" alt="Git"/>
<img src="https://img.shields.io/badge/GitHub_Actions-CI/CD-2088FF?style=for-the-badge&logo=github-actions&logoColor=white" alt="GitHub Actions"/>

</div>

---

## 📸 Preview

<div align="center">

### Homepage
> *Desain custom dengan hero section, feature cards, dan navigasi modern*

![Homepage Preview](https://via.placeholder.com/800x450/FF6B35/FFFFFF?text=Evolusi+App+Homepage)

### Fitur Section
> *Kartu fitur dengan animasi scroll dan hover effects*

![Features Preview](https://via.placeholder.com/800x450/1A1A1A/FF6B35?text=Features+Section)

</div>

> **Note**: Screenshot di atas adalah placeholder. Ganti dengan screenshot aktual aplikasi Anda.

---

## 🚀 Instalasi

### Prasyarat
- PHP ≥ 8.2
- Composer
- Node.js ≥ 18 & NPM
- MySQL / MariaDB

### Langkah Instalasi

```bash
# 1. Clone repository
git clone https://github.com/USERNAME/evolusi-pl-NIM.git
cd evolusi-pl-NIM

# 2. Install dependencies PHP
composer install

# 3. Install dependencies Node.js
npm install

# 4. Copy environment file
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Konfigurasi database di .env
# DB_DATABASE=evolusi_app
# DB_USERNAME=root
# DB_PASSWORD=

# 6. Jalankan migrasi & seeder
php artisan migrate --seed

# 7. Build assets
npm run build
# atau untuk development: npm run dev

# 8. Jalankan server
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

---

## 📁 Struktur Proyek

```
evolusi-pl-NIM/
├── .github/
│   └── workflows/
│       └── ci.yml              # GitHub Actions CI/CD
├── app/
│   ├── Http/
│   │   ├── Controllers/        # Controller aplikasi
│   │   └── Middleware/         # Custom middleware
│   ├── Models/                 # Eloquent Models
│   └── Providers/              # Service Providers
├── bootstrap/
├── config/                     # File konfigurasi
├── database/
│   ├── factories/              # Model factories
│   ├── migrations/             # Database migrations
│   └── seeders/                # Database seeders
├── public/                     # Public assets
├── resources/
│   ├── css/                    # Stylesheets
│   ├── js/                     # JavaScript
│   └── views/                  # Blade templates
│       ├── components/         # Reusable components
│       ├── layouts/            # Layout templates
│       └── welcome.blade.php   # Custom homepage
├── routes/
│   ├── web.php                 # Web routes
│   └── api.php                 # API routes
├── storage/
├── tests/
│   ├── Feature/                # Feature tests
│   └── Unit/                   # Unit tests
├── vendor/
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── package.json
├── phpunit.xml
├── tailwind.config.js
├── vite.config.js
└── README.md
```

---

## 🌿 Workflow Git

Proyek ini mengikuti alur **Git Flow** sederhana dengan **Branch Protection**:

```mermaid
graph LR
    A[main] --> B[dev]
    B --> C[feature/homepage]
    C -->|PR #1| B
    B -->|PR #2| A
```

### Branch Strategy

| Branch | Tujuan | Protection |
|--------|--------|------------|
| `main` | Production-ready code | ✅ Required PR, Status Checks |
| `dev` | Integration branch | ✅ Required PR, Status Checks |
| `feature/*` | Feature development | ❌ No direct push to main/dev |

### Pull Request Flow

1. **PR #1**: `feature/homepage` → `dev`
   - Review kode, jalankan test
   - Merge setelah approved & CI hijau

2. **PR #2**: `dev` → `main`
   - Final review sebelum release
   - Tag version setelah merge

### Conventional Commits

Semua commit mengikuti format:
```
<type>(<scope>): <description>

Types: feat, fix, docs, style, refactor, test, chore
```

Contoh:
```bash
feat: add custom homepage design
fix: resolve mobile navigation issue
docs: update README with installation guide
test: add feature tests for authentication
chore: update dependencies
```

---

## ⚙️ GitHub Actions Workflow

File workflow: `.github/workflows/ci.yml`

```yaml
name: Laravel CI

on:
  push:
    branches: [main, dev]
  pull_request:
    branches: [main, dev]

jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.2'
      - name: Install Dependencies
        run: composer install --no-interaction --prefer-dist
      - name: Generate Key
        run: php artisan key:generate --force
      - name: Run Tests
        run: php artisan test --no-coverage
```

**Status**: ![CI](https://github.com/USERNAME/evolusi-pl-NIM/workflows/Laravel%20CI/badge.svg)

---

## 📋 Checklist Tugas

- [x] Repository bernama `evolusi-pl-NIM` (public)
- [x] Aplikasi Laravel 11
- [x] Minimal 5 commit (Conventional Commits)
- [x] Branch: `main`, `dev`, `feature/homepage`
- [x] Perubahan nyata pada `feature/homepage`
- [x] PR #1: `feature/homepage` → `dev`
- [x] PR #2: `dev` → `main`
- [x] GitHub Actions workflow (`.github/workflows/ci.yml`)
- [x] Workflow berjalan **GREEN/SUCCESS**
- [x] Branch protection pada `main` & `dev`
- [x] Collaborator dosen/asisten (role: Read)
- [x] Tidak ada file sensitif (`.env`, key, secret)
- [x] README estetik & informatif
- [x] `.gitignore` lengkap

---

## 📄 License

Proyek ini dilisensikan di bawah **MIT License** - lihat file [LICENSE](LICENSE) untuk detail.

> **Note**: Ini adalah proyek tugas akhir akademik. Kode bersifat edukatif.

---

## 👨‍💻 Author

<div align="center">

| | |
|---|---|
| **Nama** | [Nama Anda] |
| **NIM** | [NIM Anda] |
| **Program Studi** | Teknik Informatika |
| **Mata Kuliah** | Pemrograman Web |
| **Semester** | 5 |

[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/USERNAME)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://linkedin.com/in/USERNAME)

</div>

---

<div align="center">

**⭐ Jika proyek ini bermanfaat, beri star ya!**

Made with ❤️ using Laravel & TailwindCSS

</div>