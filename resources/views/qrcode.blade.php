@extends('header')

@section('content')

    <div class="col-md-12 col-lg-12">
        <h1>{{ $name }}</h1>
        <h4>Scan me</h4>
        <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=http://localhost/fantasma/{{$id}}">
    </div>
    <hr class="my-4">
@stop
