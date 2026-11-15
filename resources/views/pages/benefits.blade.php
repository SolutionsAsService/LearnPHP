@extends('layouts.app')
@section('title', 'Benefits')
@section('zone', 'benefits')
@section('content')
<section class="page">
    <x-page-head kicker="Benefits" title="Benefits of Using PHP">Why a beginner, and a team, might pick it.</x-page-head>
    <dl class="benefits">
        <div><dt>Easy to Learn</dt><dd>PHP is straightforward and easy to start with for beginners.</dd></div>
        <div><dt>Flexible</dt><dd>PHP is highly flexible and can be embedded within HTML.</dd></div>
        <div><dt>Scalable</dt><dd>PHP can handle large projects and is scalable.</dd></div>
        <div><dt>Compatible</dt><dd>PHP is compatible with most servers and databases.</dd></div>
        <div><dt>Community Support</dt><dd>PHP has a large community of developers and extensive documentation.</dd></div>
    </dl>
</section>
@endsection
