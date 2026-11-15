@extends('layouts.app')
@section('title', 'Examples')
@section('zone', 'examples')
@section('content')
<section class="page">
    <x-page-head kicker="Examples" title="PHP Examples and Use Cases">Here are some practical examples of PHP in action.</x-page-head>
    @foreach ($examples as $title => $ex)
        <h2>{{ $title }}</h2>
        <x-code-block :code="$ex['code']" :output="$ex['output']" />
    @endforeach
    <p>In a real form, the browser sends the fields with a POST request and the script reads them from <code>$_POST</code>. The example above fakes the request so it can run on the command line. Note how <code>htmlspecialchars</code> turned the tags into harmless text. Laravel's Blade <code>@{{ }}</code> syntax does this for you, and this site's <a href="{{ route('contact') }}">contact form</a> uses it.</p>
</section>
@endsection
