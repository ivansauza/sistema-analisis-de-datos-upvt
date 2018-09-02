<div class="form-row">
	<div class="form-group col">
		{{ Form::label('periodo') }}
		{{ Form::select('periodo', ['enero_abril' => 'Enero-Abril', 'mayo_agosto' => 'Mayo-Agosto', 'septiembre_diciembre' => 'Septiembre-Diciembre'],null, ['class' => 'form-control', 'required' => true]) }}
	</div>

	<div class="form-group col-6">
		{{ Form::label('anio', 'Año') }}
		{{ Form::number('anio', null, ['class' => 'form-control', 'min' => 2007, 'max' => date("Y"), 'required' => true]) }}
	</div>
</div>

<div class="form-group mt-3">
	<div class="custom-control custom-checkbox">
	 	{{ Form::checkbox('estado', 'null', false, ['class' => 'custom-control-input', 'id' => 'estado']) }}
	 	{{ Form::label('estado', 'Abrir/Cerrar periodo, el usuario podra interactuar con este periodo.', ['class' => 'custom-control-label']) }}
	</div>
</div>

<hr />

<div class="form-group">
	<div class="custom-control custom-checkbox">
	 	{{ Form::checkbox('actual', 'null', false, ['class' => 'custom-control-input', 'id' => 'actual']) }}
	 	{{ Form::label('actual', 'Marcar este periodo como actual (Si ya hay otro periodo como actual se reemplazara por este).', ['class' => 'custom-control-label']) }}
	</div>
</div>