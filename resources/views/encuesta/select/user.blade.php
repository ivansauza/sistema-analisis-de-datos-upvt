@extends('layouts.admin')

@section('header')
	<h1 class="h3">Encuesta <small>Crear <i>Seleccionar Usuario</i></small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('encuestas.index') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
		</div>
	</div>
@endsection

@section('content')

    {{ Form::open(['route' => 'encuestas.select.periodo', 'method' => 'GET']) }}
        <div class="form-group">
            {{ Form::label('user_id', 'Usuario') }}
            {{ Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar ...', 'required']) }}
        </div>

        <button type="submit" class="btn btn-primary btn-block">Siguiente</button>
    {{ Form::close() }}
	
@endsection
