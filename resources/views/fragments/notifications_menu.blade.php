@if (App\Programa::getPredeterminado())
	@php ($notifications = auth()->user()->notifications->where('data.programa', '=', App\Programa::getPredeterminado()->id))
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="far fa-bell {{ $notifications->count() >= 1 ? 'animated tada' : null }}"></i> 
		<span class="badge badge-light">
			{{ auth()->user()->unreadNotifications->where('data.programa', '=', App\Programa::getPredeterminado()->id)->count() }}
		</span>
	</a>
	<div class="dropdown-menu dropdown-menu-right notifications p-0  animated flipInX" aria-labelledby="navbarDropdown">
		<div class="card p-0 m-0 border-0">
			@if($notifications->count() >= 1)	
				<div class="card-body p-0">
					<ul class="list-group list-group-flush">
						@foreach ($notifications as $notification)
							<li class="list-group-item {{ $notification->read_at ? null : 'list-group-item-primary' }}">
								<small>
									{!! $notification->data['mensaje'] !!} 
								</small>

								@if ($notification->read_at)
									{{ Form::open(['route' => ['notificaciones.unread', $notification->id], 'method' => 'POST', 'class' => 'float-right']) }}
										<button type="submit" class="btn btn-sm text-primary  btn-transparent mt-1"  data-toggle="tooltip" data-placement="left" title="Marcar como no leída">
											<i class="far fa-circle"></i>
										</button>
									{{ Form::close() }}
								@else
									{{ Form::open(['route' => ['notificaciones.read', $notification->id], 'method' => 'POST', 'class' => 'float-right']) }}
										<button type="submit" class="btn btn-sm text-danger  btn-transparent mt-1"  data-toggle="tooltip" data-placement="left" title="Marcar como leída">
											<i class="far fa-circle"></i>
										</button>
									{{ Form::close() }}
								@endif

								{{ Form::open(['route' => ['notificaciones.destroy', $notification->id], 'method' => 'DELETE', 'class' => 'float-right']) }}
									<button type="submit" class="btn btn-sm text-secondary  btn-transparent mt-1"  data-toggle="tooltip" data-placement="left" title="Ocultar">
										<i class="fas fa-eye-slash"></i>
									</button>
								{{ Form::close() }}
							</li>
						@endforeach
					</ul>
				</div>
				<div class="card-footer text-center">
					<a href="">Marcar todas como leídas</a>
				</div>
			@else
				<div class="card-footer text-center">
					No tiene notificaciones
				</div>
			@endif
		</div>
	</div>
@endif
