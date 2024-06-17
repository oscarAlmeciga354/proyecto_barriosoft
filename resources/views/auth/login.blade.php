<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
    <link rel="icon" href="{{ asset('/img/logo.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/img/logo.ico') }}" type="image/x-icon">  
    <title>Iniciar sesión</title>
</head>
<body>
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
            <input style="width: 20px; height: 20px; display: inline-block; vertical-align: middle;" type="checkbox">
            <p style="height: 12px; font-size: 17px; font-family: Arial, sans-serif; color: #201e1e; display: inline-block; vertical-align: middle; margin-left: 5px;">Recordar</p>
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
</body>
</html>