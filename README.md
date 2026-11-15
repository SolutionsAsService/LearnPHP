# Learn PHP

A small Laravel 13 site that teaches the basics of PHP: home, features, syntax, benefits, examples and a working contact form.

## Run it

Requires PHP 8.3+ and the installed `vendor/` directory (`composer install` on a fresh clone).

```
cp .env.example .env && php artisan key:generate   # first time only
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Open http://127.0.0.1:8000. Contact messages are stored in the `contact_messages` SQLite table.

## Test

```
php artisan test
```

## Layout

- `routes/web.php`: the six pages plus `POST /contact`.
- `app/Http/Controllers`, `app/Http/Requests/ContactRequest.php`, `app/Models/ContactMessage.php`.
- `resources/views`: `components/layout` and friends, `pages/*`, `errors/404`.
- `resources/examples/*.php` are the code samples; the matching `*.out` files are what `php <file>` printed. Regenerate with `php resources/examples/loop.php > resources/examples/loop.out`.
- `public/styles.css` and `public/app.js`: plain CSS and a small menu script, no build step.

See `CONTRIBUTING.md` and `LICENSE`.
