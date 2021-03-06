<div class="card-header">
	<p>Análisis de datos para el periodo <i>{{ $analisis->periodo->full_clave }}</i></p>
	<p class="text-right"><b>Nota:</b> <small>Si la pregunta no aplica a su rol dejar en blanco.</small></p>
</div>

<table class="table table-hover">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Pregunta</th>
			<th>Valor</th>
		</tr>
	</thead>

	<tbody>
		@foreach($analisis->preguntas as $pregunta)
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
		 	{{ Form::label('finalizado', 'Finalizar análisis de datos (Ya no podrá modificar los datos).', ['class' => 'custom-control-label']) }}
			@if ($errors->has('finalizado'))
				<span class="badge badge-danger">{{ $errors->first('finalizado') }}</span>
			@endif
		</div>
	</div>
</div>