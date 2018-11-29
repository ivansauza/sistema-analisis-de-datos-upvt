<td class="border-right text-center">
    @foreach($subindicador->procedimiento as $item)
        @switch ($item['type'])
            @case('pregunta')
                @php
                    $pregunta  = App\Pregunta::find($item['value']);

                    $encuestas = $periodo->encuestas()->whereHas('preguntas', function ($query) use ($pregunta) 
                    {
                        $query->where('pregunta_id', '=', $pregunta->id);

                    })->WhereHas('periodo', function ($query) 
                    {
                        $query->whereIn('user_id', App\User::get()->pluck('id'));
                    })->get();
                @endphp

                @php
                    $total = 0;
                @endphp

                @foreach($encuestas as $encuesta)
                    @php
                        $total += $encuesta->getValuePregunta( $pregunta->id )
                    @endphp
                @endforeach
                {{ $total }}
            @break

            @case('operacion')
                {!! "&frasl;" !!}
            @break
        @endswitch
    @endforeach

     {{ auth()->user()->programas()->where('predeterminado', '=', 1)->first()->clave }} =

    @php
        $result = $subindicador->calculateProcedimiento($periodo->id)
    @endphp

    @if(is_numeric($result))
        <a href="{{ route('estadisticas.details', ['subindicador' => $subindicador->id, 'periodo' => $periodo->id]) }}" class="text-default">

            {{ number_format((float)($result * 100), 1, '.', '') }}%
        </a>
    @else
        <small>
            {{ $result }}
        </small>
    @endif
</td>