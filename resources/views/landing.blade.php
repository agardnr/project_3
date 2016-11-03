
@extends('layouts.master')


@section('title')
    Web Developer's Best Friend
@endsection


@section('head')
<link href='/css/landing.css' type='text/css' rel='stylesheet'>
@endsection

@section('landing')
<div class="container">
    <div class="row">
        <div class="offset-md-0 col-md-2"></div>

        <div class="offset-md-0 col-md-8">
            <h2>Developer's Best friend</h2>
            <br>
            <h3>What type of information would you like to generate?</h3>
            <br>

            <div class='project_links'>
            <ul>
                <li>
            Generate random Lorem Ipsum text for your project
        </li>
                <li>
              <a href='/form/create'>Lorem Ipsum Text</a>
          </li>
      </ul>
      <br><br>
      <ul>
              <li>
              Generate random data for your project!
          </li>
            <li>
          You can generate: Names, Email Addresses, and Phone Numbers.
      </li>
                <li>
              <a href='/users/form'>Random User Data</a>
          </li>
          </ul>
          </div>
          </div>


        <div class="col-md-0 offset-md-2"></div>
    </div>
</div>

@endsection


@section('body')

@stop
