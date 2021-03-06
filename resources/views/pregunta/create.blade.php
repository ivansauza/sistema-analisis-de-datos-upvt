@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="far fa-question-circle"></i> Pregunta <small>Crear</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('preguntas.index') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
		</div>
	</div>
@endsection

@section('content')

	@include('fragments.errors')
	
	<div class="card">
		<div class="card-body">
			{{ Form::open(['route' => 'preguntas.store']) }}

				@include('forms.pregunta')

				{{ Form::submit('Almacenar', ['class' => 'btn btn-block btn-primary mt-5']) }}

			{{ Form::close() }}
		</div>
	</div>
	
@endsection
