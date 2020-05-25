<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
?>
<!doctype html>
<html lang="es">

<head>
    <title>Añade Libro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">CÓDIGO</th>
                    <th scope="col">NOMBRE USUARIO</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ADMINISTRADOR</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($usuariosTotales as $value) {

                ?>
                    <tr>
                        <td>
                            <a href="../controlador/borrarPersona.php?codigo=<?= $value->getCodigo() ?>"><button type="button" class="btn btn-danger" name="borrarAlumno">Borrar</button></a>

                        </td>
                        <td>
                            <a href="../controlador/actualizarPersona.php?codigo=<?= $value->getCodigo() ?>"><button type="button" class="btn btn-info" name="modificarAlumno">Modificar</button></a>

                        </td>
                        <th scope="row"><?= $value->getCodigo() ?></th>
                        <!--Cogemos el id de cada artículo-->
                        <td><?= $value->getNombre() ?></td>
                        <td><?= $value->getApellidos() ?></td>
                        <td><?php if ($value->getAdministrador() == "1") {
                                echo "SÍ";
                            } else {
                                echo "NO";
                            }  ?></td>
                        <td>
                            <a href="../controlador/verAsignaturaAlumno.php?codigo=<?= $value->getCodigo() ?>&nombre=<?= $value->getNombre() ?>&apellidos=<?= $value->getApellidos() ?>">
                                <!--Paso el codigo y nombre por esta variable-->
                                <button type="button" class="btn btn-light">Ver libros</button></a>

                        </td>

                    </tr>

                <?php
                }

                ?>

            </tbody>
        </table>
        <div class="col centrado">
            <a href=".."> <button type="submit" class="btn btn-info">Ir a inicio</button></a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>