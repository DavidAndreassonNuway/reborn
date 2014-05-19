@extends('layout')

@section('content')
<div class="content">
	<h2>Register</h2>

	{{ Form::open(array('url' => 'register')) }}

	<div class="form-group">
	    {{ Form::text('email', 'example@gmail.com'); }}
	</div>
	<div class="form-group">
	    {{ Form::text('Username', 'Username'); }}
	</div>
	<div class="form-group">
	     {{ Form::password('password'); }}
	</div>
		
	   
	  
	     {{Form::submit('Registrera!');}}
	{{ Form::close() }}
</div>
@stop



