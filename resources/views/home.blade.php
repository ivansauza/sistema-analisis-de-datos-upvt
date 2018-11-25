@extends('layouts.admin')

@section('header')
	<!--<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<button class="btn btn-sm btn-outline-secondary">Share</button>
			<button class="btn btn-sm btn-outline-secondary">Export</button>
		</div>
	</div>-->

	<div class="col">
		<h1 class="h2">Bienvenid@ <small>{{ auth()->user()->name }}</small></h1>

		<div class="alert alert-dismissible alert-warning w-100">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h4 class="alert-heading">Aviso!</h4>
			<p class="mb-0">No tienes notificaciones.</p>
		</div>
	</div>

	


@endsection


@section('content')
	@include('fragments.alert')
@endsection