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
    <h2>{{$worker ? " Список должностей работника №".$worker->id: 'Неверный ID работника '}}</h2>
    @if($worker)
        <p>{{$worker->surname}} {{$worker->name}}</p>
    <table border="1">
        <thead>
        <td> Должность </td>
        <td> Отдел </td>
        <td> Ставка </td>
        </thead>
        @foreach($worker->posts as $post)
            <tr>
                <td>{{$post->name}}</td>
                <td>{{$post->department->name}}</td>>
                <td>{{$post->pivot->share_bet}}</td>>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
