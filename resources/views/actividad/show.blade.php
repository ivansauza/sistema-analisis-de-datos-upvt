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
	<h1 class="h3">Actividades <small>Registro</small></h1>
@endsection

@section('content')
	<div class="card card-default">
		<table class="table table-striped table-hover table-responsive-sm">
			<thead class="thead-light">
				<tr>
					<th scope="col">Acción</th>
					<th scope="col">Url</th>
					<th scope="col">Ip</th>
					<th scope="col">Método</th>
					<th scope="col">Fecha de registro</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($actividades as $actividad)
					<tr>
						<td>{{ $actividad->ruta }}</td>
						<td>{{ $actividad->url }}</td>
						<td>{{ $actividad->ip }}</td>
						<td>{{ $actividad->metodo }}</td>
						<td>{{ $actividad->created_at }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<span class="m-auto">
		{{ $actividades->render("pagination::bootstrap-4") }}
		</span>
	</div>
@endsection
