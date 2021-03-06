@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-arrows-alt-h"></i> Procesos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		@if($procesos->isNotEmpty())
			<div class="btn-group mr-2" role="group">
				<button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Agregar item nuevo
				</button>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
					<a class="dropdown-item" href="{{ route('procesos.create', ['programa_id' =>  App\Programa::getPredeterminado()->id]) }}">Crear Proceso</a>
					<a class="dropdown-item" href="{{ route('indicadores.create') }}">Crear Indicador</a>
					<a class="dropdown-item" href="{{ route('subindicadores.create') }}">Crear Subindicador</a>
				</div>
			</div>
		@endif
	</div>
@endsection

@section('content')
	
	@include('fragments.alert')

	{{-- Proceso --}}
	@forelse($procesos as $proceso)

		<div class="card card-default mb-4">
			<div class="card-header py-2">
				{{ $proceso->nombre }}

				<div class="float-right p-0 m-0">
					<a href="{{ route('indicadores.create', ['proceso_id' => $proceso->id]) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Agregar Indicador">
						<i class="fas fa-plus"></i>
					</a>

					<a href="{{ route('procesos.show', $proceso->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar detalles">
						<i class="fas fa-eye"></i>
					</a>

					<a href="{{ route('procesos.edit', $proceso->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
						<i class="fas fa-pencil-alt"></i>
					</a>

					{{ Form::open(['route' => ['procesos.destroy', $proceso->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
						<button type="submit" class="btn text-secondary btn-transparent btn-sm mt-1" onclick="destroyItem(event)" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
					{{ Form::close() }}
				</div>
			</div>

			<div class="card-body px-0 py-3">

				{{-- Indicador --}}
				@foreach($proceso->indicadores as $indicador)
					<div class="card card-default border-left-0 border-right-0 rounded-0 mb-3">
						<div class="card-header py-1 rounded-0" style="background: #f1f8ff !important;">
							<small>{{ $indicador->nombre }}</small>

							<div class="float-right p-0 m-0">
								<a href="{{ route('subindicadores.create', ['indicador_id' => $indicador->id]) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Agregar SubIndicador">
									<i class="fas fa-plus"></i>
								</a>
								<a href="{{ route('indicadores.show', $indicador->id) }}" class="btn btn-sm text-secondary mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar detalles">
									<i class="fas fa-eye"></i>
								</a>
								<a href="{{ route('indicadores.edit', $indicador->id) }}" class="btn btn-sm text-secondary btn-transparent mt-1" data-toggle="tooltip" data-placement="top" title="Editar">
									<i class="fas fa-pencil-alt"></i>
								</a>
								{{ Form::open(['route' => ['indicadores.destroy', $indicador->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
									<button type="submit" class="btn btn-sm btn-transparent text-secondary mt-1" onclick="destroyItem(event)" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
								{{ Form::close() }}
							</div>
						</div>

						<div class="card-body px-0 py-3">

							{{-- Subindicadores --}}
							<ul class="list-group list-group-flush">
								@foreach($indicador->subindicadores as $subindicador)
									<li class="list-group-item">
										<div class="row">
											<div class="col-9">
												{{ $subindicador->nombre }} : 
												<span class="text-muted">
													{{ $subindicador->getProcedimiento() }}
												</span>
											</div>
											<div class="col-3">
												<span class="badge badge-pill badge-secondary">Valor meta {{ $subindicador->valor_meta }}%</span>
												<div class="btn-group mr-2" role="group">
													<button id="btnGroupDrop1" type="button" class="btn dropdown-toggle btn-xs text-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													</button>
													<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
														<a class="dropdown-item" href="{{ route('subindicadores.show', $subindicador->id) }}">Mostrar detalles</a>
														<a class="dropdown-item" href="{{ route('subindicadores.edit', $subindicador->id) }}">Editar</a>
														{{ Form::open(['route' => ['subindicadores.destroy', $subindicador->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
															<button type="submit" class="dropdown-item" onclick="destroyItem(event)">Eliminar</button>
														{{ Form::close() }}
													</div>
												</div>
											</div>
										</div>
									</li>
								@endforeach
							</ul>

						</div>
					</div>
				@endforeach

			</div>
		</div>

	@empty

		<div class="card card-default mb-4 animated flash">
			<div class="jumbotron">
				<h1 class="display-4">
					<small><i class="fas fa-box-open"></i> Modulo vacio</small>
					<p class="lead d-inline">No hay datos disponibles para mostrar.</p>
				</h1>				<hr class="my-4">
				<a class="btn btn-outline-primary btn-lg" href="{{ route('procesos.create') }}" role="button">Crear Proceso</a>
			</div>
		</div>

	@endforelse

@endsection
