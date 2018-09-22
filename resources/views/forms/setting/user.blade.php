<div class="row">
	<div class="col-md-3 text-center text-lg-left">
		<img class="rounded-circle img-fluid" src="https://www.gravatar.com/avatar/de85d9bc74935247ebceed66c9620050?d=mm&amp;s=128" alt="User profile picture">
	</div>
	<div class="col-md-9 mt-3 mt-lg-0 text-center text-lg-left">
		<h2 class="font-weight-light">
			{{ $user->prefijo }} {{ $user->name }} {{ $user->apellidos }} 
			<small>
				@if(!$user->roles()->get()->isEmpty())
					{{ $user->roles()->first()->name }}
				@endif
			</small>
		</h2>
		<p class="text-muted">
			{{ $user->email }}
		</p>
	</div>
</div>

<table class="table">
	<tbody>
		<tr>
			<td class="text-right">Fecha de registro: </td>
			<td>{{ $user->created_at }}</td>
		</tr>
		<tr>
			<td class="text-right">Fecha de edición: </td>
			<td>{{ $user->updated_at }}</td>
		</tr>
	</tbody>
</table>


<div class="row">
	<div class="col-xs-12 col-md">
		<div class="form-row">
			<div class="form-group col-4">
				{{ Form::label('prefijo') }}
				{{ Form::text('prefijo', null, ['class' => 'form-control', 'placeholder' => 'Prefijo']) }}
				@if ($errors->has('prefijo'))
					<span class="badge badge-danger">{{ $errors->first('prefijo') }}</span>
				@endif
			</div>
			<div class="form-group col-8">
				{{ Form::label('name', 'Nombre') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre']) }}
				@if ($errors->has('name'))
					<span class="badge badge-danger">{{ $errors->first('name') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('apellidos') }}
			{{ Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Ingresa los apellidos']) }}
			@if ($errors->has('apellidos'))
				<span class="badge badge-danger">{{ $errors->first('apellidos') }}</span>
			@endif
		</div>
	</div>
	<div class="col-xs-12 col-md">
		<div class="form-group">
			{{ Form::label('email', 'Correo Electrónico') }}
			{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el correo electrónico']) }}
			@if ($errors->has('email'))
				<span class="badge badge-danger">{{ $errors->first('email') }}</span>
			@endif
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Contraseña nueva') }}
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa la contaseña nueva']) }}
			@if ($errors->has('password'))
				<span class="badge badge-danger">{{ $errors->first('password') }}</span>
			@endif
		</div>
		<div class="form-group">
			{{ Form::label('password_confirmation', 'Confirmar contraseña nueva') }}
			{{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirma la contraseña nueva']) }}
		</div>

		<hr />

		<div class="form-group">
			{{ Form::label('current_password', 'Contraseña actual') }}
			{{ Form::password('current_password', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña actual', 'required']) }}
			@if ($errors->has('current_password'))
				<span class="badge badge-danger">{{ $errors->first('current_password') }}</span>
			@endif
		</div>
	</div>
</div>