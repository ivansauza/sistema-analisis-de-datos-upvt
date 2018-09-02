<div class="row">
	<div class="col-md-3 text-center text-lg-left">
		<img class="rounded-circle img-fluid" src="https://www.gravatar.com/avatar/de85d9bc74935247ebceed66c9620050?d=mm&amp;s=128" alt="User profile picture">
	</div>
	<div class="col-md-9 mt-3 mt-lg-0 text-center text-lg-left">
		<h2 class="font-weight-light">Ivan Sauza <small>Director</small></h2>
		<p class="text-muted">sauuza@gmail.com</p>
	</div>
</div>

<table class="table">
	<tbody>
		<tr>
			<td class="text-right">Fecha de registro: </td>
			<td>Agosto 31, 2018 00:16</td>
		</tr>
		<tr>
			<td class="text-right">Fecha de edición: </td>
			<td>Agosto 31, 2018 00:16</td>
		</tr>
	</tbody>
</table>


<div class="row">
	<div class="col-xs-12 col-md">
		<div class="form-group">
			{{ Form::label('nombre') }}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre']) }}
		</div>
		<div class="form-group">
			{{ Form::label('apellidos') }}
			{{ Form::text('apellidos', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa los apellidos']) }}
		</div>
	</div>
	<div class="col-xs-12 col-md">
		<div class="form-group">
			{{ Form::label('email', 'Correo Electrónico') }}
			{{ Form::text('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el correo electrónico']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Contraseña nueva') }}
			{{ Form::text('password', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la contaseña nueva']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Confirmar contraseña nueva') }}
			{{ Form::text('password', null, ['class' => 'form-control', 'required', 'placeholder' => 'Confirma la contraseña nueva']) }}
		</div>

		<hr />

		<div class="form-group">
			{{ Form::label('current_password', 'Contraseña actual') }}
			{{ Form::text('current_password', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa la contraseña actual']) }}
		</div>
	</div>
</div>