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
	<h1 class="h3">Preguntas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('preguntas.create', ['programa_id' => 5]) }}" class="btn btn-outline-primary btn-sm">Nuevo</a>
			@include('pregunta.fragments.view_menu')
		</div>
	</div>
@endsection

@section('content')

	<div class="card card-default mb-5">
		<div class="card-header">
			<h5 class="p-0 text-uppercase">
				<small>
					Ingeníeria en Informatica
				</small>
			</h5>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Nota</th>
					<th scope="col" class="text-center">Responsable</th>
					<th scope="col" class="text-center">Activo</th>
					<th scope="col" class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="width: 15px !important;">
						<a class="btn btn-sm">
							<i class="fas fa-expand-arrows-alt"></i>
						</a>
					</td>
					<th scope="row">1</th>
					<td>Número de alumnos que fueron evaluados de Estancias y Estadía</td>
					<td><small>Periodo establecido. (40 días como máximo)</small></td>
					<td class="text-center">PTC</td>
					<td class="text-center">
						<span class="badge badge-pill badge-success">SI</span>
					</td>
					<td>
						<div class="float-right">
							<div class="btn-group mr-2" role="group">
								<button id="btnGroupDrop1" type="button" class="btn dropdown-toggle btn-sm text-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
									<a class="dropdown-item" href="">Duplicar</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ route('preguntas.show', 0) }}">Mostrar</a>
									<a class="dropdown-item" href="{{ route('preguntas.edit', 0) }}">Editar</a>
									{{ Form::open(['route' => ['preguntas.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
										<button type="submit" class="dropdown-item" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''">Eliminar</button>
									{{ Form::close() }}
								</div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
@endsection