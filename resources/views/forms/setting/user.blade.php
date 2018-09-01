<div class="row">
	<div class="col">
		<div class="card align-self-middle d-flex w-100 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3 text-center text-lg-left">
						<img class="rounded-circle img-fluid" src="https://www.gravatar.com/avatar/de85d9bc74935247ebceed66c9620050?d=mm&amp;s=128" alt="User profile picture">
					</div>
					<div class="col-md-9 mt-3 mt-lg-0 text-center text-lg-left">
						<h1 class="font-weight-light">Ivan Sauza</h1>
						<p class="text-muted">sauuza@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('nombre') }}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el nombre']) }}
		</div>

		<div class="form-group">
			{{ Form::label('apellidos') }}
			{{ Form::text('apellidos', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa los apellidos']) }}
		</div>
	</div>
	<div class="col">
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