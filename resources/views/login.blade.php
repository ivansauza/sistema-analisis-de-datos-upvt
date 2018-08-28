<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    </head>

    <body>
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

        <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    </body>
</html>
