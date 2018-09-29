@extends('layouts.home')

@section('style')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif !important;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
			    <h1 class="text-center h2 text-muted mt-5">404 -  La página que esta buscando no está disponible o no existe.</h1>
				<br />
				<a href="{{ route('home') }}" class="text-center btn btn-sm btn-block btn-primary">Ir al Inicio</a>
			</div>		
		</div>
	</div>
@endsection