@extends('layout')

@section('content')
<div class="content">

<h2>Login</h2>


{{ Form::open(array('url' => 'login')) }}
	<div class="form-group">
	    {{ Form::text('email', 'email', array('class' => 'form-control' )); }}
	</div>

	<div class="form-group">
	     {{ Form::password('password',array('class' => 'form-control' )); }}
	 </div>

	<div class="form-group">
	     {{ Form::submit('Logga in', array('class' => 'btn btn-default')); }}
	</div>

{{ Form::close() }}


</div>




@stop