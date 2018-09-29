@extends('layouts.admin')

@section('style')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif !important;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
@endsection

@section('content')
    <h1 class="text-center h2">403 -  Acción no autorizada.</h1>
    <br />
    <a href="{{ route('home') }}" class="text-center btn btn-sm btn-block btn-primary">Ir al Inicio</a>
@endsection