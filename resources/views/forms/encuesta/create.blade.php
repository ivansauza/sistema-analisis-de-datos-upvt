{{ Form::hidden('user_id', $user->id) }}
{{ Form::hidden('periodo_id', $periodo->id) }}

<table class="table table-hover">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Pregunta</th>
			<th>Valor</th>
		</tr>
	</thead>

	<tbody>
		{{ Form::hidden('periodo_id', $periodo->id) }}
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
					{{ Form::number('preguntas_value[]', null, ['class' => 'form-control', 'min' => 0]) }}
					<small class="form-text text-muted">
						{{ $pregunta->nota }}
					</small>
				</td>
			</tr>
		@endforeach
	</tbody>
	
</table>

<div class="card-body">
    <div class="custom-control custom-checkbox">
        {{ Form::hidden('finalizado', 0) }}
        {{ Form::checkbox('finalizado', 1, null, ['class' => 'custom-control-input', 'id' => 'finalizado']) }}
        {{ Form::label('finalizado', 'Finalizado', ['class' => 'custom-control-label']) }}
        @if ($errors->has('finalizado'))
            <span class="badge badge-danger">{{ $errors->first('finalizado') }}</span>
        @endif
    </div>
</div>