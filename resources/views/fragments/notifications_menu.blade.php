@php ($notifications = auth()->user()->notifications->where('data.programa', '=', App\Programa::getPredeterminado()->id))
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<i class="far fa-bell"></i> 
	<span class="badge badge-light">
		{{ $notifications->count() }}
	</span>
</a>
<div class="dropdown-menu dropdown-menu-right notifications p-0" aria-labelledby="navbarDropdown">
	<div class="card p-0 m-0 border-0">
		@if($notifications->count() >= 1)	
			<div class="card-body p-0">
				<ul class="list-group list-group-flush">
					@foreach ($notifications as $notification)
						<li class="list-group-item {{ $notification->read_at ? null : 'list-group-item-primary' }}">
							<small>
								{!! $notification->data['mensaje'] !!} 
							</small>

							<a href="" class="btn btn-sm float-right" title="Marcar como leído">
								<i class="far fa-circle"></i>
							</a>
						</li>
					@endforeach
				</ul>
			</div>
			<div class="card-footer text-center">
				<a href="">Marcar todos como leídos</a>
			</div>
		@else
			<div class="card-footer text-center">
				No tiene notificaciones
			</div>
		@endif
	</div>
</div>