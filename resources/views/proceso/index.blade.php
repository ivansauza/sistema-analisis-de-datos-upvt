@extends('layouts.admin')

@section('header')
	<h1 class="h3">Procesos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2" role="group">
			<button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Agregar item nuevo
			</button>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
				<a class="dropdown-item" href="{{ route('procesos.create') }}">Crear Proceso</a>
				<a class="dropdown-item" href="{{ route('indicadores.create') }}">Crear Indicador</a>
				<a class="dropdown-item" href="{{ route('subindicadores.create') }}">Crear Subindicador</a>
			</div>
		</div>
	</div>
@endsection

@section('content')

{{-- Proceso --}}
<div class="card card-default">
	<div class="card-header py-2">
		<strong>
			<i class="fas fa-tasks"></i> Enseñanza Aprendizaje
		</strong>

		<div class="float-right p-0 m-0">
			<a class="btn btn-sm btn-transparent">
				<i class="fas fa-expand-arrows-alt"></i>
			</a>

			<a href="{{ route('indicadores.create', ['proceso_id' => 3]) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Agregar Indicador">
				<i class="fas fa-plus"></i>
			</a>

			<a href="{{ route('procesos.show', 0) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
				<i class="fas fa-eye"></i>
			</a>

			<a href="{{ route('procesos.edit', 0) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
				<i class="fas fa-pencil-alt"></i>
			</a>

			{{ Form::open(['route' => ['procesos.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
				<button type="submit" class="btn text-secondary btn-transparent btn-sm mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
			{{ Form::close() }}
		</div>
	</div>

	<div class="card-body px-0 py-3">

		{{-- Indicador --}}
		<div class="card card-default border-left-0 border-right-0 rounded-0 mb-3">
			<div class="card-header py-1">
				Realización y Evaluación de Estancia y/o Estadía

				<div class="float-right p-0 m-0">
					<a class="btn btn-sm btn-transparent">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>

					<a href="{{ route('subindicadores.create', ['indicador_id' => 3]) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Agregar Subindicador">
						<i class="fas fa-plus"></i>
					</a>

					<a href="{{ route('indicadores.show', 0) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
						<i class="fas fa-eye"></i>
					</a>

					<a href="{{ route('indicadores.edit', 0) }}" class="btn btn-sm text-secondary btn-transparent mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
						<i class="fas fa-pencil-alt"></i>
					</a>

					{{ Form::open(['route' => ['indicadores.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
						<button type="submit" class="btn btn-sm btn-transparent text-secondary mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
					{{ Form::close() }}
				</div>
			</div>

			<div class="card-body px-0 py-3">

				{{-- Subindicadores --}}
				<ul class="list-group list-group-flush">
					<li class="list-group-item">
						Eficiencia de la validación de Estancias
						<small class="text-muted">
							100%
						</small>

						<div class="float-right p-0 m-0">
							<a class="btn btn-xs btn-transparent">
								<i class="fas fa-expand-arrows-alt"></i>
							</a>

							<a href="{{ route('subindicadores.show', 0) }}" class="btn btn-xs text-secondary mt-1">
								<i class="fas fa-eye"></i>
							</a>

							<a href="{{ route('subindicadores.edit', 0) }}" class="btn btn-xs text-secondary mt-1">
								<i class="fas fa-pencil-alt"></i>
							</a>

							{{ Form::open(['route' => ['subindicadores.destroy', 0], 'method' => 'DELETE', 'class' => 'd-inline']) }}
								<button type="submit" class="btn btn-xs text-secondary mt-1" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''"><i class="fas fa-trash-alt"></i></button>
							{{ Form::close() }}
						</div>
					</li>
				</ul>

			</div>
		</div>

	</div>
</div>

@endsection
