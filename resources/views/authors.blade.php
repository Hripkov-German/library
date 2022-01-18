<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список авторов</title>
</head>
<body>
<h1>Список авторов</h1>

<table border="1">
    <tr>
        <td>id</td>
        <td>ФИО</td>
        <td>Количество книг</td>
        <td>Редактировать</td>
        <td>Удалить</td>
    </tr>
    @foreach($authors as $author)
        <tr>
            <td>{{$author['id']}}</td>
            <td>{{$author['name']}}</td>
            <td>Количество книг</td>
            <td align="center">--></td>
            <td align="center">X</td>
        </tr>
    @endforeach
</table>

<br><a href="/">Вернуться назад</a>
</body>
</html>
