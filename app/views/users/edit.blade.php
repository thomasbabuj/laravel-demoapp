
@extends ('layouts.users')

@section('main')

<h1>Edit User</h1>

{{ Form::model(
	$user, 
	array(
		'method' => 'PATCH', 
		'route'=> array('users.update', $user->id, 'class' => 'form-horizontal'))
)}}

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
			{{ Form::text('password', null, array('placeholder' => 'Password'))}}
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
			
			{{ Form::submit('Update', 
					array('class' =>'btn btn-info')
			)}}
			{{ link_to_route('users.index',
					'Cancel',
					null,
					array('class' => 'btn')
			)}}
		</div>
	</div>


{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', 
			$errors->all('<li class="error">:message</li>')
		)}}
	</ul>
@endif

@stop