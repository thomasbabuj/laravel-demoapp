@extends ('layouts.users')

@section ('main')

<h1>Create User</h1>
{{ Form::open(array('route' => 'users.store', 'class' => 'form-horizontal')) }}
	<div class="control-group">
		{{ Form::label('name', 'Name: ' , array('class' => 'control-label', 'for' =>'name'))}}
		<div class="controls">
			{{ Form::text('name', null, array('placeholder' => 'Name'))}}
		</div>
	</div>
	<div class="control-group">
		{{ Form::label('username', 'Username: ' , array('class' => 'control-label', 'for' =>'username'))}}
		<div class="controls">
			{{ Form::text('username', null, array('placeholder' => 'Username'))}}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('password', 'Password: ' , array('class' => 'control-label', 'for' =>'password'))}}
		<div class="controls">
			{{ Form::password('password', null, array('placeholder' => 'Password'))}}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('email', 'Email: ' , array('class' => 'control-label', 'for' =>'email'))}}
		<div class="controls">
			{{ Form::text('email', null, array('placeholder' => 'Email'))}}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('phone', 'Phone: ' , array('class' => 'control-label', 'for' =>'phone'))}}
		<div class="controls">
			{{ Form::text('phone', null, array('placeholder' => 'Phone'))}}
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			{{ Form::submit('Submit', array('class' => 'btn')) }}
		</div>
	</div>

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
