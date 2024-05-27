<!DOCTYPE <html>
    <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/estilo_registro_principal.css">
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
                <label for="fname">Primer nombre</label><br>
                <input type="text" name="user" required="required" required></input><br>
            </div><br>  

            <div class="form-item">
                <label for="fname">Segundo nombre</label><br>
                <input type="text" name="user"></input><br>
            </div><br>

            <div class="form-item">
                <label for="fname">Primer apellido</label><br>
                <input type="text" name="user" required="required"></input>
            </div><br>

            <div class="form-item">
                <label for="fname">Segundo apellido</label><br>
                <input type="text" name="user"></input>
            </div><br>

            <div class="form-item">
                <label for="documento">Tipo de documento</label>
                <select id="documento" name="documento">
                  <option value="CC">CC</option>
                  <option value="NIT">NIT</option>
                  <option value="CE">CE</option>
                </select>
            </div><br>

            <div class="form-item">
                <label for="fname">Número de documento</label><br>
                <input type="text" name="user" required="required" required></input>
            </div><br>
            
            <div class="form-item">
                <label for="lname">Correo</label><br>
                <input type="text" name="pass" required="required" required></input>
            </div><br>

            <div class="form-item">
                <label for="lname">Número de contacto</label><br>
                <input type="text" name="pass" required="required" required></input>
            </div><br>
            
            <div class="form-item">
                <label for="lname">Contraseña</label><br>
                <input type="password" name="pass" required="required" required></input>
            </div>
            
            <div class="button-panel">
                <a href="login" class="button-link">
                    <input type="button" class="button" title="Log In" name="login" value="Registrar">
                </a>            
            </div>
          </form>
          
        </div>
        
        </body>
        </html>
