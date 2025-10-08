# FRS (Kartu Rencana Studi) Management Application

A Laravel 12 + Inertia.js (React + TypeScript + Vite + Tailwind) application for managing academic Study Plans (KRS), course enrollment, approvals, grades, and student performance metrics (IPS/IPK).

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
- Node.js 18+ (recommended LTS) & npm or pnpm/yarn
- A database (MySQL/MariaDB or PostgreSQL). SQLite can be used for quick local tests.
- (Optional) Redis if you later switch queue/cache drivers

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
Copy the example env file and generate the app key:
```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` and configure database credentials, e.g.:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=frs_db
DB_USERNAME=frs_user
DB_PASSWORD=secret
```

(For SQLite quick start):
```bash
touch database/database.sqlite
# then in .env
DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite
```

Set correct APP_URL (important for Vite + Inertia response headers):
```
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
### Option A: Manual (classic two terminal approach)
Terminal 1 (Laravel backend HTTP server):
```bash
php artisan serve
```
Terminal 2 (Vite dev + HMR):
```bash
npm run dev
```
Navigate to: http://localhost:8000

### Option B: Combined Convenience Script
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

> If you see CORS / mixed asset or Ziggy route mismatches, ensure APP_URL matches the artisan serve URL.

---
## 6. Queue & Background Jobs
Default queue is `sync` unless changed. To test async behavior, set in `.env`:
```
QUEUE_CONNECTION=database
```
Then run migrations (already includes jobs table) and start a worker:
```bash
php artisan queue:listen
```
`composer dev` already starts a listener with `--tries=1`.

---
## 7. Building Assets For Production
Generate versioned production assets:
```bash
npm run build
```
This outputs to `public/build` (driven by `vite.config.js`). Ensure the `VITE_*` variables (if any) are set in `.env` before building.

Clear & cache config/routes/views for performance:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---
## 8. Deployment Guide
### 8.1 Typical Linux VPS (Nginx + PHP-FPM)
1. Clone code to `/var/www/web-frs` (or similar)
2. Run:
   ```bash
   composer install --no-dev --optimize-autoloader
   npm ci && npm run build
   cp .env.example .env && php artisan key:generate
   # Adjust .env for production DB, cache, session, mail
   php artisan migrate --force --seed
   php artisan config:cache route:cache view:cache event:cache
   ```
3. Set correct permissions (example, adapt to distro):
   ```bash
   chown -R www-data:www-data storage bootstrap/cache
   chmod -R ug+rwx storage bootstrap/cache
   ```
4. Configure Nginx site pointing document root to `public/`.
5. (Optional) Supervisor for queue worker:
   `/etc/supervisor/conf.d/krs-worker.conf`:
   ```
   [program:krs-queue]
   process_name=%(program_name)s_%(process_num)02d
   command=php /var/www/web-frs/artisan queue:work --sleep=3 --tries=3 --max-time=3600
   autostart=true
   autorestart=true
   numprocs=1
   redirect_stderr=true
   stdout_logfile=/var/log/supervisor/krs-queue.log
   ```
6. Restart services.

### 8.2 Shared Hosting
- Upload files except `node_modules` and development artifacts.
- Run `composer install --no-dev` via SSH if possible.
- Build assets locally (`npm run build`) and upload `public/build`.
- Point hosting document root to `public/`.

### 8.3 Docker (Quick Example – optional)
Create `Dockerfile` (not included by default):
```Dockerfile
FROM php:8.2-fpm
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y git unzip libzip-dev libpng-dev && docker-php-ext-install pdo_mysql zip
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY . .
RUN composer install --no-dev --optimize-autoloader \
 && cp .env.example .env \
 && php artisan key:generate
RUN npm install && npm run build || true
CMD ["php-fpm"]
```
Then use Nginx as a separate service mounting the same code or copying the built assets.

---
## 9. Application Features (Implemented)
- Student KRS creation, duplicate course prevention, SKS limit enforcement
- Submit (ajuan), approve / reject with advisor catatan
- Cancel pending KRS (delete KRS + details)
- Grade visibility only for approved KRS
- GPA (IPS/IPK) calculation based on graded courses
- Advisor inline grade assignment per detail KRS
- Dashboard summary (null-safe)
- Randomized schedule seeding (Mon–Fri start)

---
## 10. Common Issues & Troubleshooting
| Problem | Cause | Fix |
|---------|-------|-----|
| Vite assets 404 | Wrong APP_URL or build missing | Re-run `npm run dev` or `npm run build`; check `.env` APP_URL |
| Ziggy route() undefined | Inertia/ziggy not refreshed | Hard reload browser; ensure `@routes` (if used in blade) or plugin config |
| Class not found after pull | Optimized autoload stale | `composer dump-autoload` |
| Queue jobs stuck | No worker running | Start `php artisan queue:work` or switch to `sync` in `.env` |
| Mixed content warnings | Using HTTPS proxy incorrectly | Set `APP_URL` to https and configure trusted proxies |

---
## 11. Running Tests
```bash
php artisan test
```
(You may create feature/unit tests under `tests/Feature` and `tests/Unit`.)

---
## 12. Security & Production Hardening
- Set `APP_ENV=production` and `APP_DEBUG=false`
- Use `APP_KEY` generated and keep it secret
- Configure proper cache/session drivers (e.g., redis) for scale
- Run queues via Supervisor/systemd
- Regularly update dependencies (`composer update --with-all-dependencies` cautiously)

---
## 13. Roadmap / Ideas
- Bulk grade editing
- Policy classes for finer authorization
- Unique DB constraint per matakuliah per KRS
- Pagination & search for advisor KRS list
- Export transcript (PDF)

---
## 14. License
MIT (original Laravel scaffold). Adapt this README for your distribution if needed.

---
## 15. Credits
Built with Laravel, Inertia.js, React, Tailwind, and community packages (Ziggy, Radix UI, Sonner, Lucide Icons).
