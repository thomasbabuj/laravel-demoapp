@extends ('layouts.users')

@section ('main')

<h1>Create User</h1>
{{ Form::open(array('route' => 'users.store', 'class' => 'form')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name: ') }}
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</li>
		<li>
			{{ Form::label('username', 'Username: ') }}
			{{ Form::text('username') }}
		</li>
		<li>
			{{ Form::label('password', 'Password: ') }}
			{{ Form::text('password') }}
		</li>
		<li>
			{{ Form::label('email', 'Email: ') }}
			{{ Form::text('email') }}
		</li>
		<li>
			{{ Form::label('phone' , 'Phone: ') }}
			{{ Form::text('phone') }}
		</li>
		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ( $errors->any() )
	<ul>
		{{ 
			implode('', $errors->all('
				<li class="error">:message</li>
			'))
		}}
	</ul>
@endif

@stop		
