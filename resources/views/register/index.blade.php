@extends('layouts.auth')

@section('page.title', 'Страница регистрации')

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{ __('Регистрация') }}
            </x-card-title>
            <x-slot name="right">
                <a href="{{ route('login.index') }}">
                    {{__('Вход')}}
                </a>
            </x-slot>
        </x-card-header>

        <x-card-body>
            <x-form action="{{ route('register.store') }}" method="POST">
{{--                <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--                ниже приведенный пример делает тоже самое (разместим его в ф-ле form.blade.php)--}}
{{--                @csrf --}}
                <x-form-item>
                    <x-label required>{{ __('Имя') }}</x-label>
                    <x-input name="name"  autofocus />
                </x-form-item>

                <x-form-item>
                    <x-label required>{{ __('Email') }}</x-label>
                    <x-input type="email" name="email" />
                </x-form-item>

                <x-form-item>
                    <x-label required>{{ __('Пароль') }}</x-label>
                    <x-input type="password" name="password" />
                </x-form-item>

                <x-form-item>
                    <x-label required>{{ __('Введите пароль ещё раз') }}</x-label>
                    <x-input type="password" name="password-confirmation"  />
                </x-form-item>

                <x-form-item>
                    <x-checkbox name="remember" >
                        {{__('Я согласен на обработку пользовательских данных')}}
                    </x-checkbox>
                </x-form-item>

                <x-button type="submit">
                    {{ __('Зарегистрироваться') }}
                </x-button>

            </x-form>

        </x-card-body>

    </x-card>
@endsection
