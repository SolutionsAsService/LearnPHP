@props(['name', 'label', 'type' => 'text', 'textarea' => false, 'autocomplete' => null])
<div class="field @error($name) has-error @enderror">
    <label for="{{ $name }}">{{ $label }}</label>
    @error($name)<p class="error" id="{{ $name }}-error">{{ $message }}</p>@enderror
    @if ($textarea)
        <textarea id="{{ $name }}" name="{{ $name }}" rows="6" required @error($name) aria-invalid="true" aria-describedby="{{ $name }}-error" @enderror>{{ old($name) }}</textarea>
    @else
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name) }}" required @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif @error($name) aria-invalid="true" aria-describedby="{{ $name }}-error" @enderror>
    @endif
</div>
