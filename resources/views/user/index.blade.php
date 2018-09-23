@extends('layouts.admin')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('javascript')
	<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
@endsection

@section('script')
	$(document).ready( function () {
		$('table').DataTable({
			"aaSorting": [], 
			"language": {
				"sProcessing":     "Procesando...",
				"sLengthMenu":     "Mostrar _MENU_ registros",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "Ningún dato disponible en esta tabla",
				"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix":    "",
				"sSearch":         "Buscar:",
				"sUrl":            "",
				"sInfoThousands":  ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst":    "Primero",
					"sLast":     "Último",
					"sNext":     "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			}
		});
	} );
@endsection

@section('header')
	<h1 class="h3"><i class="fas fa-users"></i> Usuarios</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('users.create') }}" class="btn btn-outline-primary btn-sm">
				Crear Usuario
			</a>
		</div>
	</div>
@endsection

@section('content')

	@include('fragments.alert')

	<div class="card card-default">
		<table class="table table-striped table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nombre</th>
					<th scope="col">Nombre de Usuario</th>
					<th scope="col">Rol</th>
					<th scope="col" class="text-center">Activo</th>
					<th scope="col" class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<th scope="row">{{ $user->id }}</th>
						<td>{{ $user->name }} {{ $user->apellidos }}</td>
						<td>{{ $user->username }}</td>
						<td class="text-center">{{ $user->roles->first()->name }}</td>
						<td class="text-center">
							<span class="badge badge-pill badge-{{ $user->disabled ? 'secondary' : 'primary' }}">
								{{ $user->disabled ? 'NO' : 'SI' }}
							</span>
						</td>
						<td>
							<div class="float-right">
								<a href="{{ route('users.actividades', $user->id) }}" class="btn btn-sm text-secondary mt-1"  data-toggle="tooltip" data-placement="top" title="Actividades">
									<i class="fas fa-history"></i>
								</a>

								<a href="{{ route('users.show', $user->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Detalles">
									<i class="fas fa-eye"></i>
								</a>

								<a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
									<i class="fas fa-pencil-alt"></i>
								</a>

								{{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
									<button type="submit" class="btn btn-sm text-danger btn-transparent mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
								{{ Form::close() }}
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>


@endsection
