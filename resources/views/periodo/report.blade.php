@extends('layouts.report')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col">
                <h5 class="text-center"><b>ANÁLISIS DE DATOS</b></h5>

                <h5 class="text-center">AL MES DE SEPTIEMBRE DE 2017</h5>

                <p class="text-right">
                    <small>CÒDIGO:205BL10000/00(I05)(F01)</small>
                </p>

                <p class="text-right">
                    Fecha: <u>24 de enero de 2017</u>
                </p>

                @foreach ($procesos as $proceso)
                    <p class="mt-5"><b>Proceso: </b> {{ $proceso->nombre }}</p>
                    <table class="table-sm border w-100">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center border" >Procedimiento / Indicador</th>
                                <th scope="col" class="text-center border" >Valor meta</th>
                                <th scope="col" class="text-center p-0 border" >E-A<hr />Cuatrimestre 1</th>
                                <th scope="col" class="text-center p-0 border">M-A<hr />Cuatrimestre 2</th>
                                <th scope="col" class="text-center p-0 border">S-D<hr />Cuatrimestre 3</th>
                                <th scope="col" class="p-0 text-center border">Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proceso->indicadores as $indicador)
                                <tr class="border-top">
                                    <td class="border-right">
                                        <b><i>{{ $indicador->nombre }}</i></b>
                                    </td>
                                    <td class="border-right"></td>
                                    <td class="border-right"></td>
                                    <td class="border-right"></td>
                                    <td class="border-right"></td>
                                    <td class="border-right"></td>
                                </tr>

                                @foreach ($indicador->subindicadores as $subindicador)
                                    <tr>
                                        <td class="border-right" style="width: 300px !important;">
                                            {{ $subindicador->nombre }}: 
                                            (<span class="text-muted">{{ $subindicador->getProcedimiento() }}</span>) 
                                        </td>
                                        <td class="text-center border-right">{{ $subindicador->valor_meta }}%</td>
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
                                        <td class="border-right"></td>
                                        <td class="border-right"></td>
                                        <td style="width: 250px !important;">
                                        </td>
                                    </tr>
                                @endforeach

                            @endforeach
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
@endsection