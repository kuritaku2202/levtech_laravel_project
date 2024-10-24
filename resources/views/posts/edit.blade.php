<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">

</head>
    <body>
        <h1 class="title">編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="post">
            @csrf
            @method('put')
            <div class="content_title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" value="{{$post->title}}"/>
            </div>
            <div class="content_body">
                <h2>本文</h2>
                <textarea name="post[body]" >{{$post->body}}</textarea>
            </div>
            <div class="store">
                <input type="submit" value="更新"/>
            </div>
            <div class="back">
                <a href="/posts/{{ $post->id }}}">[戻る]</a>
            </div>
        </form>
    </body>
</html>