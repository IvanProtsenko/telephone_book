@extends('layouts.templatee')

@section('content')

<left>
<h2 style  = "margin: 30px"><strong>Изменить контакт</strong></h2>
<form method="POST" style = "margin: 30px">
        @csrf
        <label>Имя</label>
        <input type="text" name="name" required value="{{old('name')}}"><br>
        <label>Компания</label>
        <input type="text" name="job" value="{{old('job')}}"><br>
        <label>Email</label>
        <input type="text" name="email" value="{{old('email')}}"><br>
        <label>Комментарий</label>
        <textarea name="comment">{{old('comment')}}</textarea><br>
        <input type="submit" value="Изменить">
</form>
</left>

<a href="{{url('/')}}" style = "margin: 50px">Назад</a>

@endsection
