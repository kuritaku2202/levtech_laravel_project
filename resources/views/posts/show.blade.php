<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <!--fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
</head>
<body>
    <h1 class="title">
        {{$post -> title }}
    </h1>
    <div class="content">
        <div class="content_post">
            <h3>本文</h3>
            <p>{{ $post->body }}</p>
        </div>
    </div>
    <div class="edit">
        <a href="/posts/{{ $post->id }}/edit">[編集]</a>
    </div>
    <div class="footer">
        <a href="/">[戻る]</a>
    </div>
</body>
</html>