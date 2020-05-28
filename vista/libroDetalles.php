<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();
include_once "../modelo/Persona.php";
//mostramos los datos y le damos estilos para que todo se vea de una mejor manera

//ya tendríamos las variables nombre, autor y descripción
$codigoLibro = $_REQUEST['codigo'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Librería 24/7, <?= $nombre ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <script src="../funciones/funcionesAnonimo.js"></script>
</head>

<body>
    <span class="ir-arriba icon-arrow-up2"></span>
    <div class="container">

        <div class="row">
            <div class="col bg-dark text-center text-white">
                <h1><?= $nombre ?></h1>
            </div>
        </div><br><br>

        <div class="row align-items-center">
            <div class="col-6">
                <div class="media-body mt-3">
                    <img class="img-fluid" src="../imagenes/<?= $codigo ?>.jpg" alt="">
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-12">

                        <p><?= $descripcion ?></p>
                    </div>
                </div>
            </div>

        </div><br><br>
        <div class="row">
            <div class="col bg-white text-center text-white">
                <h5>
                    <small class="text-muted">Autor:&nbsp;&nbsp;<?= $autor ?></small>
                </h5>
            </div>
        </div><br>
        <br>
        <br>
        <?php


        ?>
        <div class="row">
            <?php
            if (!isset($_SESSION['nombre'])) {
            ?>
                <div class="col text-center">
                    <div class="col bg-white text-center text-white">
                        <button type="button" onclick="myFunction()" class="btn btn-primary disabled">¡Compra ahora!</button>
                    </div>

                <?php
            } elseif (Persona::esAdministrador($_SESSION['nombre']) == 1) {
                ?>
                    <div class="col text-center">
                        <div class="col bg-white text-center text-white">
                            <a href="../controlador/editaLibro.php?codigoLibro=<?=$codigoLibro ?>"><button type="button" class="btn btn-primary disabled">Editar libro</button></a>
                        </div>

                    <?php
                } else {


                    ?>

                        <div class="col text-center">
                            <div class="col bg-white text-center text-white">
                                <a href="../controlador/compraLibro.php?codigo=<?= $codigoLibro ?>"><button type="button" class="btn btn-primary btn-lg">¡Compra ahora!</button></a>
                            </div>

                        <?php
                    }
                        ?>
                        <br>
                        <br>
                        <br>
                        <nav class="navbar navbar-light justify-content-center" style="background-color: #e3f2fd;">

                            <a class="nav-link active" href="..">Volver al inicio</a>

                        </nav>
                        </div>



                        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
                        <script type="text/javascript" src="js/popper.min.js"></script>
                        <script type="text/javascript" src="js/bootstrap.js"></script>
                        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
                        <!-- Optional JavaScript -->
                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>