@extends('layouts.admin')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('javascript')
	<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
@endsection

@section('script')
	$( document ).ready( function () 
	{
		$( 'table' ).DataTable( {
			"columnDefs": [
				{ "orderable": false, "targets": [-1] }
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
		} );
	} );
@endsection

@section('header')
	<h1 class="h3"><i class="fas fa-align-left"></i> Encuestas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('encuestas.select.user') }}" class="btn btn-outline-primary btn-sm">Crear Encuesta</a>
		</div>
	</div>
@endsection

@section('content')
<div class="card card-default">
	<div class="table-responsive">
		<table class="table table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Periodo</th>
					<th scope="col">Usuario</th>
					<th scope="col">Rol</th>
					<th scope="col">Actualizado en</th>
					<th scope="col" class="text-center">Finalizado</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($periodos as $periodo)
					@foreach($periodo->encuestas as $encuesta)
						<tr>
							<th scope="row">{{ $encuesta->id }}</th>
							<td>{{ $encuesta->periodo->tiny_clave }}</td>
							<td>{{ $encuesta->user->full_name }}</td>
							<td>{{ $encuesta->user->roles->first()->name }}</td>
							<td class="text-center"><small>{{ $encuesta->updated_at }}</small></td>
							<td class="text-center">
								<span class="badge badge-pill badge-{{ $encuesta->finalizado ? 'primary' : 'secondary' }}">
									{{ $encuesta->finalizado ? 'SI' : 'NO' }}
								</span>
							</td>
							<td>
								<div class="float-right">
									<div class="btn-group mr-2" role="group">
										<button id="btnGroupDrop1" type="button" class="btn dropdown-toggle btn-sm text-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										</button>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
											<a class="dropdown-item" href="{{ route('encuestas.show', $encuesta->id) }}">Detalles</a>
											<a class="dropdown-item" href="{{ route('encuestas.edit', $encuesta->id) }}">Editar</a>
											{{ Form::open(['route' => ['encuestas.destroy', $encuesta->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
												<button type="submit" class="dropdown-item" onclick="destroyItem(event)">Eliminar</button>
											{{ Form::close() }}
										</div>
									</div>
								</div>
							</td>
						</tr>
					@endforeach
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
