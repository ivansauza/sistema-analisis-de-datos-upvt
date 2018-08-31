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

		<div class="form-group">
			{{ Form::label('email', 'Correo Electrónico') }}
			{{ Form::text('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el correo electrónico']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Contraseña') }}
			{{ Form::text('password', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la contaseña']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Confirmar contraseña') }}
			{{ Form::text('password', null, ['class' => 'form-control', 'required', 'placeholder' => 'Confirma la contraseña']) }}
		</div>

	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('programa_id', 'Programas Educativos') }}
			{{ Form::select('programa_id', ['a' => 'Ingenieria en Informatica', 'b' => 'Maestria en Administracion'], null, ['class' => 'form-control', 'multiple' => true]) }}
			<small class="form-text text-muted">Puede seleccionar varios items presionando la tecla "control" + "click".</small>
		</div>
		<div class="form-group">
			{{ Form::label('role_id', 'Roles') }}
			{{ Form::select('role_id', ['a' => 'Secretaria', 'b' => 'Profesor', 'c' => 'Director'], null, ['class' => 'form-control', 'multiple' => true]) }}
			<small class="form-text text-muted">Puede seleccionar varios items presionando la tecla "control" + "click".</small>
		</div>
	</div>
</div>