<!DOCTYPE html>
<html lanf="en">

<head>
	<meta charset="UTF-8">
	<title></title>

	{{ HTML::script('js\jquery.js') }}
	{{ HTML::script('js\script.js') }}
	{{ HTML::style('css\bootstrap.css') }}
	{{ HTML::style('css\style.css') }}
	{{ HTML::script('js\bootstrap.js') }}
	
</head>
<body>


<div class="navbar">
			<div class="navbarText">

				<ul id="navigation">
					<li>{{ HTML::link('/','HEM') }}</li>
					<li>{{ HTML::link('about','OM OSS') }}</li>
				</ul>

			
				<ul id="copyright">
					<li><h4>reBORNEO</h4></li>
					<li class="grey">2014</li>

				</ul>

				<ul id="names">
					<li style="color: white; margin-bottom:2px;">I samarbete med Blekinge Tekniska Högskola</li>
					<li>Martin Ullner</li>
					<li>David Andréasson</li>
					<li>Olle Öhman</li>
					<li>Daniel Sonesson</li>
					<li>Rasmus Appelros</li>
					<li>Khyber Rostami</li>
				</ul>

		</div>
			<div class="navbarClick">
				<div class="button">
					<div class="stripes"></div>
					<div class="stripes"></div>
					<div class="stripes"></div>
				</div>
			</div>
		</div>
	</div>
										<!-- navbar right-->
	<div class="navbarRight">
		

	
		<div class="navbarRightClick">
			
		</div>

		

		<div class="loginForm">
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

			{{ HTML::link('register', 'Registrera dig gratis här'); }}
			

		</div>

					

		
	</div>
		





@yield('content')







</body>
</html>