@extends('layouts.admin')

@section('header')
	<h1 class="h3">Subindicador <small>Editar</small></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="{{ route('procesos.index') }}" class="btn btn-outline-secondary btn-sm">Regresar</a>
		</div>
	</div>
@endsection

@section('content')

	@include('fragments.alert')
	@include('fragments.errors')

	<div class="card">
		<div class="card-body">
			{{ Form::model($subindicador, ['route' => ['subindicadores.update', $subindicador->id], 'method' => 'PUT']) }}

				@include('forms.subindicador')

				<div class="form-row" id="procedimiento">
					@if($subindicador->procedimiento)
						@foreach($subindicador->procedimiento as $item)
							@switch($item['type'])
								@case('pregunta')
									<div class="form-group col">
										{{ Form::hidden("procedimiento_types[]", "pregunta") }}
										<div class="input-group mb-3">
											{{ Form::select("procedimiento_values[]", $preguntas, $item['value'], ["class" => "form-control"]) }}
											<div class="input-group-append">
												<a href="#" class="btn btn-outline-secondary">
														<i class="fas fa-arrows-alt-h"></i>
												</a>
												<a href="#" class="btn btn-outline-danger" onclick="removeItem(this)">
													<i class="fas fa-trash"></i>
												</a>
											</div>
										</div>
									</div>
									@break

								@case('operacion')
									<div class="form-group col">
										{{ Form::hidden("procedimiento_types[]", "operacion") }}
										<div class="input-group mb-3">
											{{ Form::select("procedimiento_values[]", ["/" => "División", "*" => "Multiplicación", "+" => "Suma", "-" => "Resta"], $item['value'], ["class" => "form-control"]) }}
											<div class="input-group-append">
												<a href="#" class="btn btn-outline-secondary">
														<i class="fas fa-arrows-alt-h"></i>
												</a>
												<a href="#" class="btn btn-outline-danger" onclick="removeItem(this)">
													<i class="fas fa-trash"></i>
												</a>
											</div>
										</div>
									</div>
									@break

								@case('numero')
									<div class="form-group col">
										{{ Form::hidden("procedimiento_types[]", "numero") }}
										<div class="input-group mb-3">
											{{ Form::text("procedimiento_values[]", $item['value'], ["class" => "form-control"]) }}
											<div class="input-group-append">
												<a href="#" class="btn btn-outline-secondary">
														<i class="fas fa-arrows-alt-h"></i>
												</a>
												<a href="#" class="btn btn-outline-danger" onclick="removeItem(this)">
													<i class="fas fa-trash"></i>
												</a>
											</div>
										</div>
									</div>
									@break
							@endswitch
						@endforeach
					@endif
				</div>

				{{ Form::submit('Actualizar', ['class' => 'btn btn-block btn-warning mt-5']) }}

			{{ Form::close() }}
		</div>
	</div>
	
@endsection
