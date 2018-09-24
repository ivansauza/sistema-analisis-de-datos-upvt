@extends('layouts.home')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
			    <h1 class="text-center h2 text-muted mt-5">404 -  La página que esta buscando ya no está disponible.</h1>
				<br />
				<a href="{{ route('home') }}" class="text-center btn btn-sm btn-block btn-primary">Ir al Inicio</a>
			</div>		
		</div>
	</div>
@endsection