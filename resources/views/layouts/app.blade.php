<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Learn PHP') | Learn PHP</title>
    <meta name="description" content="@yield('description', 'A short, honest introduction to PHP with code you can run.')">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body data-zone="@yield('zone', 'home')">
    <a class="skip-link" href="#main">Skip to main content</a>
    <header class="site-header">
        <div class="bar">
            <a class="brand" href="{{ route('home') }}"><span class="brand-mark" aria-hidden="true">&lt;?php</span> Learn PHP</a>
            <button class="menu-button" type="button" aria-expanded="false" aria-controls="site-nav" hidden>
                <span class="menu-label">Menu</span>
            </button>
        </div>
        <x-nav />
    </header>

    <main id="main" tabindex="-1">
        @yield('content')
    </main>

    <footer class="site-footer">
        <p>&copy; {{ date('Y') }} Learn PHP. All rights reserved.</p>
        <p><a href="{{ route('contact') }}">Send us a message</a></p>
    </footer>
    <script src="{{ asset('js/site.js') }}" defer></script>
</body>
</html>
