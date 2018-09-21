@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-users"></i> Usuario <small>Crear</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('users.index') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
		</div>
	</div>
@endsection

@section('content')

	@include('fragments.errors')

	{{ Form::open(['route' => 'users.store']) }}

		@include('forms.user')

		{{ Form::submit('Almacenar', ['class' => 'btn btn-block btn-primary mt-5']) }}

	{{ Form::close() }}
	
@endsection
