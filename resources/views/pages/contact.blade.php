<x-layout page="contact" title="Contact">
    <x-page-head kicker="05 / Contact" title="Contact Us">
        <p class="lede">Ask a question or suggest a topic. Every field is required.</p>
    </x-page-head>
    <section class="band"><div class="wrap narrow">
        @if (session('status'))
            <div class="notice ok" role="status"><strong>Message sent.</strong> {{ session('status') }}</div>
        @endif
        @if ($errors->any())
            <div class="notice bad" role="alert" tabindex="-1" id="errors">
                <strong>Please fix {{ $errors->count() }} {{ Str::plural('problem', $errors->count()) }}:</strong>
                <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif
        <form method="post" action="{{ route('contact.store') }}" novalidate>
            @csrf
            @foreach ([['name', 'Name', 'text', 'name'], ['email', 'Email', 'email', 'email']] as [$id, $label, $type, $ac])
                <div class="field">
                    <label for="{{ $id }}">{{ $label }}</label>
                    <input type="{{ $type }}" id="{{ $id }}" name="{{ $id }}" value="{{ old($id) }}" autocomplete="{{ $ac }}" required @error($id) aria-invalid="true" aria-describedby="{{ $id }}-err" @enderror>
                    @error($id)<p class="err" id="{{ $id }}-err">{{ $message }}</p>@enderror
                </div>
            @endforeach
            <div class="field">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required @error('message') aria-invalid="true" aria-describedby="message-err" @enderror>{{ old('message') }}</textarea>
                @error('message')<p class="err" id="message-err">{{ $message }}</p>@enderror
            </div>
            <button class="btn" type="submit">Send message</button>
        </form>
    </div></section>
</x-layout>
