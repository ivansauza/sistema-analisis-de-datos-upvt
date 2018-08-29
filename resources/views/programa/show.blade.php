@extends('layouts.admin')

@section('header')
	<h1 class="h3">Programas Educativos <small>Mostrar</small></h1>
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
					<th scope="row">#</th>
					<td>1</td>
				</tr>
				<tr>
					<th scope="row">Clave</th>
					<td>INI</td>
				</tr>
				<tr>
					<th scope="row">Nombre</th>
					<td>Ingeniería en Informática</td>
				</tr>
				<tr>
					<th scope="row">Fecha de registro</th>
					<td><small>10 de Agosto del 2018 00:00:00</small></td>
				</tr>
				<tr>
					<th scope="row">Fecha de edición</th>
					<td><small>10 de Agosto del 2018 00:00:00</small></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
