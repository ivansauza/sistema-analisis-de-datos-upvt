@extends('layouts.admin')

@section('header')
	<h1 class="h3">Programas Educativos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('programas.create') }}" class="btn btn-outline-primary btn-sm">Nuevo</a>
		</div>
	</div>
@endsection

@section('content')
	<div class="card card-default">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Clave</th>
					<th scope="col">Nombre</th>
					<th scope="col" class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>INI</td>
					<td>Ingeniería en Informática</td>

					<td>
						<div class="float-right">
							<a href="{{ route('programas.show', 0) }}" class="btn btn-sm btn-outline-primary">
								<i class="fas fa-eye"></i>
							</a>

							<a href="{{ route('programas.edit', 0) }}" class="btn btn-sm btn-outline-warning">
								<i class="fas fa-pencil-alt"></i>
							</a>

							<a href="{{ route('programas.destroy', 0) }}" class="btn btn-sm btn-outline-danger">
								<i class="fas fa-trash-alt"></i>
							</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
