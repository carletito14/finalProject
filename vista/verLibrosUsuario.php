<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Libros.php";
include_once "../modelo/Persona.php";

$usuarioLibros = Persona::getPersonaById($_REQUEST['codigo']); //recoge el código del alumno
$usuarioLibros = $usuarioLibros->getLibros(); //obtiene todas las asignaturas que está matriculado

?>
<!doctype html>
<html lang="es">

<head>
    <title>Añade Libro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">LIBROS ALQUILADOS</th>
                <th scope="col">DEVOLVER LIBRO</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($usuarioLibros as $value) {

            ?>

                <tr>
                    <td></td>
                    <td></td>
                    <td><?php echo $value->getNombre() ?></td>
                    <!--Imprimo nombre de asigntura-->
                    <td>
                        <a href="../controlador/devolverLibro.php?idLibro=<?= $value->getCodigo() ?>&idCliente=<?= $_REQUEST['codigo'] ?>">
                            <button type="button" class="btn btn-info">Devolver</button></a>

                    </td>

                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</body>

<footer>
    <div class="d-flex justify-content-center">
        <a href="../controlador/listaUsuarios.php">
            <button type="button" class="btn btn-link">Ir atrás</button></a>
    </div>
</footer>