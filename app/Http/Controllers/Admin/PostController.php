<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index(): string
    {
        return 'Страница списка постов ADMIN';
    }

    public function create(): string
    {
        return 'Страница создания постов ADMIN';
    }

    public function store(): string
    {
        return 'Запрос создания поста ADMIN';
    }
    public function show($abc): string
    {
        return "Страница просмотра постов $abc ADMIN";
    }

    public function edit($abc): string
    {
        return "Страница изменения поста $abc ADMIN";
    }

    public function update(): string
    {
        return 'Запрос изменения поста ADMIN';
    }

    public function destroy(): string
    {
        return 'Запрос удаление поста ADMIN';
    }

    public function like(): string
    {
        return 'Лайк + 1 ADMIN';
    }
}
