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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
	@yield('css')
	@yield('style')
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
		<a class="navbar-brand d-block d-sm-none" href="{{ route('home') }}">Análisis de Datos</a>
		<a class="navbar-brand col-sm-3 col-md-3 mr-0 d-none d-sm-block" href="{{ route('home') }}">Análisis de Datos</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user-graduate"></i>
						@if( auth()->user()->programas()->where('predeterminado', '=', 1)->first() )
							{{ auth()->user()->programas()->where('predeterminado', '=', 1)->first()->nombre }}
						@else
							Seleccionar
						@endif
					</a>
					<div class="dropdown-menu dropdown-menu-left  animated flipInX" aria-labelledby="navbarDropdown">
						@foreach( auth()->user()->programas as $programa )
							@if( ! $programa->pivot->predeterminado )
								<a class="dropdown-item" href="{{ route('programas.predetermined', $programa->id) }}" data-toggle="tooltip" data-placement="right" title="Seleccionar como predeterminado">
									{{ $programa->nombre }}
								</a>
							@endif
						@endforeach
					</div>
				</li>
				<span class="d-block d-sm-none">
					@include('fragments.menu')
				</span>
			</ul>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					@include('fragments.notifications_menu')
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-user-circle"></i> 
						{{ Auth::user()->email }}
					</a>
					<div class="dropdown-menu dropdown-menu-right animated flipInX" aria-labelledby="navbarDropdown">
						<a class="dropdown-item {{ Route::is('settings.user') ? 'active' : null }}" href="{{ route('settings.user') }}">Usuario</a>
						<a class="dropdown-item {{ Route::is('actividades.show') ? 'active' : null }}" href="{{ route('actividades.show') }}">Actividades</a>
						<div class="dropdown-divider"></div>
						{{ Form::open(['route' => 'logout', 'class' => 'd-inline']) }}
							<button type="submit" class="dropdown-item">Cerrar Sesión</i></button>
						{{ Form::close() }}
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-3 d-none d-md-block shadow-sm sidebar">
				<div class="sidebar-sticky">
					<div class="card border-right-0 border-left-0 rounded-0">
						<div class="card-body">
							<img class="rounded-circle img-fluid" src="https://www.gravatar.com/avatar/de85d9bc74935247ebceed66c9620050?d=mm&amp;s=64" alt="">
							<h5>
								{{ auth()->user()->prefijo }} {{ auth()->user()->name }}
								<small>
									@if (auth()->user()->roles()->first())
										{{ auth()->user()->roles()->first()->name }}
									@endif
								</small>
							</h5>
						</div>
					</div>
					<ul class="nav flex-column mb-5">
						@include('fragments.menu')
					</ul>
				</div>
			</nav>

			<main role="main" class="col-md-9 ml-sm-auto px-4 mb-5">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">

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
	@yield('javascript')
	<script src="{{ asset('js/app.js') }}"></script>
	
	<script type="text/javascript">
		@yield('script')
	</script>
</body>
</html>
