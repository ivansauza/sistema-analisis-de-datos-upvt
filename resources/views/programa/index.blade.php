@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-user-graduate"></i> Programas Educativos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">

	</div>
@endsection

@section('content')

	@include('fragments.alert')
	
	@if($programas->isEmpty())
		<h6 class="text-center text-muted">
			No tiene Programas Educativos asignados.
		</h6>
	@else
		<div class="card card-default">
		<table class="table table-hover table-responsive-sm">
			<thead class="thead-light">
				<tr>
					<th scope="col" class="text-center">ID</th>
					<th scope="col">Clave</th>
					<th scope="col">Nombre</th>
					<th scope="col" class="text-center">Prederminado</th>
					<th scope="col" class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($programas as $programa)
					<tr>
						<th scope="row" class="text-center">{{ $programa->id }}</th>
						<td>{{ $programa->clave }}</td>
						<td>{{ $programa->nombre }}</td>
						<td class="text-center">
							<span class="badge badge-pill badge-{{ $programa->pivot->predeterminado ? 'primary' : 'secondary' }}">
								{{ $programa->pivot->predeterminado ? 'SI' : 'NO' }}
							</span>
						</td>
						<td>
							<div class="float-right">
								<a href="{{ route('programas.predetermined', $programa->id) }}" class="btn text-secondary btn-sm mt-1" data-toggle="tooltip" data-placement="top" title="Predeterminado">
									<i class="far fa-check-circle"></i>
								</a>
								<a href="{{ route('programas.show', $programa->id) }}" class="btn text-secondary btn-sm mt-1" data-toggle="tooltip" data-placement="top" title="Mostrar">
									<i class="fas fa-eye"></i>
								</a>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	@endif

@endsection
