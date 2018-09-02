<div class="form-group mb-4">
	{{ Form::label('nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la pregunta']) }}
</div>

<div class="row">
	<div class="col-7">
		<div class="form-group">
			{{ Form::label('rol_id', 'Rol') }}
			{{ Form::select('rol_id', ['a' => 'Maestro', 'b' => 'Secretaria', 'c' => 'Director'], null, ['class' => 'form-control', 'required']) }}
			<small class="form-text text-muted">Seleccione el Rol de Usuario que podrá llenar la información a esta pregunta.</small>
		</div>

		<div class="form-group">
			{{ Form::label('programa_id', 'Programa Educativo') }}
			{{ Form::select('programa_id', ['a' => 'Ingeniería en Informática', 'b' => 'Maestría en Administración'], null, ['class' => 'form-control', 'multiple' => true, 'required']) }}
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

<hr class="mt-4" />

<div class="custom-control custom-checkbox">
 	{{ Form::checkbox('desactivado', 'null', false, ['class' => 'custom-control-input', 'id' => 'desactivado']) }}
 	{{ Form::label('desactivado', 'Desactivar la pregunta, los usuarios ya no podrán ver esta pregunta.', ['class' => 'custom-control-label']) }}
</div>