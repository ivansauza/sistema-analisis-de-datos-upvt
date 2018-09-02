@extends('layouts.admin')

@section('header')
	<h1 class="h3">Usuario <small>Activiades</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('users.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
	<div class="card card-default">
		<div class="card-header">
			Registro de actividades de: <small>Adrian Gomez</small>
		</div>	
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">Acción</th>
					<th scope="col">Url</th>
					<th scope="col">Ip</th>
					<th scope="col">Ubicación</th>
					<th scope="col">Fecha de registro</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>login.success</td>
					<td>Url</td>
					<td>177.247.101.251</td>
					<td>Mexico</td>
					<td>Aug 31, 2018 00:16</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
