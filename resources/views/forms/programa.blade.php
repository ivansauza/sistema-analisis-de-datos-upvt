<div class="form-group">
	{{ Form::label('clave') }}
	{{ Form::text('clave', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la clave']) }}
</div>

<div class="form-group">
	{{ Form::label('nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre']) }}
</div>