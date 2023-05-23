@props(['required' => false])

<label {{ $attributes->class([
        'mb-3', ($required ? 'required' : ''),
]) }}>{{ $slot }}</label>
