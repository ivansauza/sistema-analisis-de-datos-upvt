<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('nombre') }}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre']) }}
		</div>

		<div class="form-group">
			{{ Form::label('proceso_id', 'Proceso') }}
			{{ Form::select('proceso_id', $procesos, request()->input('proceso_id'), ['class' => 'form-control', 'placeholder' => 'Seleccionar ...']) }}
			<small class="form-text text-muted">Puede seleccionar varios items presionando la tecla "control" + "click".</small>
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('nota') }}
			{{ Form::textarea('nota', null, ['class' => 'form-control']) }}
		</div>
	</div>
</div>