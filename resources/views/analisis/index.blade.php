@extends('layouts.admin')

@section('header')
	<h1 class="h3">Análisis <small>Información requerida para el análisis de datos.</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<a href="{{ route('analisis.select') }}" class="btn btn-outline-primary btn-sm">Nuevo</a>
	</div>
@endsection

@section('content')
<div class="card card-default">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Periodo</th>
				<th scope="col">Programa educativo</th>
				<th scope="col" class="text-center">Finalizado</th>
				<th scope="col" class="text-center">Estado del Periodo</th>
				<th scope="col" class="text-right">Opciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Septiembre-Diciembre 2018</td>
				<td>Ingeniería en Informática</td>
				<td class="text-center">
					<span class="badge badge-pill badge-danger">NO</span>
				</td>
				<td class="text-center">
					<span class="badge badge-pill badge-success">Abierto</span>
				</td>
				<td>
					<div class="float-right">
						<a href="{{ route('encuestas.show', 0) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
							<i class="fas fa-eye"></i>
						</a>

						<a href="{{ route('encuestas.edit', 0) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
							<i class="fas fa-pencil-alt"></i>
						</a>

						{{ Form::open(['route' => ['encuestas.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
							<button type="submit" class="btn btn-sm btn-transparent  text-secondary mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
						{{ Form::close() }}
					</div>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Mayo-Agosto 2018</td>
				<td>Ingeniería en Informática</td>
				<td class="text-center">
					<span class="badge badge-pill badge-success">SI</span>
				</td>
				<td class="text-center">
					<span class="badge badge-pill badge-danger">Cerrado</span>
				</td>
				<td>
					<div class="float-right">
						<a href="{{ route('encuestas.show', 0) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
							<i class="fas fa-eye"></i>
						</a>
					</div>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Enero-Abril 2018</td>
				<td>Ingeniería en Informática</td>
				<td class="text-center">
					<span class="badge badge-pill badge-success">SI</span>
				</td>
				<td class="text-center">
					<span class="badge badge-pill badge-danger">Cerrado</span>
				</td>
				<td>
					<div class="float-right">
						<a href="{{ route('encuestas.show', 0) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
							<i class="fas fa-eye"></i>
						</a>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection
