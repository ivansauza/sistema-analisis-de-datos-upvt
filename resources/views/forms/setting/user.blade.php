<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('nombre') }}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre']) }}
		</div>

		<div class="form-group">
			{{ Form::label('apellidos') }}
			{{ Form::text('apellidos', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa los apellidos']) }}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('email', 'Correo Electrónico') }}
			{{ Form::text('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el correo electrónico']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Contraseña nueva') }}
			{{ Form::text('password', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la nueva contaseña']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Confirmar contraseña nueva') }}
			{{ Form::text('password', null, ['class' => 'form-control', 'required', 'placeholder' => 'Confirma la contraseña nueva']) }}
		</div>

		<hr />

		<div class="form-group">
			{{ Form::label('current_password', 'Contraseña actual') }}
			{{ Form::text('current_password', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la contraseña actual']) }}
		</div>
	</div>
</div>