@extends('layouts.admin')

@section('header')
	<h1 class="h3">Periodo <small>Detalles</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('periodos.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
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
							<a href="{{ route('periodos.edit', $periodo->id) }}" class="btn text-secondary" data-toggle="tooltip" data-placement="top" title="Editar">
								<i class="fas fa-pencil-alt"></i>
							</a>

							{{ Form::open(['route' => ['periodos.destroy', $periodo->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
								<button type="submit" class="btn text-danger btn-transparent" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
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
					<td>{{ $periodo->id }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Clave</td>
					<td>{{ $periodo->full_clave }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Actual</td>
					<td>{{ $periodo->actual ? 'SI' : 'NO' }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Estado</td>
					<td>{{ $periodo->estado ? 'Abierto' : 'Cerrado' }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Programa Educativo</td>
						<td>
							{{ $periodo->programa->nombre }} 
							<a href="{{ route('programas.show', $periodo->programa->id) }}">(+)</a>
						</td>
					</tr>
				<tr>
					<td scope="row" class="text-muted">Fecha de registro</td>
					<td><small>{{ $periodo->created_at }}</small></td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Fecha de edición</td>
					<td><small>{{ $periodo->updated_at }}</small></td>
				</tr>
			</tbody>
		</table>
	</div>

@endsection
