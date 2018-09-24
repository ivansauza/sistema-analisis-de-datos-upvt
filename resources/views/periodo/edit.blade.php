@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-calendar-alt"></i> Periodo <small>Editar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('periodos.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
	
	@include('fragments.alert')
	@include('fragments.errors')

	<div class="card">
		<div class="card-body">
			{{ Form::model($periodo, ['route' => ['periodos.update', $periodo->id], 'method' => 'PUT']) }}

				@include('forms.periodo')

				{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-warning mt-5']) }}

			{{ Form::close() }}
		</div>
	</div>
	
@endsection
