@extends('layouts.admin')

@section('header')
	<h1 class="h3">Análisis <small>Crear</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('analisis.index') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
			<a href="{{ route('analisis.select') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')

	<div class="card">
		{{ Form::open(['route' => 'analisis.store']) }}

			@include('forms.analisis.create')

		<div class="card-footer">
			{{ Form::submit('Guardar temporalmente', ['class' => 'btn btn-block btn-primary']) }}
		</div>

		{{ Form::close() }}
	</div>
	
@endsection
