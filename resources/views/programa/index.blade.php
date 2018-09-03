@extends('layouts.admin')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('javascript')
	<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
@endsection

@section('script')
	$(document).ready( function () {
		$('table').DataTable();
	} );
@endsection

@section('header')
	<h1 class="h3">Programas Educativos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('programas.create') }}" class="btn btn-outline-primary btn-sm">Nuevo</a>
		</div>
	</div>
@endsection

@section('content')
	<div class="card card-default">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Clave</th>
					<th scope="col">Nombre</th>
					<th scope="col" class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>INI</td>
					<td>Ingeniería en Informática</td>

					<td>
						<div class="float-right">
							<a href="{{ route('programas.show', 0) }}" class="btn text-secondary btn-sm mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
								<i class="fas fa-eye"></i>
							</a>

							<a href="{{ route('programas.edit', 0) }}" class="btn text-secondary btn-sm mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
								<i class="fas fa-pencil-alt"></i>
							</a>

							{{ Form::open(['route' => ['programas.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
								<button type="submit" class="btn text-secondary btn-sm btn-transparent mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
							{{ Form::close() }}
						</div>
					</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>MAD</td>
					<td>Maestría en Administración</td>

					<td>
						<div class="float-right">
							<a href="{{ route('programas.show', 0) }}" class="btn text-secondary btn-sm mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
								<i class="fas fa-eye"></i>
							</a>

							<a href="{{ route('programas.edit', 0) }}" class="btn text-secondary btn-sm mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
								<i class="fas fa-pencil-alt"></i>
							</a>

							{{ Form::open(['route' => ['programas.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
								<button type="submit" class="btn text-secondary btn-sm btn-transparent mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
							{{ Form::close() }}
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
