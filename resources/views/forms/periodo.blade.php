<div class="form-row">
	<div class="form-group col-md col-xs-12">
		{{ Form::label('clave') }}
		{{ Form::select('clave', ['enero-abril' => 'Enero-Abril', 'mayo-agosto' => 'Mayo-Agosto', 'septiembre-diciembre' => 'Septiembre-Diciembre'],null, ['class' => 'form-control']) }}
		@if ($errors->has('clave'))
			<span class="badge badge-danger">{{ $errors->first('clave') }}</span>
		@endif
	</div>

	<div class="form-group col-md-6 col-xs-12">
		{{ Form::label('anio', 'Año') }}
		{{ Form::number('anio', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el año']) }}
		@if ($errors->has('anio'))
			<span class="badge badge-danger">{{ $errors->first('anio') }}</span>
		@endif
	</div>
</div>

<div class="form-group mt-3">
	<div class="custom-control custom-checkbox">
		{{ Form::hidden('estado', 0) }}
	 	{{ Form::checkbox('estado', 1, null, ['class' => 'custom-control-input', 'id' => 'estado']) }}
	 	{{ Form::label('estado', 'Cerrar periodo, el usuario ya no podra interactuar con este periodo.', ['class' => 'custom-control-label']) }}
		@if ($errors->has('estado'))
			<span class="badge badge-danger">{{ $errors->first('estado') }}</span>
		@endif
	</div>
</div>