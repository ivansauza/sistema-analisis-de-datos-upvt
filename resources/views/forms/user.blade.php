<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('name') }}
			{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre']) }}
			@if ($errors->has('name'))
				<span class="badge badge-danger">{{ $errors->first('name') }}</span>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('apellidos') }}
			{{ Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Ingresa los apellidos']) }}
			@if ($errors->has('apellidos'))
				<span class="badge badge-danger">{{ $errors->first('apellidos') }}</span>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Correo Electrónico') }}
			{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el correo electrónico']) }}
			@if ($errors->has('email'))
				<span class="badge badge-danger">{{ $errors->first('email') }}</span>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Contraseña') }}
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña']) }}
			@if ($errors->has('password'))
				<span class="badge badge-danger">{{ $errors->first('password') }}</span>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('password_confirmation', 'Confirmar contraseña') }}
			{{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirma la contraseña']) }}
			@if ($errors->has('password_confirmation'))
				<span class="badge badge-danger">{{ $errors->first('password_confirmation') }}</span>
			@endif
		</div>

	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('programas[]', 'Programas Educativos') }}
			{{ Form::select('programas[]', $programas, null, ['class' => 'form-control', 'multiple']) }}
			<small class="form-text text-muted">Puede seleccionar varios items presionando la tecla "control" + "click".</small>
			@if ($errors->has('programas'))
				<span class="badge badge-danger">{{ $errors->first('programas') }}</span>
			@endif
		</div>
		<div class="form-group">
			{{ Form::label('roles', 'Rol') }}
			{{ Form::select('roles', $roles, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar ...']) }}
			@if ($errors->has('roles'))
				<span class="badge badge-danger">{{ $errors->first('roles') }}</span>
			@endif
		</div>

		<hr />

		<div class="form-group mt-4">
			<div class="custom-control custom-checkbox">
				{{ Form::hidden('disabled', 0) }}
			 	{{ Form::checkbox('disabled', 1, null, ['class' => 'custom-control-input', 'id' => 'disabled']) }}
			 	{{ Form::label('disabled', 'Desactivar usuario, ya no podrá iniciar sesión en el sistema.', ['class' => 'custom-control-label']) }}
				@if ($errors->has('disabled'))
					<span class="badge badge-danger">{{ $errors->first('disabled') }}</span>
				@endif
			</div>
		</div>
	</div>
</div>