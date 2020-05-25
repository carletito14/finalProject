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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<form class="justify-content-center text-center" action="../controlador/actualizarPersona.php">
    <div class="form-group justify-content-center">
        <label for="exampleFormControlInput1">Nombre</label>
        <div class="col-6 offset-3">
            <input type="text" value="<?= $personaEditar->getNombre() ?>" class="form-control" id="exampleFormControlInput1" name="nombre">
        </div>
        <label for="exampleFormControlInput1">Correo electrónico</label>
        <div class="col-6 offset-3">
            <input type="text" value="<?= $personaEditar->getApellidos() ?>" class="form-control" id="exampleFormControlInput1" name="correoElectronico">
        </div>
        <label for="exampleFormControlInput1">Contraseña</label>
        <div class="col-6 offset-3">
            <input type="text" value="<?= $personaEditar->getPass() ?>" class="form-control" id="exampleFormControlInput1" name="pass">
        </div>

    </div>

    <input type="hidden" name="editarPersona" value="<?= $personaEditar->getCodigo() ?>">
    <button type="submit" class="btn btn-outline-primary" name="editar">Editar</button>

</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>