@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
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
                    </td>
                    <td>
                        <a href="{{url('posts/edit/'.$post->id)}}">Редактировать</a>
                    </td>
                </tr>
            @endforeach
        </table>
{{$posts->links()}}
</div>
    </div>
@endsection
