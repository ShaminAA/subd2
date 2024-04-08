<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{$department ? "Список должностей в отделе " .$department->name : 'Неверный ID категории'}}</h2>
    @if($department)
        <table border="1">
            <tn>
                <td> id</td>
                <td> Наименование</td>
                <td> id должности</td>
            </tn>
            @foreach ($department->posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->department_id}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
