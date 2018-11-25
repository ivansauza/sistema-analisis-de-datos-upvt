@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-chart-area"></i>  Estadísticas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
		</div>
	</div>
@endsection

@section('content')

	<div class="table-responsive">
		<table class="table table-bordered table-hover" style="background: #fff;">
			<thead>
				<tr>
					<th scope="col"></th>
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
									<a href="{{ route('estadisticas.graph', ['subindicador' => $subindicador->id]) }}" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=400,toolbar=no, location=no, directories=no, status=no, menubar=no'); return false;">
										<i class="fas fa-chart-pie"></i>
									</a>
								</td>
								@foreach($periodos as $periodo)
									<td class="text-center">
										@php($result = $subindicador->calculateProcedimiento($periodo->id))
										<a href="{{ route('estadisticas.details', ['subindicador' => $subindicador->id, 'periodo' => $periodo->id]) }}">
											@if(is_numeric($result))
												@if(($result * 100) < $subindicador->valor_meta)
													<span class="badge badge-danger">
														{{ number_format((float)($result * 100), 2, '.', '') }}%
													</span>
												@else
													<span class="badge badge-success">
														{{ number_format((float)($result * 100), 2, '.', '') }}%
													</span>
												@endif
											@else
												<small>
													{{ $result }}
												</small>
											@endif
										</a>
									</td>
								@endforeach
							</tr>
						@endforeach {{-- EndSubindicadores --}}
					@endforeach {{-- EndIndicadores --}}
				@endforeach {{-- EndProcesos --}}
			</tbody>
		</table>
	</div>

@endsection
