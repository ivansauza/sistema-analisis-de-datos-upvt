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
				{ "orderable": false, "targets": [-1, -2, 1] }
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
					"{{ route('preguntas.posicion.update') }}", 
					$( this ).sortable( 'toArray' , { attribute: 'data-id' } )
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
	<h1 class="h3">Preguntas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('preguntas.create') }}" class="btn btn-outline-primary btn-sm">Crear Pregunta</a>
		</div>
	</div>
@endsection

@section('content')

	@include('fragments.alert')

	<div class="card card-default">
		<table class="table table-hover table-responsive-sm">
			<thead class="thead-light">
				<tr>
					<th scope="col">ID</th>
					<th scope="col"></th>
					<th scope="col">Nombre</th>
					<th scope="col" class="text-center">Responsable</th>
					<th scope="col">Nota</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody id="sortable">
				@foreach($preguntas as $pregunta)
					<tr data-id="{{ $pregunta->id }}">
						<th scope="row">{{ $pregunta->id }}</th>
						<td class="p-1">
							<a href="#" class="btn btn-xs mt-2" alt="Mover" 
								onmousedown="downSortable(event)"
								onmouseup="upSortable(event)">
								<i class="fas fa-expand-arrows-alt text-secondary"></i>
							</a>
						</td>
						<td>
							{{ $pregunta->nombre }}
							<!--
								<span class="badge badge-pill badge-{{ $pregunta->desactivar ? 'danger' : 'success' }}">
									{{ $pregunta->desactivar ? 'Desactivado' : 'Activo' }}
								</span>
							-->
						</td>
						<td class="text-center">{{ $pregunta->role->name }}</td>
						<td>
							<small>
								{{ $pregunta->nota }}
							</small>
						</td>
						<td>
							<div class="float-right">
								<div class="btn-group mr-2" role="group">
									<button id="btnGroupDrop1" type="button" class="btn dropdown-toggle btn-sm text-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
										<a class="dropdown-item" href="">Duplicar</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{ route('preguntas.show', $pregunta->id) }}">Detalles</a>
										<a class="dropdown-item" href="{{ route('preguntas.edit', $pregunta->id) }}">Editar</a>
										{{ Form::open(['route' => ['preguntas.destroy', $pregunta->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
											<button type="submit" class="dropdown-item" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''">Eliminar</button>
										{{ Form::close() }}
									</div>
								</div>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
