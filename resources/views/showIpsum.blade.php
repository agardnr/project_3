
@extends('layouts.master')


@section('title')
    Lorem Ipsum Generator
@endsection


@section('head')

@endsection

@section('ipsum')
<div class="container">
<div class="row">
    <div class="offset-md-0 col-md-4">

    </div>

    <div class="offset-md-0 col-md-4">
        <h4>Lorem Ipsum Generator</h4>
        <br>
        <div class='info'>

        {!! lorem($paragraphs) !!}
        
      </div>
    </div>

    <div class="col-md-0 offset-md-4">
    </div>
</div>
</div>

@endsection


@section('body')

@stop
