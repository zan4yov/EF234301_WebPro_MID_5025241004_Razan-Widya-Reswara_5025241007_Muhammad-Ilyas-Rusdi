# FRS (Formulir Rencana Studi) Management Application

A Laravel 12 + Inertia.js (React + TypeScript + Vite + Tailwind) application for managing academic Study Plans (FRS), course enrollment, approvals, grades, and student performance metrics (IPS/IPK).

## Tech Stack

- Backend: Laravel 12 (PHP ^8.2), Eloquent ORM
- Frontend: React 19 + TypeScript via Inertia.js & Vite
- UI: Tailwind CSS + Radix UI primitives + custom components
- Routing Helpers: Ziggy (route() in frontend)
- Tooling: Laravel Pint (style), PHPUnit, Faker, queue worker (database driver by default), Vite asset bundling

---

## 1. Prerequisites

Ensure you have:

- PHP 8.2+ with extensions: pdo, mbstring, openssl, tokenizer, xml, ctype, json, fileinfo
- Composer 2.x
- Node.js 28+ (recommended LTS) & npm or pnpm/yarn
- A database (MySQL/MariaDB or PostgreSQL).
- XAMPP, Laragon, DBeaver or similar for local development

Check versions:

```bash
php -v
composer -V
node -v
npm -v
```

---

## 2. Clone & Install Dependencies

```bash
git clone <your-fork-or-repo-url> web-frs
cd web-frs
composer install
npm install
```

---

## 3. Environment Setup

Run server (e.g. via XAMPP/Laragon) and create a database (e.g. `frs_db`).

Copy the example env file and generate the app key:

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` and configure database credentials, e.g.:

``` text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=web_frs
DB_USERNAME=root
DB_PASSWORD=
```

Set correct APP_URL (important for Vite + Inertia response headers):

``` text
APP_URL=http://localhost:8000
```

---

## 4. Run Migrations & Seeders

The project includes seeders for core academic entities (program studi, matakuliah, ruangan, tahun akademik, kelas, users). Run:

```bash
php artisan migrate --seed
```

If you added data previously and want a clean slate:

```bash
php artisan migrate:fresh --seed
```

---

## 5. Development Workflow

A Composer script `composer dev` runs:

- PHP server
- Queue listener
- Log tailing via `laravel/pail`
- Vite dev server

Start it:

```bash
composer run dev
```

(Press Ctrl+C to stop all.)

---

## 6. Credits

Built with Laravel, Inertia.js, React, Tailwind, shadcn ui, and community packages (Ziggy, Radix UI, Sonner, Lucide Icons).
