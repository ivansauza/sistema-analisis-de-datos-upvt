@extends('layouts.admin')

@section('header')
	<h1 class="h3">Preguntas <small>Mostrar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('periodos.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')

	{{ Form::open(['route' => 'periodos.index', 'method' => 'GET']) }}
		{{ Form::hidden('mostrar', 'programa') }}
		<div class="form-group">
			{{ Form::label('programa_id', 'Programa Educativo') }}
			{{ Form::select('programa_id', $programas, null, ['class' => 'form-control', 'required', 'placeholder' => 'Selecciona un programa educativo ...']) }}
			<small class="form-text text-muted">Selecciona el programa educativo del cual quiere mostrar los periodos.</small>
		</div>

		{{ Form::submit('Siguiente', ['class' => 'btn btn-block btn-primary mt-5']) }}

	{{ Form::close() }}
	
@endsection
