<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Error 404</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Monospace, Lucida;
        }   

        body {
            background: url(/img/Supermercado.jpg);
            height: 100vh; /* Establece el alto de la página al 100% del viewport */
            display: flex;
            justify-content: center;
            align-items: center; 
        }

        .container-404 {
        
            text-align: center;
            max-width: 600px;
            background: rgba(224, 233, 214, 0.87);
            padding: 45px 20px;
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            line-height: 1.7;
            color: #000000;
        }

        .boton {
            display: inline-block;
            margin-top: 27px;
            text-decoration: none;
            background: #5dbd2d;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container-404">
        <h1>Error 404</h1>
        <p>Esta página no se encuentra disponible en estos momentos.</p>
        <p>Inténtelo nuevamente, gracias.</p>
        <a href="/" class="boton">Página Principal</a>     
    </div>
</body>
</html>
