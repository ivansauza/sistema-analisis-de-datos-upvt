@extends('layouts.admin')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('javascript')
	<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
@endsection

@section('script')
	$(document).ready( function () {
		$( 'table' ).DataTable( {
			"paging": false,
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
		} )
	} );
@endsection

@section('header')
	<h1 class="h3"><i class="fas fa-history"></i> Actividades<small> Registro</small></h1>
@endsection

@section('content')
	<div class="card card-default">
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead class="thead-light">
					<tr>
						<th scope="col">Acción</th>
						<th scope="col">Url</th>
						<th scope="col">Ip</th>
						<th  class="text-center" scope="col">Método</th>
						<th scope="col">Creado el</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($actividades as $actividad)
						<tr>
							<td>
								<em>{{ $actividad->ruta }}</em>
							</td>
							<td>
								<small>{{ $actividad->url }}</small>
							</td>
							<td>{{ $actividad->ip }}</td>
							<td class="text-center">
								<span class="badge badge-pill badge-{{ $actividad->metodo == 'POST' ? 'primary' : 'info' }}">
									{{ $actividad->metodo }}
								</span>
							</td>
							<td>
								<small>{{ $actividad->created_at }}</small>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<span class="m-auto">
		{{ $actividades->render("pagination::bootstrap-4") }}
		</span>
	</div>
@endsection
