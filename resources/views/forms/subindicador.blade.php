<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('nombre') }}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre']) }}
		</div>

		<div class="form-group">
			{{ Form::label('valor_meta', 'Valor meta') }}
			<div class="input-group mb-3">
				{{ Form::number('valor_meta', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el valor meta', 'min' => '1', 'max' => '100']) }}
				<div class="input-group-append">
					<span class="input-group-text">%</span>
				</div>
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('indicador_id', 'Indicador') }}
			{{ Form::select('indicador_id', ['a' => 'A', 'b' => 'B'], null, ['class' => 'form-control']) }}
			<small class="form-text text-muted">Puede seleccionar varios items presionando la tecla "control" + "click".</small>
		</div>

		<div class="form-group">
			{{ Form::label('programa_id', 'Programas Educativos') }}
			{{ Form::select('programa_id', ['a' => 'Ingenieria en Informatica', 'b' => 'Maestria en Administracion'], null, ['class' => 'form-control', 'multiple' => true]) }}
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