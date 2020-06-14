<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
?>
<!doctype html>
<html lang="es">

<head>
    <title>Actualizar libros</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php


    ?>
    <div class="container" id="formulariosVarios">
        <form class="justify-content-center text-center" action="../controlador/editaLibro.php">
            <div class="form-group justify-content-center">
                <label for="exampleFormControlInput1">Nombre Libro</label>
                <div class="col-6 offset-3">
                    <input type="text" value="<?= $libroParaEditar->getNombre() ?>" class="form-control" id="exampleFormControlInput1" name="nombre">
                </div>
                <label for="exampleFormControlInput1">Autor</label>
                <div class="col-6 offset-3">
                    <input type="text" value="<?= $libroParaEditar->getAutor() ?>" class="form-control" id="exampleFormControlInput1" name="autor">
                </div>
                <label for="exampleFormControlInput1">Descripción</label>
                <div class="col-6 offset-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="descripcion"><?= $libroParaEditar->getDescripcion() ?></textarea>
                </div>

            </div>

            <input type="hidden" name="editarLibro" value="<?= $libroParaEditar->getCodigo() ?>">
            <button type="submit" class="btn btn-outline-primary" name="editar">Editar</button>

        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>