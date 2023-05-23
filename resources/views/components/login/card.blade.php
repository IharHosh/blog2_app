<x-card>
    <x-card-header>
        <x-card-title>
            {{ __('Вход') }}
        </x-card-title>
        <x-slot name="right">
            <a href="{{ route('register.index') }}">
                {{ __('Регистрация') }}
            </a>
        </x-slot>
    </x-card-header>

    <x-card-body>
        <x-form action="{{ route('login.store') }}" method="POST">
            <x-form-item>
                <x-label required>{{ __('Email') }}</x-label>
                {{--                                        <input type="email" name="email" class="form-control" autofocus>--}}
                <x-input type="email" name="email" autofocus/>
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Пароль') }}</x-label>
                <x-input type="password" name="password" />
            </x-form-item>

            <x-form-item>
                <x-checkbox name="remember" value="sdf">
                    {{__('Запомнить меня')}}
                </x-checkbox>
            </x-form-item>

            <x-button type="submit">
                {{ __('Войти') }}
            </x-button>

        </x-form>

    </x-card-body>

</x-card>
