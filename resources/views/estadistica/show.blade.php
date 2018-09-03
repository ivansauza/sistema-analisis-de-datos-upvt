@extends('layouts.admin')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('javascript')
	<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
@endsection

@section('script')
	$(document).ready( function () {
		$('table').DataTable();
	} );
@endsection

@section('header')
	<h1 class="h3">Estadísticas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('estadisticas.select') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
			<a href="#" class="btn btn-outline-secondary btn-sm">Generar Reporte</a>
		</div>
	</div>
@endsection

@section('content')

	<table class="table table-bordered" style="background: #fff;">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Subindicador</th>
				<th scope="col" class="text-center">Valor Meta</th>
				<th scope="col" class="text-center">*</th>
				<th scope="col" class="text-center">EA 2018</th>
				<th scope="col" class="text-center">MA 2018</th>
				<th scope="col" class="text-center">SD 2018</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Porcentaje de aspirantes contratados</td>
				<td class="text-center">
					<span class="badge badge-pill badge-primary">50%</span>
				</td>
				<td class="text-center">
					<a href="{{ route('estadisticas.graph', ['programa_id' => 0, 'subindicador_id' => 3]) }}" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600,toolbar=no, location=no, directories=no, status=no, menubar=no'); return false;">
						<i class="fas fa-chart-pie"></i>
					</a>
				</td>
				<td class="text-center">
					<span class="badge badge-pill badge-warning">50%</span>
				</td>
				<td class="text-center">
					<span class="badge badge-pill badge-success">90%</span>
				</td>
				<td class="text-center">
					<small>
						Periodo abierto
					</small>
				</td>
			</tr>

			<tr>
				<th scope="row">2</th>
				<td>Porcentaje con evaluación satisfactoria de Docentes</td>
				<td class="text-center">
					<span class="badge badge-pill badge-primary">85%</span>
				</td>
				<td class="text-center">
					<a href="{{ route('estadisticas.graph', ['programa_id' => 0, 'subindicador_id' => 3]) }}" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600,toolbar=no, location=no, directories=no, status=no, menubar=no'); return false;">
						<i class="fas fa-chart-pie"></i>
					</a>
				</td>
				<td class="text-center">
					<span class="badge badge-pill badge-success">100%</span>
				</td>
				<td class="text-center">
					<span class="badge badge-pill badge-danger">50%</span>
				</td>
				<td class="text-center">
					<small>
						Periodo abierto
					</small>
				</td>
			</tr>
		</tbody>
	</table>

@endsection
