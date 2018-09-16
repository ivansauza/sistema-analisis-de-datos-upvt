@extends('layouts.admin')

@section('header')
	<h1 class="h3">Estadística</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('estadisticas.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
			<a href="#" class="btn btn-outline-secondary btn-sm">Generar Reporte</a>
		</div>
	</div>
@endsection

@section('content')
	
	@foreach($roles as $role)
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Pregunta</th>
					@foreach($role->users as $user)
						<th>{{ $user->full_name }}</th>
					@endforeach
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach($periodo->programa->preguntas->where('role_id', '=', $role->id) as $pregunta)
					<tr>
						<td scope="row">
							{{ $pregunta->nombre }}
						</td>
						@php
							$sum = 0;
						@endphp
						@foreach($role->users as $user)
							<td scope="row" class="text-center">
								@php
									$encuesta = $periodo->encuestas
										->where('user_id', '=', $user->id)
										->first();
								@endphp

								@if($encuesta)
									@php
										$pregunta = $encuesta->preguntas->find($pregunta->id);
										$sum += $pregunta->pivot->valor;
									@endphp

									<small>{{ $pregunta->pivot->valor }}</small>
								@else
									N/D
								@endif
							</td>
						@endforeach
						<td class="text-center">{{ $sum }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endforeach
@endsection
