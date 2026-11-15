@props(['kicker', 'title'])
<div class="page-head">
    <p class="kicker">{{ $kicker }}</p>
    <h1>{{ $title }}</h1>
    @if ($slot->isNotEmpty())<p class="lede">{{ $slot }}</p>@endif
</div>
