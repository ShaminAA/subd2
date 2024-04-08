@extends('layout')
@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;"> <!-- Добавляем пользовательский отступ сверху -->
        <div class="col-6">
            <h2> Список работников</h2>
    <table border="1">
        <thead>
        <td> id </td>
        <td> Имя </td>
        <td> Фамилия </td>
        </thead>
        @foreach($workers as $worker)
            <tr>
                <td>{{$worker->id}}</td>
                <td>{{$worker->name}}</td>
                <td>{{$worker->surname}}</td>>
                <td>
                    <a href="{{url('worker/' . $worker->id)}}">Просмотр должностей</a>
                </td>
            </tr>
        @endforeach
    </table>
        </div>
    </div>
@endsection
