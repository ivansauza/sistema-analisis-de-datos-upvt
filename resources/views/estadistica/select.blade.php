@extends('layouts.admin')

@section('header')
	<h1 class="h3">Estadísticas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">

	</div>
@endsection

@section('content')

	<div class="card">
		<div class="card-body">
			{{ Form::open(['route' => 'estadisticas.show', 'method' => 'GET']) }}
				<div class="form-group">
					{{ Form::label('programa_id', 'Programa Educativo') }}
					{{ Form::select('programa_id', ['a' => 'Ingeniería en Informática', 'b' => 'Maestría en Administración'], null, ['class' => 'form-control', 'required']) }}
					<small class="form-text text-muted">Selecciona el Programa Educativo del cual quiere revisar las estadísticas.</small>
				</div>

				{{ Form::submit('Siguiente', ['class' => 'btn btn-block btn-primary mt-5']) }}

			{{ Form::close() }}
		</div>	
	</div>
	
@endsection
