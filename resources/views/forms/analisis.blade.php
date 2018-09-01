<div class="form-group">
	{{ Form::label('pregunta[]', 'Número de alumnos que fueron evaluados en el de Estancias y Estadía') }}
	{{ Form::text('pregunta[]', null, ['class' => 'form-control', 'required']) }}
	<small class="form-text text-muted">Periodo establecido. (40 días como máximo)</small>
</div>

<div class="form-group">
	{{ Form::label('pregunta[]', ' Total de alumnos con carta de terminación de Estancia/Estadía.') }}
	{{ Form::text('pregunta[]', null, ['class' => 'form-control', 'required']) }}
</div>