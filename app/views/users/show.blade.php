
@extends ('layouts.users')

@section('main')

<h1>{{ strtoupper($user->name) }} Details</h1>

	<div class="jumbotron text-center">
		<h2>{{ $user-> name }} </h2>
		<p>
			<strong>Username : </strong> {{ $user->username }} <br />
			<strong>Password : </strong> {{ $user->password }} <br />
			<strong>Email	 : </strong> {{ $user->email }} <br />
			<strong>Phone	 : </strong> {{ $user->phone }} <br />	
		</p>
	</div>

	<div>
		{{ link_to_route('users.index', 'Back to list') }}
	</div>


@if ($errors->any())
	<ul>
		{{ implode('', 
			$errors->all('<li class="error">:message</li>')
		)}}
	</ul>
@endif

@stop