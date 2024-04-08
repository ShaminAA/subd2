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
    <h2>Список должностей</h2>
        <table border="1">
            <thead>
                <td> id</td>
                <td> Должность </td>
                <td> Отдел </td>
                <td> Действия </td>
            </thead>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->department->name}}</td>
                    <td>
                        <a href="{{url('posts/destroy/'.$post->id)}}">Удалить</a>
                        <a href="{{url('posts/edit/'.$post->id)}}">Редактировать</a>
                    </td>
                </tr>
            @endforeach
        </table>
{{$posts->links()}}
</body>
</html>
