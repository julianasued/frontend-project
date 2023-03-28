@extends('header')

@section('content')
    <div class="container">
        <div class="col-md-12 col-lg-12">
            <h4 class="mb-3">Hello, my name is {{ $name }}</h4>
            <h1 class="mb-3">My history</h1>
            <p>Lorem ipsum dolor sit amet. Ea iure voluptates et mollitia itaque et quasi neque cum saepe animi ut voluptate
                ratione id alias internos.</p>
        </div>
        <div class="row">
            <div class="col-md-1">

                <a href="{{ $github }}" target="_blank" class="btn btn-primary">
                    Github</span>
                </a>

            </div>
            <div class="col-md-1">
                <a href="{{ $linkedin }}" target="_blank" class="btn btn-primary">
                    Linkedin</span>
                </a>
            </div>
        </div>
    </div>


@stop
