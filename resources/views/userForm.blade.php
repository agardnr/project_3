@extends('layouts.master')

@section('title', 'Generate User Data')

@section('form')
<form class="form-horizontal" method='POST' action='/users/form/show'>

{{ csrf_field() }}



</div>
<fieldset>
<h4>Random User Information Generator</h4>

<!-- Number of names input-->
<div class="form-group">
<label class="col-md-4 control-label" for="number">How many names? (Max 99)</label>
<div class="col-md-2">
<input id="number" name="number" type="number" placeholder="" class="form-control input-md">

<!-- Display Errors -->
@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
</div>
</div>




<!-- Include Email or Phone -->
<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="user_info">Include</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="user_info-0">
      <input type="checkbox" name="email" id="user_info-0" value="email">
      Email
    </label>
	</div>
  <div class="checkbox">
    <label for="user_info-1">
      <input type="checkbox" name="phone" id="user_info-1" value="phone">
      Phone Number
    </label>
	</div>
  </div>
</div>

<!-- Submit Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4">
<button id="submit" name="submit" class="btn btn-primary">Generate</button>
</div>
</div>



</fieldset>
</form>


@endsection
