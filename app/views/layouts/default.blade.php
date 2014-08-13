<!docttype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{{ $title }}</title>
	<meta name="viewport" content="width=device-width">
	<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css" >

		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/slider.css') }}
		{{ HTML::script('js/slider.js') }}
</head>
<body class="{{ $class }}">
	<div class="container">
		<div class="row-fluid header">
			<div class="span4 logo">
				<a href="{{ URL::to('/') }}">
					<img class="logo" src="{{ URL::asset('images/logo.png') }}"
				</a>
			</div>
			<div>
				<ul>
					<li>
						<a href="#popup" data-toggle="modal">Create Foldagram</a></li>
					</li>
					<li>
						{{ link_to_route('pcredit', 'Purchase Credits') }}
					</li>
					<li>
						{{ link_to_route('cart', 'Cart') }}
					</li>
					<li>
						{{ link_to_route('contact', 'Contact') }}						
					</li>
					<li>
						{{ link_to_route('userlogin', 'Login') }}
					</li>
					<li>
						{{ link_to_route('register', 'Register') }}
					</li>
				</ul>
			</div>
			<div class="span2 social">
				<a href="#">FB</a>
				<a href="#">Twitter</a>
				<a href="#">Pinterest</a>
			</div>
		</div>

		@yield('inner-banner')

		<div class="row-fluid content">
			@yield('content')
		</div>

		<div class="row-fluid subscribe-form">
			<div class="span12 subscribe-content">
				{{ Form::open(array('url' => 'subscribe')) }}
				{{ Form::label('something', 'Sign Up for our Newsletter and Updates!') }}
				{{ Form::text('email', null, array('class' => 'input-large' , 'placeholder' => 'Email')) }}
				{{ Form::submit('Subscribe') }}
				{{ Form::close() }}
			</div>
		</div>

		<div class="row-fluid footer">
			<div class="span8 footer-menu">
				<ul>
					<li>{{ link_to_route('contact', 'Contact') }}</li>
					<li>{{ link_to_route('about', 'About') }}</li>
					<li>{{ link_to_route('login', 'Log In') }}</li>
					<li>{{ link_to_route('register', 'Register') }}</li>
				</ul>
			</div>
		</div>

		<div class="span4 copyright">
			<h4>Foldagram is patent pending</h4>
			<p>&copy; Copyright All Encompassing Productions LLC, 2014</p>
		</div>

	</div>
</body>
</html>