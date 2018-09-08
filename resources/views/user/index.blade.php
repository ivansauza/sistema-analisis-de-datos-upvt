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
	<h1 class="h3">Usuarios</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
				<a href="{{ route('users.create') }}" class="btn btn-outline-primary btn-sm">
					Crear Usuario
				</a>
				@include('user.fragments.view_menu')
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
					<th scope="col">Correo elestrónico</th>
					<th scope="col">Actividades</th>
					<th scope="col" class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<th scope="row">{{ $user->id }}</th>
						<td>{{ $user->name }} {{ $user->apellidos }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<a href="{{ route('users.actividades', $user->id) }}" class="text-secondary">Ver historial</a>
						</td>
						<td>
							<div class="float-right">
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
