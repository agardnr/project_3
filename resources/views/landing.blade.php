
@extends('layouts.master')


@section('title')
    Web Developer's Best Friend
@endsection


@section('head')
<link href='/css/landing.css' type='text/css' rel='stylesheet'>
@endsection

@section('landing')
<div class="container">
    </div>
    <div class="row">
        <div class="offset-md-0 col-md-2">

        </div>

        <div class="offset-md-0 col-md-8">
            <h2>Developer's Best friend</h2>
            <br>
            <h3>What type of information would you like to generate?</h3>
            <br>
            <ul>
            <div class='project_links'>
                <li>
            <div class= 'description'>Generate random Lorem Ipsum text for your project</div>
        </li>
        <dl>
              <a href='/form/create' id='generate'>Lorem Ipsum Text</a>
          </dl>
              <br>
              <br>
              <li>
              <div class= 'description'>Generate random data for your project-
              <br>
          You can generate: Names, Email Addresses, and Phone Numbers.</div>
      </li>
      <dl>
              <a href='/users/form' id='generate'>Random User Data</a>
          </dl>
          </ul>
        </div>
        </div>

        <div class="col-md-0 offset-md-2">

        </div>
    </div>
</div>

@endsection


@section('body')

@stop
