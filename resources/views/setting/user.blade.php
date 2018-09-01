@extends('layouts.admin')

@section('header')
	<h1 class="h3">Configuración <small>Usuario</small></h1>
@endsection

@section('content')

	{{ Form::model(null, ['route' => ['settings.user.update']]) }}

		@include('forms.setting.user')

		{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-outline-warning mt-5']) }}

	{{ Form::close() }}
	
@endsection
