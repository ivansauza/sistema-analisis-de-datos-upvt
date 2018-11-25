@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="far fa-question-circle"></i> Pregunta <small>Detalles</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('preguntas.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
	
	<div class="card card-default">
		<div class="card-header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="float-right">
							<a href="{{ route('preguntas.edit', $pregunta->id) }}" class="btn text-secondary" data-toggle="tooltip" data-placement="top" title="Editar">
								<i class="fas fa-pencil-alt"></i>
							</a>

							{{ Form::open(['route' => ['preguntas.destroy', $pregunta->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
								<button type="submit" class="btn text-danger btn-transparent" onclick="destroyItem(event)" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
		</div>
		<table class="table">
			<tbody>
				<tr>
					<td scope="row" class="text-muted">ID</td>
					<td>{{ $pregunta->id }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Nombre</td>
					<td>{{ $pregunta->nombre }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Nota</td>
					<td>
						<small>
							{{ $pregunta->nota }}
						</small>
					</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Estado</td>
					<td>
						{{ $pregunta->desactivado ? 'Desactivada' : 'Activada' }}
					</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Programa Educativo</td>
					<td>
						{{ $pregunta->programa->nombre }} 
						<a href="{{ route('programas.show', $pregunta->programa->id) }}">(+)</a>
					</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Rol | Responsable</td>
					<td>
						{{ $pregunta->role->name }}
						<small>
							{{ $pregunta->role->description }}
						</small>
					</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Creado el </td>
					<td><small>{{ $pregunta->created_at }}</small></td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Actualizado el </td>
					<td><small>{{ $pregunta->updated_at }}</small></td>
				</tr>
			</tbody>
		</table>
	</div>

@endsection
