<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация - Simple PGSQL Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div id="root">
        @include('layouts.header')

        <main class="main">
            <h3>Регистрация</h1>
            <form class="" method="post">
                @csrf
                <input type="hidden" name="name" value="user">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input id="login" type="email" name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Пароль" required>
                </div>
                <div class="form-group">
                    <label for="password-re">Повтор пароля</label>
                    <input id="password-re" type="password" name="password_re" class="form-control" placeholder="Повтор пароля" required>
                </div>
                <button class="btn btn-primary">Зарегистрироваться</button>
                <a href="{{  route('login') }}" class="btn btn-secondary-outline">Вход</a>
            </form>
        </main>

        @include("layouts.footer")
    </div>
</body>
</html>
