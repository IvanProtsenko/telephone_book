@extends('layouts.templatee')

@section('content')


<div style = "margin: 20px"><h2>Личные данные:</h2></div><br>
<div class="jumbotron pd-3 pd-md-5 text-white rounded bg-dark">
<h2>{{ $contact->name }}<br>
  <small>{{$contact->job}}</small>
</h2>
<p>{{$contact->comment}}</p>
<p>{{$contact->email}}</p>

<h3>Телефоны</h3>
<ul>
@foreach($contact->phones as $phone)
  <li>{{ $phone->phone }}</li>
  <a href="{{url('/phone/'.$phone->id.'/delete')}}">Удалить</a><br>
@endforeach
<li><a href="{{url('/contact/'.$contact->id.'/add_phone')}}">добавить</a></li>
</ul>

<h3>Сайты</h3>
<ul>
@foreach($contact->sites as $site)
  <li>{{ $site->site }}</li>
  <a href="{{url('/site/'.$site->id.'/delete')}}">Удалить</a><br>
@endforeach
  <li><a href="{{url('/contact/'.$contact->id.'/add_site')}}">добавить</a></li>

</ul>

<a href="{{url('/contact/'.$contact->id.'/edit')}}">Изменить</a><br>
<a href="{{url('/')}}">Назад</a>
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
