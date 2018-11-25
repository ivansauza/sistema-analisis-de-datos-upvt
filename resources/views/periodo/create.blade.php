@extends('layouts.admin')

@section('header')
	<h1 class="h3"><i class="fas fa-calendar-alt"></i> Periodo <small>Crear</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('periodos.index') }}" class="btn btn-outline-secondary btn-sm">Cancelar</a>
		</div>
	</div>
@endsection

@section('content')
	
	@include('fragments.errors')

	<div class="card">
		<div class="card-body">
			{{ Form::open(['route' => 'periodos.store']) }}

				@include('forms.periodo')

				<div class="form-group">
					<div class="custom-control custom-checkbox">
					 	{{ Form::hidden('notificacion', 0) }}
					 	{{ Form::checkbox('notificacion', 1, null, ['class' => 'custom-control-input', 'id' => 'notificacion']) }}
					 	{{ Form::label('notificacion', 'Enviar notificación a todos los usuarios (Se enviará una notificación dentro del sistema).', ['class' => 'custom-control-label']) }}
						@if ($errors->has('notificacion'))
							<span class="badge badge-danger">{{ $errors->first('notificacion') }}</span>
						@endif
					</div>
				</div>

				{{ Form::submit('Almacenar', ['class' => 'btn btn-block btn-primary mt-5']) }}

			{{ Form::close() }}
		</div>
	</div>
	
@endsection
