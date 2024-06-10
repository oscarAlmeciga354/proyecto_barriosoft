@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
<link rel="icon" href="{{ asset('/img/logo.ico') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('/img/logo.ico') }}" type="image/x-icon">

<div class="form-wrapper">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h3>
            <span>
                <img src="{{ asset('/img/logo.jpg') }}" class="inline" style="width: 60px; height: auto; border-radius: 60%;  margin-right: 20px">
            </span>
            Barriosoft
        </h3><br>

        <div class="form-item">
            <label for="rol">Selecciona tu rol:</label>
            <select id="rol" name="rol">
                <option value="cliente">Cliente</option>
                <option value="domiciliario">Domiciliario</option>
                <option value="administrador">Administrador</option>
                <option value="tendero">Tendero</option>
            </select>
        </div><br>

        <div class="form-item">
            <input id="email" type="email" name="email" required="required" placeholder="Email registrado" value="{{ old('email') }}" autofocus class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-item">
            <input id="password" type="password" name="password" required="required" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Recordar') }}
                </label>
            </div>
        </div>

        <div class="button-panel">
            <input type="submit" class="button" title="Log In" name="login" value="Iniciar sesión">
        </div>
    </form>

    <div class="reminder">
        <p><a href="{{ route('register') }}">No tienes cuenta? Registra una ahora</a></p>
        <p><a href="{{ route('password.request') }}">Olvide mi contraseña</a> <a href="/"> - Volver al inicio</a></p>
    </div>
</div>
@endsection

