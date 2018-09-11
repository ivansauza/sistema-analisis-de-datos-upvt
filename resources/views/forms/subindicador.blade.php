<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('nombre') }}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre']) }}
			@if ($errors->has('nombre'))
				<span class="badge badge-danger">{{ $errors->first('nombre') }}</span>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('valor_meta', 'Valor meta') }}
			<div class="input-group mb-3">
				{{ Form::number('valor_meta', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el valor meta', 'min' => '0', 'max' => '100']) }}
				<div class="input-group-append">
					<span class="input-group-text">%</span>
				</div>
			</div>
			@if ($errors->has('valor_meta'))
				<span class="badge badge-danger">{{ $errors->first('valor_meta') }}</span>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('indicador_id', 'Indicador') }}
			{{ Form::select('indicador_id', $indicadores, request()->input('indicador_id'), ['class' => 'form-control']) }}
			@if ($errors->has('indicador_id'))
				<span class="badge badge-danger">{{ $errors->first('indicador_id') }}</span>
			@endif
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('nota') }}
			{{ Form::textarea('nota', null, ['class' => 'form-control']) }}
			@if ($errors->has('nota'))
				<span class="badge badge-danger">{{ $errors->first('nota') }}</span>
			@endif
		</div>
	</div>
</div>

<hr />

<div class="container">
	<div class="row">
		<div class="col mb-5 mt-4">
			<div class="btn-toolbar float-right">
				<div class="btn-group mr-2">
					<a href="" class="btn btn-outline-secondary btn-sm">Agregar Pregunta</a>
					<a href="" class="btn btn-outline-secondary btn-sm">Agregar Número</a>
					<a href="" class="btn btn-outline-secondary btn-sm">Agregar Operacion</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="form-row">
	<div class="form-group col">
		{{ Form::select('pregunta_id[]', ['a' => 'Número de alumnos que fueron evaluados de Estancias y Estadía', 'b' => 'Número total de alumnos que cumplieron con el 100% de asesorías'], null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col">
		{{ Form::select('operacion[]', ['division' => '/', 'multiplicacion' => '*', 'suma' => '+', 'resta' => '-', 'raiz' => '√'], null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col">
		{{ Form::select('pregunta_id[]', ['a' => 'Número de alumnos que fueron evaluados de Estancias y Estadía', 'b' => 'Número total de alumnos que cumplieron con el 100% de asesorías'], null, ['class' => 'form-control']) }}
	</div> 

	<div class="form-group col">
		{{ Form::select('operacion[]', ['division' => '/', 'multiplicacion' => '*', 'suma' => '+', 'resta' => '-', 'raiz' => '√'], null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col">
		{{ Form::text('numero[]', null, ['class' => 'form-control']) }}
	</div>	
</div>