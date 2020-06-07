<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
?>
<!doctype html>
<html lang="en">

<head>
    <title>Log In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container" id="formulariosVarios">
        <p class="text-center">
            <a href=".."><button type="button" class="btn btn-primary">
                    LOGIN
                </button></a>
        </p>

        <form class="justify-content-center text-center" action="../controlador/compruebaLogIn.php">
            <div class="form-group justify-content-center">
                <div class="form-group mx-3">
                    <label for="exampleFormControlInput1">Usuario</label>
                    <div class="col-6 offset-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Introduce aquí el nombre del usuario" required name="nombre">
                    </div>
                </div>
                <div class="form-group mx-3">
                    <label for="exampleFormControlInput1">Contraseña</label>
                    <div class="col-6 offset-3">
                        <input type="password" class="form-control" id="exampleFormControlInput1" required placeholder="**********" name="pass">
                    </div>

                </div>
                <div style="margin-bottom: 30px;">

                    <button type="submit" name="botonLoguear" class="btn btn-outline-primary" href="../controlador/compruebaLogIn.php">Entrar</button>
                </div>
        </form> <br>
        <nav class="navbar navbar-expand bg-light" id="cabeceraTotal">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="registraUsuario.php">Registrar usuario</a><!-- vamos a añadir-->

                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="..">Volver al Inicio</a>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>