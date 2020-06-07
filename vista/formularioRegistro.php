<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
?>
<!doctype html>
<html lang="en">

<head>
    <title>Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="../funciones/funcionesAnonimo.js" language="Javascript"></script>
    <link rel="stylesheet" href="../estilos/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="formulariosVarios">
        <p class="text-center">
            <a href=".."><button type="button" class="btn btn-primary">
                    Sign Up
                </button></a>
        </p>

        <form class="justify-content-center text-center" action="#.php">
            <div class="form-group justify-content-center">
                <div class="form-group mx-3">
                    <label for="exampleFormControlInput1">Usuario</label>
                    <div class="col-6 offset-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Introduce aquí el nombre del usuario" required name="nombre">
                    </div>
                </div>
                <div class="form-group mx-3">
                    <label for="exampleFormControlInput1">Correo Electrónico</label>
                    <div class="col-6 offset-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Introduce aquí el correo electrónico" required name="apellidos">
                    </div>
                </div>

                <div class="form-group mx-3">
                    <label for="exampleFormControlInput1">Contraseña</label>
                    <div class="col-6 offset-3">
                        <input type="password" class="form-control" id="pass" placeholder="**********" required name="pass">
                    </div>

                </div>
                <div class="form-group mx-3">
                    <label for="exampleFormControlInput1">Repite la contraseña</label>
                    <div class="col-6 offset-3">
                        <input type="password" class="form-control" id="pass1" placeholder="**********" required name="pass1">
                    </div>
                </div>

            </div>
            <div style="margin-bottom: 30px;">
                <button type="submit" value="Verificar" name="botonRegistrar" class="btn btn-outline-primary" href="registraUsuario.php">Registrar</button>
            </div>
            <nav class="navbar navbar-expand  bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button><br><br>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="..">Volver al Inicio</a>

                        </li>

                    </ul>
                </div>
            </nav>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>