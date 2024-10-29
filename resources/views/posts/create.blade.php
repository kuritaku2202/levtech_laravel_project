<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">

</head>
<x-app-layout>
    <x-slot name="header">
        <h1>Blog Name</h1>
    </x-slot>
    <body>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <p class="title_error" style="color:red"> {{$errors->first('post.title')}}</p>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"/>
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="body">
                <h2>Body</h2>
                <p class="body_error" style="color: red;">{{$errors->first('post.body')}}</p>
                <textarea name="post[body]" placeholder="今日も１日お疲れ様でした。"> {{old('post.body')}}</textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">
            <a href="/">[戻る]</a>
        </div>
    </body>
</x-app-layout>
</html>