<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тест</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/books/">Книги</a>
        <a class="navbar-brand" href="/authors/">Авторы</a>
        <a class="navbar-brand" href="/books/create">Добавление книг</a>
        <a class="navbar-brand" href="/authors/create">Добавление авторов</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
