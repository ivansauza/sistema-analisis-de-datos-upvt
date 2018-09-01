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
