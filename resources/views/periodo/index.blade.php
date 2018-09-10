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
	<h1 class="h3">Periodos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('periodos.create', ['programa_id' => auth()->user()->programas()->where('predeterminado', '=', 1)->first()->id]) }}" class="btn btn-outline-primary btn-sm">Crear Periodo</a>
			
			@include('periodo.fragments.view_menu')
		</div>
	</div>
@endsection

@section('content')
	
	@include('fragments.alert')

	<div class="card card-default">
		<table class="table table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col"></th>
					<th scope="col" class="text-center">ID</th>
					<th scope="col">Clave</th>
					<th scope="col" class="text-center">Estado</th>
					<th scope="col" class="text-center">Actual</th>
					<th scope="col" class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($periodos as $periodo)
					<tr>
						<td style="width: 15px !important;">
							<a class="btn btn-sm">
								<i class="fas fa-expand-arrows-alt"></i>
							</a>
						</td>
						<td class="text-center">{{ $periodo->id }}</td>
						<td>
							{{ $periodo->full_clave }}
						</td>
						<td class="text-center">
							<span class="badge badge-pill badge-{{ $periodo->estado ? 'success' : 'danger' }}">
								{{ $periodo->estado ? 'Abierto' : 'Cerrado' }}
							</span>
						</td>
						<td class="text-center">
							<span class="badge badge-pill badge-{{ $periodo->actual ? 'primary' : 'secondary' }}">
								{{ $periodo->actual ? 'SI' : 'NO' }}
							</span>
						</td>
						<td>
							<div class="float-right">
								<a href="{{ route('periodos.show', $periodo->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
									<i class="fas fa-eye"></i>
								</a>

								<a href="{{ route('periodos.edit', $periodo->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
									<i class="fas fa-pencil-alt"></i>
								</a>

								{{ Form::open(['route' => ['periodos.destroy', $periodo->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
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
