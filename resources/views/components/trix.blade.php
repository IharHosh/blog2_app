{{--@props(['name' => '', 'value' => ''])--}}

{{--<input id="{{ $name }}" type="hidden" name="{{ $name }}" value="{{ $value }}">--}}

{{--или вместо вышеуказанного кода укажем attributes (значения 'name' и 'value' так же передадутся в $attributes)--}}
{{--Но в таком случ. @props - нужно удалить--}}
<input  type="hidden" {{ $attributes }} id="{{ $name }}">

<trix-editor input="{{ $name }}"></trix-editor>

{{-- С помощью директивы "@once @endonce" - говорит о том что заключив в него ниже указанные стеки нужно вставить одиин раз
  (тем самым Laravel проверит что таких стеков ещё нет на странице и вставит ОДИН РАЗ )--}}

@once
    @push('css')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    @endpush

    @push('js')
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    @endpush
@endonce
