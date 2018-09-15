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
			"order": false, 
			"columnDefs": [
				{ "orderable": false, "targets": [2] }
        	]	
		} );
	} );
@endsection

@section('header')
	<h1 class="h3">Estadísticas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="#" class="btn btn-outline-secondary btn-sm">Generar Reporte</a>
		</div>
	</div>
@endsection

@section('content')

	<table class="table table-bordered table-responsive" style="background: #fff;">
		<thead class="thead-light">
			<tr>
				<th scope="col">Subindicador</th>
				<th scope="col" class="text-center">Valor Meta</th>
				<th scope="col" class="text-center">*</th>
				@foreach($periodos as $periodo)
					<th scope="col" class="text-center">
						{{ $periodo->tiny_clave }}
					</th>
				@endforeach
			</tr>
		</thead>
		<tbody>
			@foreach($procesos as $proceso)
				@foreach($proceso->indicadores as $indicador)
					@foreach($indicador->subindicadores as $subindicador)
						<tr>
							<td>{{ $subindicador->nombre }}</td>
							<td class="text-center">
								<span class="badge badge-pill badge-primary">
									{{ $subindicador->valor_meta }}%
								</span>
							</td>
							<td class="text-center">
								<a href="{{ route('estadisticas.show', ['programa_id' => 0, 'subindicador_id' => 3]) }}" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600,toolbar=no, location=no, directories=no, status=no, menubar=no'); return false;">
									<i class="fas fa-chart-pie"></i>
								</a>
							</td>
							@foreach($periodos as $periodo)
								<td class="text-center">
									@if($periodo->estado)
										@if($subindicador->procedimiento)
											@php($result = $subindicador->calculateProcedimiento($periodo->id))

											@if(is_numeric($result))
												<a href="{{ route('estadisticas.details', ['subindicador' => $subindicador->id, 'periodo' => $periodo->id]) }}">
													<span class="badge badge-success">
														{{ number_format((float)($result * 100), 2, '.', '') }}%
													</span>
												</a>
											@else
												<small>
													{{ $result }}
												</small>
											@endif
										@else
											<small>
												Sin procedimiento
											</small>
										@endif
									@else
										<small>Periodo abierto</small>
									@endif
								</td>
							@endforeach
						</tr>
					@endforeach
				@endforeach
			@endforeach
		</tbody>
	</table>

@endsection
