<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:50'],
            'from_date' => ['nullable', 'string', 'date'],
            'to_date' => ['nullable', 'string', 'date', 'after:from_date'],
            'tag' => ['nullable', 'string', 'max:10'],
        ]);

        $query = Post::query()

        ->where('published', true)
        ->whereNotNull('published_at');

        if ($search = $validated['search'] ?? null) {
            $query->where('title', 'like', "%{$search}%");
            $query->orWhere('content', 'like', "%{$search}%");
        }

        if ($fromDate = $validated['from_date'] ?? null) {
            $query->where('published_at', '>=', new Carbon($fromDate));
        }

//        dd($fromDate);

        if ($toDate = $validated['to_date'] ?? null) {
            $query->where('published_at', '<=', new Carbon($toDate));
        }

        if ($tag = $validated['tag'] ?? null) {
            $query->whereJsonContains('tags', $tag);
        }

        $posts = $query->latest('published_at')
            ->paginate(5);



//        $posts = Post::query()
//            ->when($validated['search'] ?? null,
//            function (Builder $query, string $search){
//                $query->where('title', 'like', "%{$search}%");
//                $query->orWhere('content', 'like', "%{$search}%");
//            }
//
//            )->latest('published_at')
//            ->paginate(5);


        return view('blog.index', compact('posts'));
//        return view('blog.index', compact('posts', 'categories'));
    }

    public function show(Request $request, Post $post)
    {
         return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return "Поставь LIKE $post!";
    }
}
//use App\Models\Post;
//use Illuminate\Support\Collection;
//
//Post::query()->chunk(2, function (Collection $posts){
//    dd($posts);
//});
