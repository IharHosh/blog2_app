<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Models\Post;  // опубликовывание класса для правил валидации находящихся в модели
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id'=> 123,

            'title' => 'Lorem ipsum dolor sit amet.',

            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consecrate radicalising elite. Dulcimers, temporal?',
        ];


        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {

        return view('user.posts.create');
    }

    public function store(Request $request)
    {


//        $validated = $request->validated();
//        1-й способ валидации
//        $validated = validator($request->all(), [
//            'title' => ['required', 'string', 'max:100'],
//            'content' => ['required', 'string', 'max:10000'],
//        ])->validate();

//        2-й способ валидации
//        $validated = $request->validate([
//            'title' => ['required', 'string', 'max:100'],
//            'content' => ['required', 'string', 'max:10000'],
//        ]);

//        3-й способ валидации
//        атрибуты и правила прописаны в ф-ле app/helpers.php
        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
            'published_at' => ['nullable', 'string', 'date'],
            'published' => ['nullable', 'boolean'],
        ]);


        $post = Post::query()->create([
            'user_id' => User::query()->value('id'),
            'title' => $validated['title'],
            'content' => $validated['content'],
            'published_at' => new Carbon($validated['published_at'] ?? null),
            'published' => $validated['published'] ?? false,
        ]);
//        CreatePost::run($request->all());
        dd($post->toArray());

        dd($validated);

//        $title = $request->input('title');
//        $content = $request->input('content');

//        dd($title, $content);
//        $post = new Post;
        alert(__('Сохранено!'));

        return redirect()->route('user.posts.show', 321);
//        return 'Запрос создания поста USER';
    }

    public function show($post)
    {
        $post = (object) [
            'id'=> 123,

            'title' => 'Lorem ipsum dolor sit amet.',

            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consecrate radicalising elite. Dulcimers, temporal?',
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object) [
            'id'=> 123,

            'title' => 'Lorem ipsum dolor sit amet.',

            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consecrate radicalising elite. Dulcimers, temporal?',
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ]);

        // Скрипт для предотвращения дублирования кода с пом. выноса правил валидации в модель
//        $validated = validate($request->all(), Post::getRules());

        dd($validated);

//        return redirect()->route('user.posts.show', $post);
        alert(__('Обновлено!'));

        return redirect()->back();
//        return 'Запрос изменения поста USER';
    }

    public function destroy($post)
    {
//        return redirect()->route('user.posts.index');

        return 'Запрос удаление поста USER';
    }

    public function like()
    {
        return 'Лайк + 1 USER';
    }
}
