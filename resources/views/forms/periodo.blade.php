<div class="form-row">
	<div class="form-group col">
		{{ Form::label('clave') }}
		{{ Form::select('clave', ['enero-abril' => 'Enero-Abril', 'mayo-agosto' => 'Mayo-Agosto', 'septiembre-diciembre' => 'Septiembre-Diciembre'],null, ['class' => 'form-control']) }}
		@if ($errors->has('clave'))
			<span class="badge badge-danger">{{ $errors->first('clave') }}</span>
		@endif
	</div>

	<div class="form-group col-6">
		{{ Form::label('anio', 'Año') }}
		{{ Form::number('anio', null, ['class' => 'form-control']) }}
		@if ($errors->has('anio'))
			<span class="badge badge-danger">{{ $errors->first('anio') }}</span>
		@endif
	</div>
</div>

<div class="form-group mt-3">
	<div class="custom-control custom-checkbox">
		{{ Form::hidden('estado', 0) }}
	 	{{ Form::checkbox('estado', 1, null, ['class' => 'custom-control-input', 'id' => 'estado']) }}
	 	{{ Form::label('estado', 'Abrir periodo, el usuario podra interactuar con este periodo.', ['class' => 'custom-control-label']) }}
		@if ($errors->has('estado'))
			<span class="badge badge-danger">{{ $errors->first('estado') }}</span>
		@endif
	</div>
</div>

<hr />

<div class="form-group">
	<div class="custom-control custom-checkbox">
	 	{{ Form::hidden('actual', 0) }}
	 	{{ Form::checkbox('actual', 1, null, ['class' => 'custom-control-input', 'id' => 'actual']) }}
	 	{{ Form::label('actual', 'Marcar este periodo como actual (Si ya hay otro periodo como actual se reemplazara por este).', ['class' => 'custom-control-label']) }}
		@if ($errors->has('actual'))
			<span class="badge badge-danger">{{ $errors->first('actual') }}</span>
		@endif
	</div>
</div>