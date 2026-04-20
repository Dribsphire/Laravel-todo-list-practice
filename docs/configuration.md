# Configuration

## Environment file

Laravel reads configuration from `.env`.

To get started:

```bash
copy .env.example .env
php artisan key:generate
```

## Key settings for this project

- **APP_URL**: base URL used for generating links (local default is fine)
- **DB_CONNECTION**: database driver (default is `sqlite`)
- **SESSION_DRIVER / CACHE_STORE / QUEUE_CONNECTION**: defaults are database-backed in `.env.example`

## Database

### SQLite (default)

`.env.example` uses:

- `DB_CONNECTION=sqlite`

If you use SQLite, ensure `database/database.sqlite` exists, then run:

```bash
php artisan migrate
```

### MySQL (XAMPP)

If you want to use MySQL via XAMPP, update `.env` for example:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_todo
DB_USERNAME=root
DB_PASSWORD=
```

Then run migrations:

```bash
php artisan migrate
```
