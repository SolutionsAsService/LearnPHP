@extends('layouts.app')
@section('title', 'Syntax')
@section('zone', 'syntax')
@section('content')
<section class="page">
    <x-page-head kicker="Syntax" title="Basic Syntax of PHP">PHP code is executed on the server, and the result is returned to the browser as plain HTML.</x-page-head>
    <p>PHP scripts are enclosed in <code>&lt;?php</code> and <code>?&gt;</code> tags. The <code>echo</code> statement is used to output text to the browser. A file that is only PHP may leave out the closing tag.</p>
    @foreach ($examples as $title => $ex)
        <h2>{{ $title }}</h2>
        <x-code-block :code="$ex['code']" :output="$ex['output']" />
    @endforeach
</section>
@endsection
