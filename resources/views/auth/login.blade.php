@extends('layouts.home')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 mx-auto">
            <h4 class="text-center">Porfavor, inicia sesión</h4>

            <form method="POST" action="{{ route('login') }}" class="mt-5">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="username" id="username"  value="{{ old('username') }}" class="form-control" placeholder="Usuario">
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group mt-5">
                    <input type="submit" name="Entrar" class="btn btn-outline-primary btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
