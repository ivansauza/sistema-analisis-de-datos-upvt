@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-users"></i> Usuario <small>Editar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('users.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')

	@include('fragments.alert')
	@include('fragments.errors')

	{{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) }}

		@include('forms.user')

		{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-warning mt-5']) }}

	{{ Form::close() }}

	
@endsection
