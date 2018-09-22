<li class="nav-item">
    <a class="nav-link {{ ! Route::is('home') ?: 'active' }}" href="{{ route('home') }}">
        <i class="fas fa-home"></i> 
        Inicio <span class="sr-only">(current)</span>
    </a>
</li>

    <li class="nav-item">
        <a class="nav-link {{ ! Route::is('programas.*') ?: 'active' }}" href="{{ route('programas.index') }}">
            <i class="fas fa-user-graduate"></i> 
            Programas Educativos
            <span class="badge badge-primary float-right">{{ auth()->user()->programas()->count() }}</span>
        </a>
    </li>

@can(['periodos.index', 'periodos.show'])
    <li class="nav-item">
        <a class="nav-link {{ ! Route::is('periodos.*') ?: 'active' }}" href="{{ route('periodos.index') }}">
            <i class="fas fa-calendar-alt"></i> 
            Periodos
        </a>
    </li>
@endcan
<div class="dropdown-divider"></div>
@can('preguntas.index')
    <li class="nav-item">
        <a class="nav-link {{ ! Route::is('preguntas.*') ?: 'active' }}" href="{{ route('preguntas.index') }}">
            <i class="far fa-question-circle"></i> 
            Preguntas
        </a>
    </li>
@endcan

@can('encuestas.index')
    <li class="nav-item">
        <a class="nav-link {{ ! Route::is('encuestas.*') ?: 'active' }}" href="{{ route('encuestas.index') }}">
            <i class="fas fa-align-left"></i> 
            Encuestas
        </a>
    </li>
@endcan


<li class="nav-item">
    <a class="nav-link {{ ! Route::is('analisis.*') ?: 'active' }}" href="{{ route('analisis.index') }}">
        <i class="fas fa-align-left"></i> 
        Análisis
    </a>
</li>

<div class="dropdown-divider"></div>

@can('procesos.index')
    <li class="nav-item">
        <a class="nav-link {{ ! Route::is(['procesos.*', 'indicadores.*', 'subindicadores.*']) ?: 'active' }}" href="{{ route('procesos.index') }}">
            <i class="fas fa-arrows-alt-h"></i> 
            Procesos
        </a>
    </li>
@endcan

@can('estadisticas.index')
    <li class="nav-item">
        <a href="{{ route('estadisticas.index') }}" class="nav-link {{ ! Route::is('estadisticas.*') ?: 'active' }}">
            <i class="fas fa-chart-area"></i>  
            Estadísticas
        </a>
    </li>
@endcan

@can('users.index')
    <li class="nav-item">
        <a class="nav-link {{ ! Route::is('users.*') ?: 'active' }}" href="{{ route('users.index') }}">
            <i class="fas fa-users"></i> 
            Usuarios
        </a>
    </li>
@endcan