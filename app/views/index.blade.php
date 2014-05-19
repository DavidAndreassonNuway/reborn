@extends('layout')

@section('content')
 <div class="content">
	<h2>Hem</h2>
	<?php
	if (Auth::check())
	{
    // The user is logged in...
	}
	?>

</div>
			
@stop