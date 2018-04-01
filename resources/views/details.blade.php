@extends('layouts.templatee')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div style = "margin-left: 20px; margin-top: 10px"><h2>Личные данные:</h2></div>
<div class="card-body pd-3 pd-md-5 text-dark rounded">
<h2>{{ $contact->name }} <a href="{{url('/contact/'.$contact->id.'/edit')}}"><img src="https://png.icons8.com/android/50/000000/pencil.png" width = "23px"></a><br>
  <small>{{$contact->job}}</small>
</h2>
<p>{{$contact->comment}}</p>
<p>{{$contact->email}}</p>

<h3>Телефоны</h3>
<ul>
@foreach($contact->phones as $phone)
  <li>{{ $phone->phone }}
  <a href="{{url('/phone/'.$phone->id.'/delete')}}"><img src="https://png.icons8.com/material/50/000000/cancel.png" width = "20px"></a><br></li>
@endforeach
<li><a href="{{url('/contact/'.$contact->id.'/add_phone')}}">добавить</a></li>
</ul>

<h3>Сайты</h3>
<ul>
@foreach($contact->sites as $site)
  <li>{{ $site->site }}
  <a href="{{url('/site/'.$site->id.'/delete')}}"><img src="https://png.icons8.com/material/50/000000/cancel.png" width = "20px"></a></a><br></li>
@endforeach
  <li><a href="{{url('/contact/'.$contact->id.'/add_site')}}">добавить</a></li>

</ul>

<a href="{{url('/')}}"><img src="https://png.icons8.com/ios/50/000000/long-arrow-left.png" width = "30px"></a>


</left>

<style>
.card-body {
  background-color: #d6d6c2;
  text-align: left;
  position: auto;
  margin-left: 20px;
  margin-right: 1000px;;
}
</style>

@endsection
