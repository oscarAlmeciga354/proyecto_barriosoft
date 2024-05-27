<!DOCTYPE <html>
    <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/login.css">
        </head>
        <body>
        <div class="form-wrapper">
          
          <form action="#" method="post">
            <h3>
                <span> <img src="/img/logo.jpg" class="inline" style="width: 60px; height: auto; border-radius: 60%;  margin-right: 20px"></span>
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
                <input type="text" name="user" required="required" placeholder="Número de documento" autofocus required></input>
            </div>
            
            <div class="form-item">
                <input type="password" name="pass" required="required" placeholder="Contraseña" required></input>
            </div>
            
            <div class="button-panel">
                <input type="submit" class="button" title="Log In" name="login" value="Iniciar sesión"></input>
            </div>
          </form>
          <div class="reminder">
            <p><a>No tienes cuenta?</a> <a href="register">Registra una ahora</a></p>
            <p><a href="#">Olvide mi contraseña</a></p>
          </div>
          
        </div>
        
        </body>
        </html>

