@extends('layouts.admin')

@section('header')
	<h1 class="h3">Análisis <small>Crear</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('analisis.index') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
		</div>
	</div>
@endsection

@section('content')

	<div class="card">
		<div class="card-body">
			<p>A continuación, se muestran los periodos de los cuales no ha realizo el análisis de datos.</p>
		</div>

		<div class="card-body p-0">
			<table class="table">
				<thead class="thead-light">
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
								<a href="{{ route('analisis.create', ['periodo_id' => $periodo->id]) }}" class="btn btn-sm {{ $periodo->estado ? 'disabled' : null }}">
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
