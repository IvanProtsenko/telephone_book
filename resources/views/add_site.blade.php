@extends("layouts.templatee")

@section('content')

<form method="POST">
        @csrf
        <label>Сайты</label>
        <input type="text" name="site" required value="{{old('site')}}"><br>
        <input type="submit" value="Добавить">
</form>

<a href="{{url('/contact/'.$contact->id)}}">Назад</a>

@endsection
