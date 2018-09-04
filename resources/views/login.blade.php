@extends('layouts.home')

@section('content')
<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12 mx-auto">
			<h4 class="text-center">Porfavor, inicia sesión</h4>

			<form method="POST" action="{{ route('login') }}" class="mt-5">
				{{ csrf_field() }}
				<div class="form-group">
					<input type="email" name="email" id="email"  value="{{ old('email') }}" class="form-control" placeholder="Correo electrónico">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
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
