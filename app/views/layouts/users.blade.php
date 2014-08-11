<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<style>
			table form { margin-bottom: 0; }
			form ul { margin-left: 0; list-style: none; }
			.error { color : red; font-style: italic; }
			body { padding-top: 20px;}
		</style>
	</head>
	<body>
		<div class="container">

			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{ URL::to('users') }}">My Users</a>
				</div>
				<ul class="nav navbar-nav">
					<li>
						<a href="{{ URL::to('users')}}">View All Users</a>
					</li>
					<li>
						<a href="{{ URL::to('users/create') }}">Create a User</a>
					</li>
				</ul>
			</nav>

			@if (Session::has('message'))
				<div class="flash alert">
					<p> {{ Session::get('message')}}
				</div>
			@endif
			
			@yield('main')	
		</div>
	</body>
</html>	