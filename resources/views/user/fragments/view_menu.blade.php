<button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	Mostrar por
</button>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
	<a class="dropdown-item {{ ! Request::input('mostrar') ? 'active' : null }}" href="{{ route('periodos.index') }}">Lista completa</a>
	<a class="dropdown-item mt-1 {{ Request::input('mostrar') == 'programa' ? 'active' : null }}" href="{{ route('periodos.programa.select') }}">Programa Educativo</a>
</div>
