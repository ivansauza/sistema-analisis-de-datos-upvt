<div class="container">
	<div class="row">
		<div class="col mb-4">
			<div class="dropdown float-right">
				<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Mostrar por
				</button>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item {{ ! Request::input('vista') ? 'active' : null }}" href="{{ route('preguntas.index') }}">Lista completa</a>
					<a class="dropdown-item mt-1 {{ Request::input('vista') == 'programa_educativo' ? 'active' : null }}" href="{{ route('preguntas.index', ['vista' => 'programa_educativo']) }}">Programa Educativo</a>
				</div>
			</div>
		</div>
	</div>
</div>