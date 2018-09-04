<div class="form-row">
	<div class="form-group col-3">
		{{ Form::label('clave') }}
		{{ Form::text('clave', null, ['class' => 'form-control', 'placeholder' => 'Ingresa la clave']) }}
		@if ($errors->has('clave'))
			<span class="badge badge-danger">{{ $errors->first('clave') }}</span>
		@endif
	</div>

	<div class="form-group col">
		{{ Form::label('nombre') }}
		{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre']) }}
		@if ($errors->has('nombre'))
			<span class="badge badge-danger">{{ $errors->first('nombre') }}</span>
		@endif
	</div>
</div>