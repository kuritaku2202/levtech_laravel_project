<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lev_blog</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h1>Blog Name</h1>
        </x-slot>
        <body>
            <a href="/posts/create">create</a>
            <div class = 'posts' >
                @foreach ($posts as $post)
                    <div class="post">
                        <h2 class="title">
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p>Category:<a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a></p>
                            <p class="body">{{ $post->body }}</p>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="button" onclick="deletePost({{ $post->id }})">[削除]</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <div class="paginate">
                {{$posts -> links()}}
            </div>
            <script>
                function deletePost(id) {
                    'use strict'

                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>