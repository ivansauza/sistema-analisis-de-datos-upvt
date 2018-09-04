@extends('layouts.admin')

@section('header')
	<h1 class="h3">Programa Educativo <small>Editar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('programas.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
	@include('fragments.alert')
	
	<div class="card">
		<div class="card-body">
			{{ Form::model($programa, ['route' => ['programas.update', $programa], 'method' => 'PUT']) }}

				@include('forms.programa')

				{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-warning mt-4']) }}

			{{ Form::close() }}
		</div>
	</div>
	
@endsection
