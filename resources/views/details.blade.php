@extends('layouts.templatee')

@section('content')


<div style = "margin: 20px"><h2>Личные данные:</h2></div><br>
<div class="jumbotron pd-3 pd-md-5 text-white rounded bg-dark">
<h2>Имя: {{ $contact->name }}<br>
    <small>Место работы: {{$contact->job}}</small>
</h2>
<p>Комментарии: {{$contact->comment}}</p>
<p>Как связаться: {{$contact->email}}</p>
</div>

<left>
<a href="{{url('/contact/'.$contact->id.'/edit')}}" style = "margin: 30px">Изменить</a><br><br>
<a href="{{url('/')}}" style = "margin: 30px">Назад</a>
</left>

<style>
.jumbotron {
  text-align: left;
  position: auto;
  margin-left: 20px;
  margin-right: 1000px;;
}
</style>

@endsection
