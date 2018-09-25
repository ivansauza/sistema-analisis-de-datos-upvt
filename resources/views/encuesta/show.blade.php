@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-align-left"></i> Encuesta <small>Detalles</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('encuestas.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
    <div class="card card-default">
		<div class="card-header">
			Encuesta
			@if($encuesta->periodo->estado == 0 AND $encuesta->finalizado == 0)
				<div class="float-right">
					<a href="{{ route('encuestas.edit', $encuesta->id) }}" class="btn text-secondary" data-toggle="tooltip" data-placement="top" title="Editar">
						<i class="fas fa-pencil-alt"></i>
					</a>
					{{ Form::open(['route' => ['encuestas.destroy', $encuesta->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
						<button type="submit" class="btn text-danger btn-transparent" onclick="destroyItem(event)" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
					{{ Form::close() }}
				</div>
			@endif
		</div>
		<table class="table">
			<tbody>
				<tr>
					<td scope="row" class="text-muted">ID</td>
					<td>{{ $encuesta->id }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Finalizado</td>
					<td>
						@if($encuesta->finalizado)
							Si <small><i>Si requiere hacer cambios notifique al director de carrera.</i></small>
						@else
							No
						@endif
					</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Nota</td>
					<td><small>{{ $encuesta->nota }}</small></td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Usuario</td>
					<td>
						{{ $encuesta->user->full_name_and_role }} 
						<a href="{{ route('users.show', $encuesta->user->id) }}">(+)</a>
					</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Periodo</td>
					<td>
						{{ $encuesta->periodo->full_clave }}
						<a href="{{ route('periodos.show', $encuesta->periodo->id) }}">(+)</a>
					</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Creado en</td>
					<td><small>{{ $encuesta->created_at }}</small></td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Actualizado en</td>
					<td><small>{{ $encuesta->updated_at }}</small></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="card mt-3">
		<div class="card-header">
			Preguntas
		</div>
		<div class="card-body p-0">
		<table class="table">
			<tbody>
				@foreach($encuesta->preguntas as $pregunta)
					<tr>
						<td scope="row" class="text-muted">
							{{ $pregunta->nombre }}
							<a href="{{ route('preguntas.show', $pregunta->id) }}">(+)</a>
						</td>
						<td>{{ $pregunta->pivot->valor }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	</div>
@endsection
