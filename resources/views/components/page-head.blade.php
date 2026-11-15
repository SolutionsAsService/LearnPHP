@props(['kicker', 'title'])
<section class="page-head">
    <div class="wrap">
        <p class="kicker">{{ $kicker }}</p>
        <h1>{{ $title }}</h1>
        {{ $slot }}
    </div>
</section>
