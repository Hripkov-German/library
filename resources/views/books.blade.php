<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список книг</title>
</head>
<body>
<h1>Список книг</h1>

<table border="1">
    <tr>
        <td>id</td>
        <td>Название</td>
        <td>Автор(ы)</td>
        <td>Год издания</td>
        <td>Редактировать</td>
        <td>Удалить</td>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book['id']}}</td>
            <td>{{$book['title']}}</td>
            <td>Автор(ы)</td>
            <td>{{$book['date_published']}}</td>
            <td align="center">--></td>
            <td align="center">X</td>
        </tr>
    @endforeach
</table>

<br><a href="/">Вернуться назад</a>
</body>
</html>
