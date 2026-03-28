# author
M.G.Isuru Sanjana

# Tourbeez

A Laravel + Inertia.js + Vue starter project (derived from Laravel UI starter kit). This repository currently contains a basic task management scaffold with authentication and API endpoints.

## 🧩 Tech Stack

- PHP 8.2+
- Laravel 12
- Inertia.js (server-side router + Vue integration)
- Vue 3 (via Vite)
- Sanctum authentication
- Ziggy route helper

## 🚀 Getting Started

### 1. Clone repository

```bash
git clone <your-repo-url> tourbeez
cd tourbeez
```

### 2. Install backend dependencies

```bash
composer install
```

### 3. Install frontend dependencies

```bash
npm install
```

### 4. Environment setup

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` database settings, e.g., using SQLite:

```env
DB_CONNECTION=sqlite
DB_DATABASE=${PWD}/database/database.sqlite
```

Then create file if missing:

```bash
touch database/database.sqlite
```

### 5. Run database migrations + seeders

```bash
php artisan migrate --seed
```

### 6. Start development servers

```bash
php artisan serve
npm run dev
```

Optional combined command:

```bash
npm run dev
```

## 🧪 Testing

### PHPUnit / Pest

```bash
./vendor/bin/pest
# or
./vendor/bin/phpunit
```

### Test structure
- `tests/Feature` - HTTP and user flow tests
- `tests/Unit` - pure unit tests

## 🧰 Common Artisan commands

- `php artisan migrate:fresh --seed`
- `php artisan route:list`
- `php artisan vendor:publish`
- `php artisan tinker`

## 📦 Project Structure

- `app/` - models, controllers, requests, resources
- `database/migrations/` - schema migrations
- `resources/js/` - Vue pages and components
- `routes/` - route definitions (web.php, api.php, auth.php, settings.php)
- `tests/` - Pest tests

## 🔐 Auth and API

- Includes Laravel auth scaffolding in `routes/auth.php`.
- API endpoints in `routes/api.php`.
- Task model in `app/Models/Task.php` with migration in `database/migrations/*_create_tasks_table.php`.

## 🗂️ Notes

- Uses `inertiajs/inertia-laravel` for page handling and `tightenco/ziggy` for JavaScript routing.
- Optional package `knuckleswtf/scribe` is included for API documentation generation.

---

## 📘 Contribution

1. Fork the repository
2. Create a branch (`git checkout -b feature/foo`)
3. Commit your changes
4. Push the branch
5. Open a PR

---

## 📜 License

MIT
