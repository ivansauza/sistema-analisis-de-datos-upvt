@extends('layouts.admin')

@section('header')
	<h1 class="h3">Subindicador <small>Editar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('procesos.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')

	@include('fragments.alert')

	<div class="card">
		<div class="card-body">
			{{ Form::model($subindicador, ['route' => ['subindicadores.update', $subindicador->id], 'method' => 'PUT']) }}

				@include('forms.subindicador')

				{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-warning mt-5']) }}

			{{ Form::close() }}
		</div>
	</div>
	
@endsection
