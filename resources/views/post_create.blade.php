<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style> .is-invalid{color: red;} </style>
</head>
<body>
    <h2>Добавление должности</h2>
    <form method="post" action={{url('posts/')}}>
        @csrf
        <label>Наименование</label>
        <input type="text" name="name" value="{{old('name')}}"/>
        @error('name')
        <div class="is-invalid">{{$message}}</div>
        @enderror
    <br>
    <label>Отдел</label>
    <select name="department_id" value="{{old('department_id')}}">
        <option style="">
            @foreach($departments as $department)
            <option value="{{$department->id}}">
                @if(old('department_id')==$department->id) selected
                @endif>{{$department->name}}
            </option>
            @endforeach
    </select>
    @error('department_id')
        <div class="is-invalid">{{$message}}</div>
    @enderror
    <br>
<input type="submit">
</form>
</body>
</html>
