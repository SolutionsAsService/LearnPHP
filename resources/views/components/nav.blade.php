@php
    $items = ['home' => 'Home', 'features' => 'Features', 'syntax' => 'Syntax', 'benefits' => 'Benefits', 'examples' => 'Examples', 'contact' => 'Contact'];
@endphp
<nav id="site-nav" class="site-nav" aria-label="Main">
    <ul>
        @foreach ($items as $route => $label)
            <li><a href="{{ route($route) }}" data-zone="{{ $route }}" @if (request()->routeIs($route)) aria-current="page" @endif>{{ $label }}</a></li>
        @endforeach
    </ul>
</nav>
