@extends('layouts.admin')

@section('header')
	<h1 class="h3">Periodos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('periodos.create') }}" class="btn btn-outline-primary btn-sm">Nuevo</a>
		</div>
	</div>
@endsection

@section('content')
<div class="card card-default">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col">#</th>
				<th scope="col">Clave</th>
				<th scope="col" class="text-center">Estado</th>
				<th scope="col" class="text-center">Actual</th>
				<th scope="col" class="text-right">Opciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="width: 15px !important;">
					<a class="btn btn-sm">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</td>
				<th scope="row">1</th>
				<td>Enero-Abril 2018</td>
				<td class="text-center">Cerrado</td>
				<td class="text-center">NO</td>

				<td>
					<div class="float-right">
						<a href="{{ route('periodos.show', 0) }}" class="btn btn-sm btn-outline-primary mt-1" data-toggle="tooltip" data-placement="top" title="Ver completo">
							<i class="fas fa-eye"></i>
						</a>

						<a href="{{ route('periodos.edit', 0) }}" class="btn btn-sm btn-outline-warning mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
							<i class="fas fa-pencil-alt"></i>
						</a>

						{{ Form::open(['route' => ['periodos.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
							<button type="submit" class="btn btn-outline-danger btn-sm mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
						{{ Form::close() }}
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection
