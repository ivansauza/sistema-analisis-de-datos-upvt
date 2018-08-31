<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
		<a class="navbar-brand col-sm-3 col-md-3 mr-0 d-xs-none" href="#">UPVT</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

			</ul>

			<ul class="navbar-nav px-3">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-user-circle"></i> 
						Ivan Sauza
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Configuración</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Cerrar Sesión</a>
					</div>
				</li>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-3 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link {{ ! Route::is('home') ?: 'active' }}" href="{{ route('home') }}">
								<i class="fas fa-home"></i> 
								Inicio <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ ! Route::is('programas.*') ?: 'active' }}" href="{{ route('programas.index') }}">
								<i class="fas fa-user-graduate"></i> 
								Programas Educativos
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ ! Route::is('periodos.*') ?: 'active' }}" href="{{ route('periodos.index') }}">
								<i class="fas fa-calendar-alt"></i> 
								Periodos
							</a>
						</li>

						<div class="dropdown-divider"></div>

						<li class="nav-item">
							<a class="nav-link {{ ! Route::is('preguntas.*') ?: 'active' }}" href="{{ route('preguntas.index') }}">
								<i class="far fa-question-circle"></i> 
								Preguntas
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ ! Route::is('encuestas.*') ?: 'active' }}" href="{{ route('encuestas.index') }}">
								<i class="fas fa-align-left"></i> 
								Encuestas
							</a>
						</li>

						<div class="dropdown-divider"></div>

						<li class="nav-item">
							<a class="nav-link {{ ! Route::is(['procesos.*', 'indicadores.*', 'subindicadores.*']) ?: 'active' }}" href="{{ route('procesos.index') }}">
								<i class="fas fa-tasks"></i> 
								Procesos
							</a>
						</li>
						<!--<li class="nav-item">
							<a class="nav-link" href="#">
								Indicadores
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Subindicadores
							</a>
						</li>-->
					</ul>

					<!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>Usuarios</span>
						<a class="d-flex align-items-center text-muted" href="#">
							<span data-feather="plus-circle"></span>
						</a>
					</h6>-->
					<div class="dropdown-divider"></div>

					<ul class="nav flex-column mb-2">
						<li class="nav-item">
							<a class="nav-link" href="#">
								Usuarios
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Roles
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Permisos
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Actividades
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<main role="main" class="col-md-9 ml-sm-auto px-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">

					@yield('header')
				</div>

				@yield('content')

			</main>
		</div>
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
