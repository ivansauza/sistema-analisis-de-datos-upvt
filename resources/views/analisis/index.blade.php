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
            "paging": false,
            "info": false,
			"columnDefs": [
				{ "orderable": false, "targets": [-1] }
        	]	
		} );
	} );
@endsection

@section('header')
	<h1 class="h3">Análisis <small>Información requerida para el análisis de datos.</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<a href="{{ route('analisis.select') }}" class="btn btn-outline-primary btn-sm">Crear Análisis</a>
	</div>
@endsection

@section('content')

	@include('fragments.alert')
	
	<div class="card card-default">
		<table class="table table-striped table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Periodo</th>
					<th scope="col" class="text-center">Finalizado</th>
					<th scope="col" class="text-center">Estado del Periodo</th>
					<th scope="col" class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($analisis as $encuesta)
					{{-- Mostrar solo los análisis que pertenescan al programa predeterminado --}}
					@if($encuesta->periodo->programa_id == App\Programa::getPredeterminado()->id)
						<tr>
							<th scope="row">{{ $encuesta->id }}</th>
							<td>{{ $encuesta->periodo->full_clave }}</td>
							<td class="text-center">
								<span class="badge badge-pill badge-{{ $encuesta->finalizado ? 'primary' : 'secondary' }}">
									{{ $encuesta->finalizado ? 'SI' : 'NO' }}
								</span>
							</td>
							<td class="text-center">
								<span class="badge badge-pill badge-{{ $encuesta->periodo->estado ? 'danger' : 'success' }}">
									{{ $encuesta->periodo->estado ? 'Cerrado' : 'Abierto' }}
								</span>
							</td>
							<td>
								<div class="float-right">
									<a href="{{ route('analisis.show', $encuesta->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Detalles">
										<i class="fas fa-eye"></i>
									</a>
									@if(!$encuesta->periodo->estado)
										@if(!$encuesta->finalizado)
											<a href="{{ route('analisis.edit', $encuesta->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
												<i class="fas fa-pencil-alt"></i>
											</a>
											{{ Form::open(['route' => ['analisis.destroy', $encuesta->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
												<button type="submit" class="btn btn-sm btn-transparent text-danger mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
											{{ Form::close() }}
										@endif
									@endif
								</div>
							</td>
						</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
