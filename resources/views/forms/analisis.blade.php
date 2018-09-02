<div class="form-group">
	{{ Form::label('periodo_id', 'Periodo') }}
	{{ Form::select('periodo_id', ['a' => 'Enero-Abril 2018', 'b' => 'Mayo-Agosto 2018'], null, ['class' => 'form-control', 'required']) }}
	<small class="form-text text-muted">Puede seleccionar varios items presionando la tecla "control" + "click".</small>
</div>

<div class="form-group">
	{{ Form::label('pregunta[]', 'Número de alumnos que fueron evaluados en el de Estancias y Estadía') }}
	{{ Form::text('pregunta[]', null, ['class' => 'form-control']) }}
	<small class="form-text text-muted">Periodo establecido. (40 días como máximo)</small>
</div>