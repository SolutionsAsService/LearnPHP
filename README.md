# LearnPHP

A small Laravel 13 site that teaches the basics of PHP: home, features, syntax, benefits, examples and a working contact form.

## Run it

```
cp .env.example .env        # skip if .env already exists
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve           # http://127.0.0.1:8000
```

## Test it

```
php artisan test
```

## Layout

- `routes/web.php`: the six pages plus the contact POST.
- `app/Http/Controllers`: `PageController`, `ContactController`; `app/Http/Requests/ContactRequest.php` validates the form.
- `resources/views`: `layouts/app.blade.php`, `components/` (nav, code-block, page-head, field), `pages/`, `errors/404.blade.php`.
- `resources/examples/*.php` and `*.out`: every code sample and the output the `php` CLI printed for it. Re-run with `php resources/examples/hello.php > resources/examples/hello.out`.
- Contact messages are stored in the `contact_messages` SQLite table.
- Styles and script are plain files in `public/css` and `public/js`; there is no npm or Vite step.

See `LICENSE` and `CONTRIBUTING.md`.
