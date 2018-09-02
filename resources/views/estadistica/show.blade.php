@extends('layouts.admin')

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
				<th scope="col" class="text-center">EA 2018</th>
				<th scope="col" class="text-center">MA 2018</th>
				<th scope="col" class="text-center">SD 2018</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Eficiencia de la validación de Estancias</td>
				<td class="text-center">
					<span class="badge badge-pill badge-primary">100%</span>
				</td>
				<td class="text-center">50%</td>
				<td class="text-center">100%</td>
				<td class="text-center">90%</td>
			</tr>
		</tbody>
	</table>


@endsection
