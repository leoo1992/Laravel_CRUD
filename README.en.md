# Laravel CRUD

A Laravel 8 study application with resource routes for product CRUD operations, handled by `ProdutoController`.

## Stack
- PHP 7.3+ / 8.x
- Laravel 8
- Composer
- Blade and Eloquent (Laravel application structure)

## Run

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Configure the database connection in `.env` and run migrations with `php artisan migrate`.
