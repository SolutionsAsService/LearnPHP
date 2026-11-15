<x-layout page="home">
    <section class="hero">
        <div class="wrap">
            <h1>Learn PHP</h1>
            <p class="lede">The server-side language behind much of the web. Pick a line to start.</p>
            <div class="listing" role="group" aria-label="The six pages of this site, written as a PHP array">
                <p class="ln"><span class="no" aria-hidden="true">1</span><span class="c">&lt;?php</span></p>
                <p class="ln"><span class="no" aria-hidden="true">2</span><span class="d">$pages</span> <span class="k">=</span> [</p>
                @php
                    $rows = [
                        ['features', 'Features', 'what PHP gives you'],
                        ['syntax', 'Syntax', 'tags, echo, variables'],
                        ['benefits', 'Benefits', 'why people choose it'],
                        ['examples', 'Examples', 'code we ran for you'],
                        ['contact', 'Contact', 'write to us'],
                    ];
                @endphp
                @foreach ($rows as $i => [$route, $label, $line])
                    <a class="row r-{{ $route }}" href="{{ route($route) }}" aria-label="{{ $label }}: {{ $line }}"><span class="no" aria-hidden="true">{{ $i + 3 }}</span><span class="key">'{{ strtolower($label) }}'</span><span class="arrow" aria-hidden="true">=&gt;</span><span class="val">'{{ $line }}',</span></a>
                @endforeach
                <p class="ln"><span class="no" aria-hidden="true">8</span>];</p>
            </div>
        </div>
    </section>

    <section class="band">
        <div class="wrap prose">
            <h2>Welcome to Learn PHP</h2>
            <p>PHP is a popular server-side scripting language used for web development. It is powerful, flexible, and easy to learn. Explore the pages to understand more about PHP and how it can be useful for your web development projects.</p>
            <p>PHP originally stood for Personal Home Page. Today the name means "PHP: Hypertext Preprocessor". Rasmus Lerdorf created it in 1994.</p>
            <x-code :code="$sample['code']" :output="$sample['output']" />
        </div>
    </section>
</x-layout>
