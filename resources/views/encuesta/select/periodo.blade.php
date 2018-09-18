@extends('layouts.admin')

@section('header')
	<h1 class="h3">Encuesta <small>Crear</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('encuestas.select.user') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<p>A continuación se muestran los periodos de los cuales el usuario <b>{{ $user->full_name_and_role }}</b> no ha realizo sus análisis de datos.</p>
		</div>

		<div class="card-body p-0">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Clave</th>
						<th scope="col">Año</th>
						<th scope="col" class="text-center">Estado</th>
						<th scope="col" class="text-right">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($periodos as $periodo)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $periodo->clave }}</td>
							<td>{{ $periodo->anio }}</td>
							<td class="text-center">
								<span class="badge badge-pill badge-{{ $periodo->estado ? 'danger' : 'success' }}">
									{{ $periodo->estado ? 'Cerrado' : 'Abierto' }}
								</span>
							</td>
							<td class="text-right">
								<a href="{{ route('encuestas.create', ['periodo_id' => $periodo->id, 'user_id' => $user->id]) }}" class="btn btn-sm">
									Realizar
								</a>
							<td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection
