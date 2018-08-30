@extends('layouts.admin')

@section('header')
	<h1 class="h3">Proceso <small>Editar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('procesos.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')

	{{ Form::model(null, ['route' => ['procesos.update', 0]]) }}

		@include('forms.proceso')

		{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-outline-warning mt-5']) }}

	{{ Form::close() }}
	
@endsection
