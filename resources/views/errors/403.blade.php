@extends('layouts.admin')

@section('content')
    <h1 class="text-center h2">403 -  Acción no autorizada.</h1>
    <br />
    <a href="{{ route('home') }}" class="text-center btn btn-sm btn-block btn-primary">Ir al Inicio</a>
@endsection