<div class="{{ $margin }}">
    <label class="form-label" for="{{ $name }}Input">{{ $label }}</label>
    <textarea
        id="{{ $name }}Input"

        rows="{{ $rows }}"

        name="{{ $name }}"

        @isset($form)
        form="{{ $form }}"
        @endisset

        class="form-control {{ $class }} @error($name) is-invalid @enderror" >@isset($value) {{ old($name,$value) }} @else {{ old($name) }} @endisset</textarea>

    @error($name)
    <p class="text-danger small">{{ $message }}</p>
    @enderror
</div>
