<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить пост - Simple PGSQL Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div id="root">
        @include('layouts.header')

        <main class="main">
            <h3>Добавить пост</h1>
            <form method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input id="title" type="text" name="title" class="form-control" placeholder="Заголовок новости" required>
                </div>
                <div class="form-group">
                    <label for="desc">Описание</label>
                    <textarea id="desc" class="form-control" name="description"></textarea>
                </div>
                <button class="btn btn-primary">Добавить</button>
            </form>
        </main>

        @include("layouts.footer")
    </div>
</body>
</html>
