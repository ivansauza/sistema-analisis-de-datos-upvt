<div class="form-group">
	{{ Form::label('nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre']) }}
	@if ($errors->has('nombre'))
		<span class="badge badge-danger">{{ $errors->first('nombre') }}</span>
	@endif
</div>

<div class="form-group">
	{{ Form::label('nota') }}
	{{ Form::textarea('nota', null, ['class' => 'form-control']) }}
	@if ($errors->has('nota'))
		<span class="badge badge-danger">{{ $errors->first('nota') }}</span>
	@endif
</div>