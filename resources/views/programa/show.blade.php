@extends('layouts.admin')

@section('header')
	<h1 class="h3">Programa Educativo <small>Mostrar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('programas.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
	<div class="card card-default">
		<table class="table table-striped table-hover">
			<tbody>
				<tr>
					<th scope="row" class="text-right">ID</th>
					<td>{{ $programa->id }}</td>
				</tr>
				<tr>
					<th scope="row" class="text-right">Clave</th>
					<td>{{ $programa->clave }}</td>
				</tr>
				<tr>
					<th scope="row" class="text-right">Nombre</th>
					<td>{{ $programa->nombre }}</td>
				</tr>
				<tr>
					<th scope="row" class="text-right">Fecha de registro</th>
					<td><small>{{ $programa->created_at }}</small></td>
				</tr>
				<tr>
					<th scope="row" class="text-right">Fecha de edición</th>
					<td><small>{{ $programa->updated_at }}</small></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
