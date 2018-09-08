@extends('layouts.admin')

@section('header')
	<h1 class="h3">Configuración <small>Usuario</small></h1>
@endsection

@section('content')

	@include('fragments.alert')

	<div class="card">
		<div class="card-body">
			{{ Form::model($user, ['route' => ['settings.user.update']]) }}

				@include('forms.setting.user')

				{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-warning mt-5']) }}

			{{ Form::close() }}
		</div>
	</div>
	
@endsection
