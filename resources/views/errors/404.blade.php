<x-layout title="Page not found" page="none">
    <x-page-head kicker="404" title="Page not found">
        <p class="lede">That page does not exist. Like a missing include, it was looked for and not found.</p>
    </x-page-head>
    <section class="band"><div class="wrap">
        <a class="btn" href="{{ route('home') }}">Back to the home page</a>
    </div></section>
</x-layout>
