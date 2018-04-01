@extends("layouts.templatee")

@section('content')

<br>
<div class="card-body pd-3 pd-md-5 text-dark rounded">
<form method="POST" style = "margin: 30px">
        @csrf
        <label>Сайт</label>
        <input type="text" name="site" class="form-control" required value="{{old('site')}}"><br>
        <input type="submit" value="Добавить" class = "btn btn-success">
</form>
<a href="{{url('/contact/'.$contact->id)}}" style = "margin: 30px"><img src="https://png.icons8.com/ios/50/000000/long-arrow-left.png" width = "30px"></a>
</div>

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
