@if (session('info'))
	<div class="alert alert-{{ session('info')['type'] }} alert-dismissible fade show animated bounceInDown" role="alert">
		{{ session('info')['message'] }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif