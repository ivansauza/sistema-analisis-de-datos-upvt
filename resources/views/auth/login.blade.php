@extends('layouts.home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <form method="POST" action="{{ route('login') }}" class="form-signin mt-1">
        {{ csrf_field() }}
        <h1 class="h3 mb-2 font-weight-normal text-center">Análisis de Datos</h1>

        <img src="{{ asset('img/upvt-logo-hd.png') }}" class="img-fluid mb-3">

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        <label for="username" class="sr-only">Usuario</label>
        <input type="text" name="username" id="username"  value="{{ old('username') }}" class="form-control" placeholder="Usuario" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Mantener sesión
            </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Universidad Politécnica del Valle de Toluca 2018-2018</p>
    </form>
@endsection
