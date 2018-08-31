@extends('layouts.admin')

@section('header')
	<h1 class="h3">Procesos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('procesos.create') }}" class="btn btn-outline-primary btn-sm">Nuevo</a>
		</div>
	</div>
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		<strong>
			<i class="fas fa-tasks"></i> Enseñanza Aprendizaje
		</strong>

		<div class="float-right p-0 m-0">
			<a class="btn btn-sm">
				<i class="fas fa-expand-arrows-alt"></i>
			</a>

			<a class="btn btn-sm btn-success mt-1" data-toggle="tooltip" data-placement="top" title="Agregar Indicador">
				<i class="fas fa-plus"></i>
			</a>

			<a href="{{ route('procesos.show', 0) }}" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" data-placement="top" title="Ver completo">
				<i class="fas fa-eye"></i>
			</a>

			<a href="{{ route('procesos.edit', 0) }}" class="btn btn-sm btn-warning mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
				<i class="fas fa-pencil-alt"></i>
			</a>

			{{ Form::open(['route' => ['procesos.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
				<button type="submit" class="btn btn-danger btn-sm mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
			{{ Form::close() }}
		</div>
	</div>

	<div class="card-body px-0 py-3">

		<div class="card card-default border-left-0 border-right-0 rounded-0 mb-3">
			<div class="card-header">
				Realización y Evaluación de Estancia y/o Estadía

				<div class="float-right p-0 m-0">
					<a class="btn btn-sm">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>

					<a class="btn btn-sm btn-outline-success mt-1" data-toggle="tooltip" data-placement="top" title="Agregar Subindicador">
						<i class="fas fa-plus"></i>
					</a>

					<a href="{{ route('indicadores.show', 0) }}" class="btn btn-sm btn-outline-primary mt-1" data-toggle="tooltip" data-placement="top" title="Ver completo">
						<i class="fas fa-eye"></i>
					</a>

					<a href="{{ route('indicadores.edit', 0) }}" class="btn btn-sm btn-outline-warning mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
						<i class="fas fa-pencil-alt"></i>
					</a>

					{{ Form::open(['route' => ['indicadores.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
						<button type="submit" class="btn btn-outline-danger btn-sm mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
					{{ Form::close() }}
				</div>
			</div>

			<div class="card-body px-0 py-3">
				<ul class="list-group list-group-flush">
					<li class="list-group-item">
						Eficiencia de la validación de Estancias

						<div class="float-right p-0 m-0">
							<a class="btn btn-xs">
								<i class="fas fa-expand-arrows-alt"></i>
							</a>

							<a href="{{ route('subindicadores.show', 0) }}" class="btn btn-xs btn-outline-primary mt-1">
								<i class="fas fa-eye"></i>
							</a>

							<a href="{{ route('subindicadores.edit', 0) }}" class="btn btn-xs btn-outline-warning mt-1">
								<i class="fas fa-pencil-alt"></i>
							</a>

							{{ Form::open(['route' => ['subindicadores.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
								<button type="submit" class="btn btn-outline-danger btn-xs mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''"><i class="fas fa-trash-alt"></i></button>
							{{ Form::close() }}
						</div>
					</li>
					<li class="list-group-item">
						Eficiencia del seguimiento

						<div class="float-right p-0 m-0">
							<a class="btn btn-xs">
								<i class="fas fa-expand-arrows-alt"></i>
							</a>

							<a href="{{ route('procesos.show', 0) }}" class="btn btn-xs btn-outline-primary mt-1">
								<i class="fas fa-eye"></i>
							</a>

							<a href="{{ route('procesos.edit', 0) }}" class="btn btn-xs btn-outline-warning mt-1">
								<i class="fas fa-pencil-alt"></i>
							</a>

							{{ Form::open(['route' => ['procesos.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
								<button type="submit" class="btn btn-outline-danger btn-xs mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''"><i class="fas fa-trash-alt"></i></button>
							{{ Form::close() }}
						</div>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>
@endsection
