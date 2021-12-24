<div class="{{ $margin }}">
    <label class="form-label" for="{{ $name }}Input">{{ $label }}</label>
    <input
        id="{{ $name }}Input"
        type="{{ $type }}"
        name="{{ $name }}"

        @isset($form)
        form="{{ $form }}"
        @endisset

        @isset($value)
            value="{{ old($name,$value) }}"
            @else
            value="{{ old($name) }}"
        @endisset

        class="form-control {{ $class }} @error($name) is-invalid @enderror" >

    @error($name)
    <p class="invalid-feedback small">{{ $message }}</p>
    @enderror
</div>
