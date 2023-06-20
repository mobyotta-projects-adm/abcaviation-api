@props(['for'])
@error($for)
    <span {{ $attributes->merge(['class' => 'text-danger']) }} role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
