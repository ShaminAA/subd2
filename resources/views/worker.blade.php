@extends('layout')
@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;"> <!-- Добавляем пользовательский отступ сверху -->
        <div class="col-6">
            @if($worker)
            <h2>{{$worker ? " Список должностей работника №".$worker->id: 'Неверный ID работника '}}</h2>

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
            @else
                <h2>fdjkgd</h2>
             @endif
        </div>
    </div>
@endsection
