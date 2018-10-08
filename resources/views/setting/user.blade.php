@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-users-cog"></i> Configuración <small>Usuario</small></h1>
@endsection

@section('content')

	@include('fragments.alert')
	@include('fragments.errors')

	<div class="card">
		<div class="card-body">
			{{ Form::model($user, ['route' => ['settings.user.update']]) }}

				@include('forms.setting.user')

				{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-warning mt-5']) }}

			{{ Form::close() }}
		</div>
	</div>
	
@endsection
