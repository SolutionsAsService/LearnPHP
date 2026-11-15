<x-layout page="examples" title="Examples">
    <x-page-head kicker="04 / Examples" title="PHP Examples and Use Cases">
        <p class="lede">Every example below was run with the <code>php</code> command, and the output shown is what it printed.</p>
    </x-page-head>
    <section class="band"><div class="wrap prose">
        <p>Here are some practical examples of PHP in action.</p>
        @foreach ($examples as $n => $e)
            <h2>{{ $n + 1 }}. {{ $e['title'] }}</h2>
            <p>{{ $e['text'] }}</p>
            <x-code :code="$e['ex']['code']" :output="$e['ex']['output']" />
        @endforeach
    </div></section>
</x-layout>
