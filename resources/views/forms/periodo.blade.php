<div class="form-row">
	<div class="form-group col">
		{{ Form::label('periodo') }}
		{{ Form::select('periodo', ['a' => 'Enero-Abril', 'b' => 'Mayo-Agosto', 'c' => 'Septiembre-Diciembre'],null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-6">
		{{ Form::label('anio', 'Año') }}
		{{ Form::number('anio', null, ['class' => 'form-control', 'min' => 2007, 'max' => date("Y")]) }}
	</div>
</div>

<hr />

<div class="custom-control custom-checkbox">
 	{{ Form::checkbox('estado', 'null', false, ['class' => 'custom-control-input', 'id' => 'estado']) }}
 	{{ Form::label('estado', 'Activar el periodo, el usuario podra ver los datos a este periodo.', ['class' => 'custom-control-label']) }}
</div>