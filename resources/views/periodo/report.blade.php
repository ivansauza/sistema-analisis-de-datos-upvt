@extends('layouts.report')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col">
                <h5 class="text-center"><b>ANÁLISIS DE DATOS</b></h5>

                <h5 class="text-center text-uppercase">AL MES DE {{ $periodo->clave }} DE {{ $periodo->anio }}</h5>

                <p class="text-right">
                    <small>CÒDIGO:205BL10000/00(I05)(F01)</small>
                </p>

                <p class="text-right">
                    Fecha: <u>{{ date('d/m/Y') }}</u>
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
                                        @switch ($periodo->clave)
                                            @case('enero-abril')
                                                @include('periodo.fragments.result')
                                                <td class="border-right"></td>
                                                <td class="border-right"></td>
                                                @break

                                            @case('mayo-agosto')
                                                <td class="border-right"></td>
                                                @include('periodo.fragments.result')
                                                <td class="border-right"></td>
                                                @break

                                            @case('septiembre-diciembre')
                                                <td class="border-right"></td>
                                                <td class="border-right"></td>
                                                @include('periodo.fragments.result')
                                                @break
                                        @endswitch

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