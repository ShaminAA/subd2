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
    <h2>Список отделов</h2>
    <table border="1">
        <thead>
        <td>id</td>
        <td>Наименование</td>
        </thead>
        @foreach($departments as $department)
            <tr>
                <td>{{$department->id}}</td>
                <td>{{$department->name}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
