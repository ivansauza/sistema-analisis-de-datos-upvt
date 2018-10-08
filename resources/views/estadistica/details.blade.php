@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-chart-area"></i>  Estadística <small>Detalles</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('estadisticas.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
			<a href="#" class="btn btn-outline-secondary btn-sm">Generar Reporte</a>
		</div>
	</div>
@endsection

@section('content')
	<div class="card card-default mb-4">
		<table class="table">
			<tbody>
				<tr>
					<td>Aspecto</td>
					<td>
						<b>{{ $subindicador->indicador->nombre }}</b> <small>{{ $subindicador->nombre }}</small>
					</td>
				</tr>
				<tr>
					<td>Periodo</td>
					<td>
						{{ $periodo->full_clave }}
					</td>
				</tr>
				<tr>
					<td>Valor Meta</td>
					<td>
						{{ $subindicador->valor_meta }}%
					</td>
				</tr>
				<tr>
					<td>Procedimiento</td>
					<td>
						@foreach($subindicador->procedimiento as $item)
							@switch($item['type'])
								@case('pregunta')
									{{ App\Pregunta::find($item['value'])->nombre }}
									@break
								@case('numero')
									{{ $item['value'] }}
									@break
								@case('operacion')
									<b class="h4">{{ $item['value'] }}</b>
									@break
							@endswitch
						@endforeach
					</td>
				</tr>
				<tr>
					<td>Resultado</td>
					<td>
						@php
							$result = $subindicador->calculateProcedimiento($periodo->id)
						@endphp

						@if(is_numeric($result))
							<a href="{{ route('estadisticas.details', ['subindicador' => $subindicador->id, 'periodo' => $periodo->id]) }}">
								@if(($result * 100) < $subindicador->valor_meta)
									<span class="text-danger">
										{{ number_format((float)($result * 100), 2, '.', '') }}%
									</span>
								@else
									<span class="text-success">
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
				</tr>
			</tbody>
		</table>
	</div>

	<h1 class="h4"><small>Valores</small></h1>
	@foreach($subindicador->procedimiento as $item)
		@if($item['type'] == 'pregunta')
			@php
				$pregunta  = App\Pregunta::find($item['value']);
				$encuestas = $periodo->encuestas()->whereHas('preguntas', function ($query) use ($pregunta) {
					$query->where('pregunta_id', '=', $pregunta->id);
				})->WhereHas('periodo', function ($query) {
					$query->whereIn('user_id', App\User::get()->pluck('id'));
				})->get();
			@endphp
			<div class="card card-default mb-4">
				<table class="table table-bordered table-responsive-sm">
					<thead class="thead-light">
						<tr>
							<th scope="col">Pregunta</th>
							@foreach($encuestas as $encuesta)
								<th scope="col" class="text-center">
									{{ $encuesta->user->name }}
								</th>
							@endforeach
							<th scope="col" class="text-center">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="col-4">{{ $pregunta->nombre }}</td>
							@php( $total = 0 )

							@foreach($encuestas as $encuesta)
								<td  class="text-center">
									@php( $valor = $encuesta->getValuePregunta( $pregunta->id ) )

									<small>{{ $valor ?? 'NA'  }}</small>

									@php( $total += $valor )
								</td>
							@endforeach
							<td  class="text-center">
								<b>{{ $total }}</b>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		@endif
	@endforeach
@endsection
