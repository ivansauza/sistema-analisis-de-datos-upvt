<div class="row">
	<div class="col-md col-xs-12">
		<div class="form-group">
			{{ Form::label('nombre') }}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre']) }}
			@if ($errors->has('nombre'))
				<span class="badge badge-danger">{{ $errors->first('nombre') }}</span>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('proceso_id', 'Proceso') }}
			{{ Form::select('proceso_id', $procesos, request()->input('proceso_id'), ['class' => 'form-control', 'placeholder' => 'Seleccionar ...']) }}
			@if ($errors->has('proceso_id'))
				<span class="badge badge-danger">{{ $errors->first('proceso_id') }}</span>
			@endif
		</div>
	</div>
	<div class="col-md col-xs-12">
		<div class="form-group">
			{{ Form::label('nota') }}
			{{ Form::textarea('nota', null, ['class' => 'form-control']) }}
			@if ($errors->has('nota'))
				<span class="badge badge-danger">{{ $errors->first('nota') }}</span>
			@endif
		</div>
	</div>
</div>