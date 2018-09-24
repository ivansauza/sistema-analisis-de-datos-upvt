@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-align-left"></i> Encuesta <small>Editar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('encuestas.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
	
	@include('fragments.alert')

	<div class="card">
		<div class="card-header">
			Editando encuesta del usuario <b>{{ $encuesta->user->full_name_and_role }}</b> del periodo <i>{{ $encuesta->periodo->full_clave }}</i>
		</div>

		{{ Form::model($encuesta, ['route' => ['encuestas.update', $encuesta->id], 'method' => 'PUT']) }}

			@include('forms.encuesta.edit')

			<div class="card-footer">
				{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-warning']) }}
			</div>

		{{ Form::close() }}
	</div>
	
@endsection
