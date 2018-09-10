<!--<div class="form-group">
	{{ Form::label('pregunta[]', 'Número de alumnos que fueron evaluados en el de Estancias y Estadía') }}
	{{ Form::text('pregunta[]', null, ['class' => 'form-control']) }}
	<small class="form-text text-muted">Periodo establecido. (40 días como máximo)</small>
</div>-->

<div class="card-header">
	Análisis de datos para el periodo <i>{{ $analisis->periodo->full_clave }}</i>
</div>

<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Pregunta</th>
			<th>Valor</th>
		</tr>
	</thead>

	<tbody>
		{{ Form::hidden('periodo_id', $analisis->periodo->id) }}
		@foreach($preguntas as $pregunta)
			<tr>
				<th>{{ $loop->index + 1 }}</th>
				<td>
					{{ Form::label('pregunta', $pregunta->nombre) }}

					@if ($errors->has('clave'))
						<span class="badge badge-danger">{{ $errors->first('clave') }}</span>
					@endif
				</td>
				<td style="width: 30%;">
					{{ Form::hidden('preguntas_id[]', $pregunta->id) }}
					{{ Form::number('preguntas_value[]', $pregunta->pivot->valor, ['class' => 'form-control']) }}
					<small class="form-text text-muted">
						{{ $pregunta->nota }}
					</small>
				</td>
			</tr>
		@endforeach
	</tbody>
	
</table>

<div class="card-body">
	<div class="form-group">
		<div class="custom-control custom-checkbox">
		 	{{ Form::hidden('finalizado', 0) }}
		 	{{ Form::checkbox('finalizado', 1, null, ['class' => 'custom-control-input', 'id' => 'finalizado']) }}
		 	{{ Form::label('finalizado', 'Finalizar análisis de datos (Ya no podra modificar los datos).', ['class' => 'custom-control-label']) }}
			@if ($errors->has('finalizado'))
				<span class="badge badge-danger">{{ $errors->first('finalizado') }}</span>
			@endif
		</div>
	</div>
</div>