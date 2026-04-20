# Getting started

## Requirements

- PHP 8.2+
- Composer
- A database (SQLite is the default in `.env.example`)

Optional (only if you want to build frontend assets):

- Node.js + npm

## Setup

1) Install PHP dependencies:

```bash
composer install
```

2) Create your environment file:

```bash
copy .env.example .env
```

3) Generate an application key:

```bash
php artisan key:generate
```

4) Run migrations:

```bash
php artisan migrate
```

5) Start the app:

```bash
php artisan serve
```

Open `http://127.0.0.1:8000`.

## Using SQLite (recommended for this repo)

This project’s `.env.example` defaults to SQLite:

- `DB_CONNECTION=sqlite`

Laravel will use `database/database.sqlite` (a file) if it exists. If you don’t have it yet:

```bash
type nul > database\\database.sqlite
php artisan migrate
```
