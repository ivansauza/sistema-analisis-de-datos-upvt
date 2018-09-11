@extends('layouts.admin')

@section('header')
	<h1 class="h3">Preguntas</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('preguntas.create', ['programa_id' => App\Programa::getPredeterminado()->id]) }}" class="btn btn-outline-primary btn-sm">Crear Pregunta</a>
			@include('pregunta.fragments.view_menu')
		</div>
	</div>
@endsection

@section('content')

	@include('fragments.alert')

	<div class="card card-default">
		<table class="table table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col"></th>
					<th scope="col">ID</th>
					<th scope="col">Nombre</th>
					<th scope="col" class="text-center">Responsable</th>
					<th scope="col">Nota</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($preguntas as $pregunta)
					<tr>
						<td class="p-1">
							<a href="#" class="btn btn-xs mt-2" alt="Mover">
								<i class="fas fa-expand-arrows-alt text-secondary"></i>
							</a>
						</td>
						<th scope="row">{{ $pregunta->id }}</th>
						<td>
							{{ $pregunta->nombre }}
							<!--
								<span class="badge badge-pill badge-{{ $pregunta->desactivar ? 'danger' : 'success' }}">
									{{ $pregunta->desactivar ? 'Desactivado' : 'Activo' }}
								</span>
							-->
						</td>
						<td class="text-center">{{ $pregunta->role->name }}</td>
						<td>
							<small>
								{{ $pregunta->nota }}
							</small>
						</td>
						<td>
							<div class="float-right">
								<div class="btn-group mr-2" role="group">
									<button id="btnGroupDrop1" type="button" class="btn dropdown-toggle btn-sm text-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
										<a class="dropdown-item" href="">Duplicar</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{ route('preguntas.show', $pregunta->id) }}">Detalles</a>
										<a class="dropdown-item" href="{{ route('preguntas.edit', $pregunta->id) }}">Editar</a>
										{{ Form::open(['route' => ['preguntas.destroy', $pregunta->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
											<button type="submit" class="dropdown-item" onclick="! confirm('Confirmar para eliminar el elemento definiticamente.') ? event.preventDefault() : ''">Eliminar</button>
										{{ Form::close() }}
									</div>
								</div>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
