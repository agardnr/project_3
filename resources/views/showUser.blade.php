
@extends('layouts.master')


@section('title')
    Random User Generator
@endsection


@section('head')

@endsection


@section('name')
<div class="container">
<div class="row">
    <div class="offset-md-0 col-md-4">

    </div>

    <div class="offset-md-0 col-md-4">
        <h4>Random User Information</h4>
        <br>
        <div class='info'>

        @foreach ($names as $name)

            {{ $name }}
            <br>

        @endforeach
</div>
    </div>

    <div class="col-md-0 offset-md-4">
    </div>
</div>
</div>


@endsection


@section('body')
    <script src="/js/books/show.js"></script>
@stop
