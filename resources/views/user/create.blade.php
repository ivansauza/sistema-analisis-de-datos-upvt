@extends('layouts.admin')

@section('header')
	<h1 class="h3">Usuario <small>Crear</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('users.index') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
		</div>
	</div>
@endsection

@section('content')

	{{ Form::open(['route' => 'users.store']) }}

		@include('forms.user')

		{{ Form::submit('Almacenar', ['class' => 'btn btn-block btn-outline-primary mt-5']) }}

	{{ Form::close() }}
	
@endsection
