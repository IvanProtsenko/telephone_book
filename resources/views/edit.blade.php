@extends('layouts.templatee')

@section('content')

<left>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h2 style  = "margin: 30px"><strong>Изменить контакт</strong></h2>

<div class="card-body pd-3 pd-md-5 text-dark rounded">
<form method="POST" style = "margin: 30px">
        @csrf
        <label>Имя</label>
        <input type="text" name="name" class="form-control" required value="{{old('name')}}"><br>
        <label>Компания</label>
        <input type="text" name="job" class="form-control" value="{{old('job')}}"><br>
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="{{old('email')}}"><br>
        <label>Комментарий</label>
        <textarea name="comment" class="form-control">{{old('comment')}}</textarea><br>
        <input type="submit" value="Изменить" class = "btn btn-secondary">
</form>
<a href="{{url('/contact/'.$contact->id)}}" style = "margin: 30px"><img src="https://png.icons8.com/ios/50/000000/long-arrow-left.png" width = "30px"></a>
</div>
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
