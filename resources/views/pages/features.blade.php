@extends('layouts.app')
@section('title', 'Features')
@section('zone', 'features')
@section('content')
<section class="page">
    <x-page-head kicker="Features" title="Features of PHP">Seven things that explain why PHP runs so much of the web.</x-page-head>
    <ul class="cards">
        @foreach ([
            ['Open Source', 'PHP is free to use, and its source code is open.'],
            ['Cross-Platform', 'It runs on Linux, macOS and Windows.'],
            ['Easy to Learn and Use', 'You can start with a few lines inside an HTML file.'],
            ['Supports a Wide Range of Databases', 'MySQL, PostgreSQL, SQLite and more, through PDO.'],
            ['Strong Community Support', 'Large forums, tutorials and packages are a search away.'],
            ['Extensive Library of Functions', 'Strings, arrays, dates, files and networking come built in.'],
            ['Integration with HTML, CSS, and JavaScript', 'PHP produces the HTML that the browser styles and scripts.'],
        ] as [$name, $text])
            <li><h2>{{ $name }}</h2><p>{{ $text }}</p></li>
        @endforeach
    </ul>
</section>
@endsection
