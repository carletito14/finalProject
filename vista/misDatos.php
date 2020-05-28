<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../controlador/misDatos.php";

?>
<!doctype html>
<html lang="en">

<head>
    <title>Mis datos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">

                    <a class="nav-link"><strong>
                            <h3>Modificar mis datos</h3>
                        </strong>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <form class="justify-content-center text-center" action="../controlador/misDatos.php">
        <div class="form-group justify-content-center">



            <div class="d-flex justify-content-center">

                <h3><?php echo $persona->getApellidos();
                    echo ", ";
                    echo $persona->getNombre(); ?> &nbsp&nbsp&nbsp<span class="badge badge-secondary">Código -><?php echo $persona->getCodigo(); ?></span></h3>
            </div>
            <div class="col-6 offset-3">
                <input type="hidden" name="codigo" value="<?=$persona->getCodigo();?>">

                
            </div>
            <label for="exampleFormControlInput1">Usuario</label>
            <div class="col-6 offset-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" required name="nombre" value="<?= $persona->getNombre();?>">
            </div>
            <label for="exampleFormControlInput1">Correo electrónico</label>
            <div class="col-6 offset-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" required value="<?= $persona->getApellidos(); ?>" name="apellidos">
            </div>
            <label for="exampleFormControlInput1">Password</label>
            <div class="col-6 offset-3">
                <input type="password" class="form-control" id="exampleFormControlInput1" required value="<?= $persona->getPass(); ?>name="pass">
            </div>

        </div>

        <button type="submit" name="modificaPersona" class="btn btn-outline-primary" href="../controlador/misDatos.php">Modificar</button>

    </form> <br>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="..">Volver al Inicio</a>

                </li>

            </ul>
        </div>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>