@extends('layouts.admin')

@section('header')
	<h1 class="h3">Actividades <small>Registro</small></h1>
@endsection

@section('content')
	<div class="card card-default">
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