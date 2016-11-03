@extends('layouts.master')

@section('title', 'Generate Lorem Ipsum')

@section('form')
<form class="form-horizontal" method='POST' action='/form/create/show'>

{{ csrf_field() }}


<fieldset class="align-center">
<h4>Lorem Ipsum Generator</h4>

<!-- Number of names input-->
<div class="form-group">
<label class="col-md-4 control-label" for="paragraphs">How many names? (Max 99)</label>
<div class="col-md-2">
<input id="paragraphs" name="paragraphs" type="number" placeholder="" class="form-control input-md">

<div class="form-group">
<label class="col-md-12 control-label"></label>
<div class="col-md-12">

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
