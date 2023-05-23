<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $title = $request->input('title');
        $content = $request->input('content');

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
        $title = $request->input('title');
        $content = $request->input('content');

//        dd($title, $content);

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
