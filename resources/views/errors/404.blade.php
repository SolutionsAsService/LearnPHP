@extends('layouts.app')
@section('title', 'Page not found')
@section('zone', 'notfound')
@section('content')
<section class="page narrow">
    <x-page-head kicker="Error 404" title="Page not found">PHP could not find what you asked for, much like a missing array key.</x-page-head>
    <p><a class="button" href="{{ route('home') }}">Back to the home page</a></p>
</section>
@endsection
