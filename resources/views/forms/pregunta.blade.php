<div class="form-group">
	{{ Form::label('nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la pregunta']) }}
</div>

<div class="form-group">
	{{ Form::label('nota') }}
	{{ Form::textarea('nota', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('rol_id', 'Rol') }}
	{{ Form::select('rol_id', ['a' => 'Maestro', 'b' => 'Secretaria', 'c' => 'Director'], null, ['class' => 'form-control']) }}
	<small class="form-text text-muted">Seleccione el Rol de Usuario que podra llenar la información a esta pregunta.</small>
</div>

<div class="form-group">
	{{ Form::label('programa_id', 'Programa Educativo') }}
	{{ Form::select('programa_id', ['a' => 'Ingenieria en Informatica', 'b' => 'Maestria en Administracion', 'c' => 'Ingenieria Inddustrial'], null, ['class' => 'form-control', 'multiple' => true]) }}
	<small class="form-text text-muted">Puede seleccionar varios programas presionando la tecla "control" + "click".</small>
</div>

<hr class="mt-4" />

<div class="custom-control custom-checkbox">
 	{{ Form::checkbox('desactivado', 'null', false, ['class' => 'custom-control-input', 'id' => 'desactivado']) }}
 	{{ Form::label('desactivado', 'Desactivar la pregunta, los usuarios ya no podran ver esta pregunta.', ['class' => 'custom-control-label']) }}
</div>