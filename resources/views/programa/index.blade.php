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

	@include('fragments.alert')
	
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
				@foreach($programas as $programa)
					<tr>
						<th scope="row">{{ $programa->id }}</th>
						<td>{{ $programa->clave }}</td>
						<td>{{ $programa->nombre }}</td>

						<td>
							<div class="float-right">
								<a href="{{ route('programas.show', $programa->id) }}" class="btn text-secondary btn-sm mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
									<i class="fas fa-eye"></i>
								</a>

								<a href="{{ route('programas.edit', $programa->id) }}" class="btn text-secondary btn-sm mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
									<i class="fas fa-pencil-alt"></i>
								</a>

								{{ Form::open(['route' => ['programas.destroy', $programa->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
									<button type="submit" class="btn text-secondary btn-sm btn-transparent mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
								{{ Form::close() }}
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
