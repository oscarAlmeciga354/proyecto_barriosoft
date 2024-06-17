<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/register.css') }}">
    <link rel="icon" href="{{ asset('/img/logo.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/img/logo.ico') }}" type="image/x-icon">  
    <title>Registrarse</title>
</head>
<body>
<div class="form-wrapper"> 
        <form method="POST" action="{{ route('register') }}">
        @csrf

        <h3>
            <span>
                <img src="{{ asset('/img/logo.jpg') }}" class="inline" style="width: 60px; height: auto; border-radius: 60%;  margin-right: 20px">
            </span>
            Barriosoft 
        </h3>

        <h3>
           Registro
        </h3>

            <div class="form-item">
                                <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-item">
                                <input id="email" type="email" placeholder="Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-item">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-item">
                                <input id="password-confirm" type="password" placeholder="Confirmar contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">                
                        </div>

                        <div class="button-panel">
                                <button type="submit" class="button">
                                    {{ __('Registrar cuenta') }}
                                </button>
                        </div>
                        <div class="reminder">
                            <p><a href="{{ route('login') }}">Ya tienes cuenta? Inicia sesión</a></p>
                            <p><a href="/"> - Volver al inicio</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>