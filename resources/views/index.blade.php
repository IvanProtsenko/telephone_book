@extends('layouts.templatee')

@section('content')


<div style = "margin-top: 15px; margin-left: 30px"><h2>Контакты:</h2></div>
    @foreach($contacts as $contact)
    <div class="card-body pd-3 pd-md-5 text-dark">
    <h3><a href="{{url('contact/'.$contact->id)}}">{{$contact->name}}</a> @if ($contact->job) ({{$contact->job}}) @endif <a href = "{{url('/contact/'.$contact->id.'/delete')}}"><img src="https://png.icons8.com/color/50/000000/cancel.png" width = "30px"></a><h3>
    </div>
    <br>
    @endforeach

<style>
.card-body {
  background-color: #e0e0d1;
  text-align: left;
  position: auto;
  margin-left: 20px;
  margin-right: 1000px;;
}
</style>

<left>
<h5><a href="{{url('/add')}}" style = "margin-left: 30px">Добавить контакт</a></h5>
</left>

@endsection
