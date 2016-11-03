@extends('layouts.master')

@section('title', 'Add a new book')

@section('form')
    <h1>Add a new book</h1>
    <form method='POST' action='/form/create/show'>

        {{ csrf_field() }}

        Title: <input type='text' name='paragraphs' value=''>

        <input type='submit' value='How many paragraphs'>

        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

@endsection
