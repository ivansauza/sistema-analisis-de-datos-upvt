@extends('layouts.admin')

@section('header')
	<h1 class="h3">Análisis <small>Crear</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('analisis.index') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
		</div>
	</div>
@endsection

@section('content')

	{{ Form::open(['route' => 'analisis.create', 'method' => 'GET']) }}
		<div class="form-group">
			{{ Form::label('periodo_id', 'Periodo') }}
			{{ Form::select('periodo_id', $periodos, null, ['class' => 'form-control', 'required', 'placeholder' => 'Selecciona le periodo ...']) }}
			<small class="form-text text-muted">Selecciona el Perido del cual quiere realizar el análisis de datos.</small>
		</div>

		{{ Form::submit('Siguiente', ['class' => 'btn btn-block btn-primary mt-5']) }}

	{{ Form::close() }}
	
@endsection
