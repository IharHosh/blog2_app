@extends('layouts.main')

@section('page.title', 'Наш блог')

@section('main.content')

    <x-title>
        <h1 class="h3 mb-5">
            {{ __('Список постов') }}
        </h1>
    </x-title>

    @include('blog.filter')

    @if($posts->isEmpty())
        {{ __('Нет ни одного поста') }}
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post"/>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    @endif

@endsection



