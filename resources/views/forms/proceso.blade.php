<div class="form-group">
	{{ Form::label('nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre']) }}
</div>

<div class="form-group">
	{{ Form::label('nota') }}
	{{ Form::textarea('nota', null, ['class' => 'form-control']) }}
</div>