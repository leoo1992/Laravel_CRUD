# Laravel CRUD

Aplicação de estudo em Laravel 8 com rotas de recurso para operações CRUD de produtos, implementadas pelo `ProdutoController`.

## Stack
- PHP 7.3+ / 8.x
- Laravel 8
- Composer
- Blade e Eloquent (estrutura Laravel)

## Como executar

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Configure a conexão do banco no `.env` e execute as migrações com `php artisan migrate`.
