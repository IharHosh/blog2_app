@extends('layouts.main')

@section('page.title', 'Мои донаты')

@section('main.content')

    <x-title>
        {{ __('Мои донаты') }}
    </x-title>

{{--    @include('user.donates.filter')--}} {{-- не будем выводить фильтр так как делали это на страничке постов --}}

    @include('user.donates.stats')

{{--    @include('user.donates.table')--}} {{-- так же не будем выводить табличку со списком донатов --}}

@endsection

