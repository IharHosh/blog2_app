<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(): string
    {
        return 'Страница списка постов API';
    }

    public function create(): string
    {
        return 'Страница создания постов API';
    }

    public function store(): string
    {
        return 'Запрос создания поста API';
    }
    public function show($abc): string
    {
        return "Страница просмотра постов $abc API";
    }

    public function edit($abc): string
    {
        return "Страница изменения поста $abc API";
    }

    public function update(): string
    {
        return 'Запрос изменения поста API';
    }

    public function destroy(): string
    {
        return 'Запрос удаление поста API';
    }

    public function like(): string
    {
        return 'Лайк + 1 API';
    }
}
