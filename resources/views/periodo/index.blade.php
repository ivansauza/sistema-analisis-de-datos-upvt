@extends('layouts.admin')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('javascript')
	<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
@endsection

@section('script')
	$( document ).ready( function () 
	{
		$( 'table' ).DataTable( {
			"paging": false,
			"columnDefs": [
				{ 
					"orderable": false, 
					"targets": [-1, 1], 
				}
        	], 
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
	} )

	function upSortable( event )
	{
		$( '#sortable' ).sortable( {
			update: function()
			{
				posicionUpdate(
					"{{ route('periodos.posicion.update') }}", 
					$( this ).sortable( 'toArray' )
				)
			}, 
			stop: function()
			{
				$( this ).sortable( "destroy" )
			}, 
		} )
	}
@endsection

@section('header')
	<h1 class="h3">Periodos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('periodos.create') }}" class="btn btn-outline-primary btn-sm">Crear Periodo</a>
		</div>
	</div>
@endsection

@section('content')
	
	@include('fragments.alert')

	<div class="card card-default">
		<table class="table table-hover table-responsive-sm">
			<thead class="thead-light">
				<tr>
					<th scope="col" class="text-center">ID</th>
					<th scope="col"></th>
					<th scope="col">Clave</th>
					<th scope="col">Año</th>
					<th scope="col" class="text-center">Estado</th>
					<th scope="col" class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody id="sortable">
				@foreach($periodos as $periodo)
					<tr id="{{ $periodo->id }}">
						<td class="text-center">{{ $periodo->id }}</td>
						<td class="p-1">
							<a href="#" class="btn btn-xs mt-2" alt="Mover" 
								onmousedown="downSortable(event)"
								onmouseup="upSortable(event)">
								<i class="fas fa-expand-arrows-alt text-secondary"></i>
							</a>
						</td>
						<td>{{ $periodo->clave }}</td>
						<td>{{ $periodo->anio }}</td>
						<td class="text-center">
							<span class="badge badge-pill badge-{{ $periodo->estado ? 'danger' : 'success' }}">
								{{ $periodo->estado ? 'Cerrado' : 'Abierto' }}
							</span>
						</td>
						<td>
							<div class="float-right">
								<a href="{{ route('periodos.show', $periodo->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Detalles">
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
