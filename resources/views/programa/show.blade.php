@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-user-graduate"></i> Programa Educativo <small>Detalles</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('programas.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')

	<div class="card card-default">
		<table class="table">
			<tbody>
				<tr>
					<td scope="row" class="text-muted">ID</td>
					<td>{{ $programa->id }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Clave</td>
					<td>{{ $programa->clave }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Nombre</td>
					<td>{{ $programa->nombre }}</td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Creado el</td>
					<td><small>{{ $programa->created_at }}</small></td>
				</tr>
				<tr>
					<td scope="row" class="text-muted">Actualizado el</td>
					<td><small>{{ $programa->updated_at }}</small></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
