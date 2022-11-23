<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple PGSQL Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div id="root">
        @include('layouts.header')

        <main class="main">
            <h3>Новые публикации</h1>
            <div class="posts d-flex flex-column">
                @forelse ($posts as $post)
                <a href={{ route('post', ['id' => $post->id]) }} class="posts__item">
                    <h5>{{ $post->title }}</h5>
                </a>
                @empty
                <h5>Публикации отсутствуют.</h5>
                @endforelse

            </div>
        </main>

        @include("layouts.footer")
    </div>
</body>
</html>
