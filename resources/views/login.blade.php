@extends('layouts.home')

@section('content')
<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12 mx-auto">
			<h4 class="text-center">Porfavor, inicia sesión</h4>

			<form method="POST" action="" class="mt-5">
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico">
				</div>

				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
				</div>

				<div class="form-group mt-5">
					<input type="submit" name="Entrar" class="btn btn-outline-primary btn-block">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
