@extends('layouts.app')
@section('title', 'Contact')
@section('zone', 'contact')
@section('content')
<section class="page narrow">
    <x-page-head kicker="Contact" title="Contact Us">Questions about PHP or this site? Write to us.</x-page-head>

    @if (session('status'))
        <div class="notice success" role="status"><p>{{ session('status') }}</p></div>
    @endif

    @if ($errors->any())
        <div class="notice danger" role="alert" tabindex="-1" id="error-summary">
            <h2>There is a problem with your message</h2>
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}" novalidate>
        @csrf
        <x-field name="name" label="Name" autocomplete="name" />
        <x-field name="email" label="Email" type="email" autocomplete="email" />
        <x-field name="message" label="Message" :textarea="true" />
        <button class="button" type="submit">Send message</button>
    </form>
</section>
@endsection
