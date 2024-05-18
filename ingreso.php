
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="text/css" href="media/img/logo.PNG">
        <script src="https://kit.fontawesome.com/664052cf15.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <title>Ingreso</title>
    </head>
    <body>
        <section>
            <div class="contenedor">
                <div class="formulario">
                    <form action="accion.php" method="post">
                        <h2>Iniciar Sesión</h2>
                        <div class="input-contenedor">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email" required>
                            <label for="#">Email</label> 
                        </div>
                        <div class="input-contenedor">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" id="password" name="password" required>
                            <label for="#">Contraseña</label> 
                        </div>
                        <div class="olvidar">
                            <label for="#">
                                <input type="checkbox">Recordar
                                <a href="#">Olvidé la contraseña</a>
                            </label>
                        </div>
                    </form>
                    <div>
                        <button class="button" type="submit">Acceder</button>
                        <div class="resgistrar">
                            <p>No tengo Cuenta <a href="registro.html">Crear cuenta</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html