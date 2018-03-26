@extends('layouts.templatee')

@section('content')

<div style = "margin: 15px"><h2>Контакты:</h2></div><br>
    @foreach($contacts as $contact)
    <p><a href="{{url('contact/'.$contact->id)}}">{{$contact->name}}</a> @if ($contact->job) ({{$contact->job}}) @endif</p>
    <br>
    @endforeach

<style>
p {
  padding: 10px;
  border: 5px solid #9999ff;
  margin-left: 15px;
  margin-right: 1000px;
}
</style>

<left>
<a href="{{url('/add')}}" style = "margin-left: 50px">Добавить</a>
</left>

@endsection
