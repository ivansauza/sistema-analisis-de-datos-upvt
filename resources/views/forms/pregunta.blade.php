<div class="form-group mb-4">
	{{ Form::label('nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingresa la pregunta']) }}
	@if ($errors->has('nombre'))
		<span class="badge badge-danger">{{ $errors->first('nombre') }}</span>
	@endif
</div>

<div class="row">
	<div class="col-md-7 col-xs-12">
		<div class="form-group">
			{{ Form::label('role_id', 'Rol') }}
			{{ Form::select('role_id', $roles, null, ['class' => 'form-control']) }}
			<small class="form-text text-muted">Seleccione el Rol de Usuario que podrá llenar la información a esta pregunta.</small>
			@if ($errors->has('role_id'))
				<span class="badge badge-danger">{{ $errors->first('role_id') }}</span>
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

<hr class="mt-4" />

<div class="form-group">
	<div class="custom-control custom-checkbox">
	 	{{ Form::hidden('desactivar', 0) }}
	 	{{ Form::checkbox('desactivar', 1, null, ['class' => 'custom-control-input', 'id' => 'desactivar']) }}
	 	{{ Form::label('desactivar', 'Desactivar la pregunta, los usuarios ya no podrán ver esta pregunta.', ['class' => 'custom-control-label']) }}
	</div>
	@if ($errors->has('desactivar'))
		<span class="badge badge-danger">{{ $errors->first('desactivar') }}</span>
	@endif
</div>