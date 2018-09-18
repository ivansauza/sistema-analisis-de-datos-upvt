@extends('layouts.admin')

@section('header')
	<h1 class="h3">Encuesta <small>Crear</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('encuestas.index') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
		</div>
	</div>
@endsection

@section('content')

	<div class="card">
		<div class="card-header">
			Creando análisis de datos del usuario <b>{{ $user->full_name_and_role }}</b> del periodo <i>{{ $periodo->full_clave }}</i>
		</div>

		{{ Form::open(['route' => 'encuestas.store']) }}

			@include('forms.encuesta.create')

			<div class="card-footer">
				{{ Form::submit('Almacenar', ['class' => 'btn btn-block btn-primary']) }}
			</div>

		{{ Form::close() }}

	</div>

@endsection
