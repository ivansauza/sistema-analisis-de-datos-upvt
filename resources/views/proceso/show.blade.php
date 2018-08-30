@extends('layouts.admin')

@section('header')
	<h1 class="h3">Proceso <small>Mostrar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('procesos.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')
	<div class="card card-default">
		<table class="table table-striped table-hover">
			<tbody>
				<tr>
					<th scope="row">#</th>
					<td>1</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
