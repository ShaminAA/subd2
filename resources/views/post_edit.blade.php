@extends('layout')
@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;"> <!-- Добавляем пользовательский отступ сверху -->
        <div class="col-6">
<h2>Редактирование должности</h2>
<form method="post" action="{{url('posts/update/'.$post->id)}}">
    @csrf
    <label>Наименование</label>
    <input type="text" name="name" value="@if(old('name')){{old('name')}}@else{{$post->name}} @endif"/>
    @error('name')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br>
    <label>Отдел</label>
    <select name="department_id" value="{{old('department_id')}}">
        <option style="">
        @foreach($departments as $department)
        <option value="{{$department->id}}">
            @if(old('department_id'))
                @if(old('department_id')==$department->id) selected @endif
            @else
                @if($post->department_id==$department->id) selected @endif
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
</div>
</div>
@endsection
