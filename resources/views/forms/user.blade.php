@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('javascript')
	<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
@endsection

@section('script')
	$( document ).ready( function () 
	{
		$( 'table' ).DataTable( {
			"paging": false,
			"aaSorting": [], 
			"language": {
				"sProcessing":     "Procesando...",
				"sLengthMenu":     "Mostrar _MENU_ registros",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "Ningún dato disponible en esta tabla",
				"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix":    "",
				"sSearch":         "Buscar:",
				"sUrl":            "",
				"sInfoThousands":  ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst":    "Primero",
					"sLast":     "Último",
					"sNext":     "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			}
		} )
	} );
@endsection

<div class="card mb-4">
	<div class="card-body">
		<div class="row">
			<div class="col-md col-xs-12">
				<div class="form-row">
					<div class="form-group col-md-4 col-xs-12">
						{{ Form::label('prefijo') }}
						{{ Form::text('prefijo', null, ['class' => 'form-control', 'placeholder' => 'Prefijo']) }}
						@if ($errors->has('prefijo'))
							<span class="badge badge-danger">{{ $errors->first('prefijo') }}</span>
						@endif
					</div>
					<div class="form-group col-md-8 col-xs-12">
						{{ Form::label('name') }}
						{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre']) }}
						@if ($errors->has('name'))
							<span class="badge badge-danger">{{ $errors->first('name') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('apellidos') }}
					{{ Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Ingresa los apellidos']) }}
					@if ($errors->has('apellidos'))
						<span class="badge badge-danger">{{ $errors->first('apellidos') }}</span>
					@endif
				</div>
				<div class="form-group">
					{{ Form::label('email', 'Correo Electrónico') }}
					{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el correo electrónico']) }}
					@if ($errors->has('email'))
						<span class="badge badge-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="form-group">
					{{ Form::label('roles', 'Rol') }}
					{{ Form::select('roles', $roles, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar ...']) }}
					@if ($errors->has('roles'))
						<span class="badge badge-danger">{{ $errors->first('roles') }}</span>
					@endif
				</div>
				<div class="form-group">
					{{ Form::label('programas[]', 'Programas Educativos') }}
					{{ Form::select('programas[]', $programas, null, ['class' => 'form-control', 'multiple']) }}
					<small class="form-text text-muted">Puede seleccionar varios items presionando la tecla "control" + "click".</small>
					@if ($errors->has('programas'))
						<span class="badge badge-danger">{{ $errors->first('programas') }}</span>
					@endif
				</div>
			</div>
			<div class="col-md col-xs-12">
				<div class="form-group">
					{{ Form::label('username', 'Nombre de Usuario') }}
					{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de usuario']) }}
					@if ($errors->has('username'))
						<span class="badge badge-danger">{{ $errors->first('username') }}</span>
					@endif
				</div>
				<div class="form-group">
					{{ Form::label('password', 'Contraseña') }}
					{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña']) }}
					@if ($errors->has('password'))
						<span class="badge badge-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<div class="form-group">
					{{ Form::label('password_confirmation', 'Confirmar contraseña') }}
					{{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirma la contraseña']) }}
					@if ($errors->has('password_confirmation'))
						<span class="badge badge-danger">{{ $errors->first('password_confirmation') }}</span>
					@endif
				</div>
				<hr />
				<div class="form-group mt-4">
					<div class="custom-control custom-checkbox">
						{{ Form::hidden('disabled', 0) }}
						{{ Form::checkbox('disabled', 1, null, ['class' => 'custom-control-input', 'id' => 'disabled']) }}
						{{ Form::label('disabled', 'Desactivar usuario, ya no podrá iniciar sesión en el sistema.', ['class' => 'custom-control-label']) }}
						@if ($errors->has('disabled'))
							<span class="badge badge-danger">{{ $errors->first('disabled') }}</span>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@if (auth()->user()->admin)
	<div class="card card-default">
		<div class="card-header">
			Permisos Especiales
			<button class="btn btn-link btn-sm" type="button" data-toggle="collapse" data-target="#collapsePermisos" aria-expanded="true" aria-controls="collapsePermisos">
				<small>( + / - )</small>
			</button>
		</div>
		<div id="collapsePermisos" class="collapse hide" aria-labelledby="headingOne">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Permiso</th>
						<th>Descripción</th>
					</tr>
				</thead>
				<tbody>
					@foreach($permissions as $permission)
						<tr>
							<td>
								<label>
									{{ Form::checkbox('permissions[]', $permission->id, null) }}
									{{ $permission->name }}
								</label>
							</td>
							<td><em>{{ $permission->description }}</em></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endif