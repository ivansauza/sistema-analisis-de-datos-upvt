<div class="form-row">
	<div class="form-group col-3">
		{{ Form::label('clave') }}
		{{ Form::text('clave', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la clave']) }}
	</div>

	<div class="form-group col">
		{{ Form::label('nombre') }}
		{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre']) }}
	</div>
</div>