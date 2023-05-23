<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
//use Illuminate\View\View;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//      Шарим данные для всех страниц
        View::share('date', date('Y'));

//      Шарим данные для одной страницы
        View::composer('user*', function ($view){
// Все роуты начинающиеся с user будут выполнять данную ф-цию
            $view->with('balance', 12345);
        });

        View::composer('admin*', function ($view){
// Все роуты начинающиеся с admin будут выполнять данную ф-цию
            $view->with('balance1', 12345);
            $view->with('balance2', 12345);
            $view->with('balance3', 12345);
        });
    }
}
