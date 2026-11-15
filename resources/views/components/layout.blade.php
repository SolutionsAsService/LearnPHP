@props(['title' => null, 'page' => 'home'])
@php
    $nav = ['home' => 'Home', 'features' => 'Features', 'syntax' => 'Syntax', 'benefits' => 'Benefits', 'examples' => 'Examples', 'contact' => 'Contact'];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ? $title.' | Learn PHP' : 'Learn PHP' }}</title>
    <meta name="description" content="A short, runnable introduction to PHP: features, syntax, benefits and examples.">
    <meta name="theme-color" content="#1b1830">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body class="p-{{ $page }}">
<a class="skip" href="#main">Skip to main content</a>
<header class="site-header" id="top">
    <div class="bar wrap">
        <a class="brand" href="{{ route('home') }}"><span aria-hidden="true">&lt;?php</span> Learn PHP</a>
        <button class="menu-btn" type="button" aria-expanded="false" aria-controls="site-nav" hidden>Menu</button>
        <nav id="site-nav" class="site-nav" aria-label="Main">
            <ul>
                @foreach ($nav as $key => $label)
                    <li><a href="{{ route($key) }}" data-k="{{ $key }}" @if ($page === $key) aria-current="page" @endif>{{ $label }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
<main id="main" tabindex="-1">
    {{ $slot }}
</main>
<footer class="site-footer">
    <div class="wrap">
        <p>&copy; {{ date('Y') }} Learn PHP. Released under the MIT License.</p>
        <p><a href="#top">Back to top</a></p>
    </div>
</footer>
<script src="{{ asset('app.js') }}" defer></script>
</body>
</html>
