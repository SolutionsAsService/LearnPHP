@extends('layouts.app')
@section('title', 'Home')
@section('zone', 'home')
@section('content')
<section class="hero" aria-labelledby="hero-title">
    <div class="hero-inner">
        <h1 id="hero-title">Learn <span class="hl-key">PHP</span></h1>
        <p class="hero-lede">A server-side language for the web. Here is one whole program and what it printed.</p>
        <figure class="hero-run">
            <pre tabindex="0" aria-label="PHP code"><code><span class="tok-tag">&lt;?php</span>
<span class="tok-key">echo</span> <span class="tok-str">"{{ $example['output'] }}"</span>;</code></pre>
            <p class="hero-out"><span aria-hidden="true">&rarr;</span> <samp>{{ $example['output'] }}</samp></p>
        </figure>
        <ul class="tiles" aria-label="Topics on this site">
            <li><a class="tile" data-zone="features" href="{{ route('features') }}"><span class="tile-num">7</span><span class="tile-name">Features</span></a></li>
            <li><a class="tile" data-zone="syntax" href="{{ route('syntax') }}"><span class="tile-num">&lt;?</span><span class="tile-name">Syntax</span></a></li>
            <li><a class="tile" data-zone="benefits" href="{{ route('benefits') }}"><span class="tile-num">5</span><span class="tile-name">Benefits</span></a></li>
            <li><a class="tile" data-zone="examples" href="{{ route('examples') }}"><span class="tile-num">2</span><span class="tile-name">Examples</span></a></li>
            <li class="tile-wide"><a class="tile" data-zone="contact" href="{{ route('contact') }}"><span class="tile-num">@</span><span class="tile-name">Contact</span></a></li>
        </ul>
    </div>
</section>
<section class="page">
    <h2>Welcome to Learn PHP</h2>
    <p>PHP is a popular server-side scripting language used for web development. It is powerful, flexible, and easy to learn. Explore the various pages to understand more about PHP and how it can be useful for your web development projects.</p>
    <p>Every code sample on this site was run with the <code>php</code> command, and the output beside it is exactly what that run printed.</p>
</section>
@endsection
