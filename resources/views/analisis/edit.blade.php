@extends('layouts.admin')

@section('header')
	<h1 class="h3">Análisis <small>Editar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('analisis.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
	
	@include('fragments.alert')

	<div class="card">
		{{ Form::model($analisis, ['route' => ['analisis.update', $analisis->id], 'method' => 'PUT']) }}

			@include('forms.analisis.edit')

			<div class="card-footer">
				{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-warning']) }}
			</div>

		{{ Form::close() }}
	</div>
	
@endsection
