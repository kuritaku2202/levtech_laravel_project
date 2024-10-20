<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lev_blog</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class = 'posts' >
            @foreach ($posts as $post)
                <div class="post">
                    <h2 class="title">{{ $post->title }}</h2>
                    <p class="body">{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{$posts -> links()}}
        </div>
    </body>
</html>