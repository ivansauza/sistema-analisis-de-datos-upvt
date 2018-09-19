@extends('layouts.admin')

@section('header')
	<h1 class="h3">Estadísticas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="#" class="btn btn-outline-secondary btn-sm">Generar Reporte</a>
		</div>
	</div>
@endsection

@section('content')

	<table class="table table-bordered table-hover table-responsive-sm" style="background: #fff;">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Subindicador</th>
				<th scope="col" class="text-center">Valor Meta</th>
				<th scope="col" class="text-center"></th>
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
					<tr>
						<td colspan="{{ ($periodos->count() + 3) }}" class="table-active" style="background: #f1f4f6;">
							<small><b>{{ $indicador->nombre }}</b></small>
						</td>
					</tr>
					@foreach($indicador->subindicadores as $subindicador)
						<tr>
							<td>
								<small>{{ $subindicador->nombre }}</small>
							</td>
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
									@php($result = $subindicador->calculateProcedimiento($periodo->id))

									@if(is_numeric($result))
										<a href="{{ route('estadisticas.details', ['subindicador' => $subindicador->id, 'periodo' => $periodo->id]) }}">
											@if(($result * 100) < $subindicador->valor_meta)
												<span class="badge badge-danger">
													{{ number_format((float)($result * 100), 2, '.', '') }}%
												</span>
											@else
												<span class="badge badge-success">
													{{ number_format((float)($result * 100), 2, '.', '') }}%
												</span>
											@endif
										</a>
									@else
										<small>
											{{ $result }}
										</small>
									@endif
								</td>
							@endforeach
						</tr>
					@endforeach
				@endforeach
			@endforeach <!-- endProcesos -->
		</tbody>
	</table>

@endsection
