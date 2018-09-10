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
	<h1 class="h3">Encuestas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('encuestas.create') }}" class="btn btn-outline-primary btn-sm">Nuevo</a>
		</div>
	</div>
@endsection

@section('content')
<div class="card card-default">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Responsable</th>
				<th scope="col">Periodo</th>
				<th scope="col" class="text-center">Finalizado</th>
				<th scope="col" class="text-right"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($encuestas as $encuesta)
				<tr>
					<th scope="row">{{ $encuesta->id }}</th>
					<td>{{ $encuesta->user->full_name }}</td>
					<td>{{ $encuesta->periodo->full_clave }}</td>
					<td class="text-center">
						<span class="badge badge-pill badge-{{ $encuesta->finalizado ? 'primary' : 'secondary' }}">
							{{ $encuesta->finalizado ? 'SI' : 'NO' }}
						</span>
					</td>
					<td>
						<div class="float-right">
							<a href="{{ route('encuestas.show', 0) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
								<i class="fas fa-eye"></i>
							</a>

							<a href="{{ route('encuestas.edit', 0) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
								<i class="fas fa-pencil-alt"></i>
							</a>

							{{ Form::open(['route' => ['encuestas.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
								<button type="submit" class="btn btn-sm text-secondary btn-transparent mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
							{{ Form::close() }}
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
