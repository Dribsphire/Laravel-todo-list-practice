# Laravel Todo List Practice

A small Laravel (v12) practice project: a simple “to-do list” / task manager.

## Features

- List tasks
- Add a task (title)
- Delete a task
- (Code includes edit/update routes)

## Setup (local)

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Open `http://127.0.0.1:8000`.

## Documentation (Read the Docs)

This repo includes a ready-to-publish Read the Docs setup using MkDocs:

- `.readthedocs.yaml`
- `mkdocs.yml`
- `docs/`

To preview docs locally:

```bash
pip install -r docs/requirements.txt
mkdocs serve
```
