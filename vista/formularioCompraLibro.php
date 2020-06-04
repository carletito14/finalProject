<!doctype html>
<html lang="es">

<head>
    <title>Compra Libro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../estilos/estilos.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="compraLibro">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Id usuario</label>
                <h5><strong><?php echo $idUsuario; ?></strong></h5>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del usuario</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Introduzca su nombre" name="nombreComprador">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido del usuario</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Introduzca sus apellidos" name="apellidoComprador">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" value="<?= $correo ?>">
                <small id="emailHelp" class="form-text text-muted">No compartiremos tu correo electrónico con nadie más.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Dirección de Facturación</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" name="direccionUsuario" placeholder="Introduce tu dirección">
                <input type="number" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" name="cpUsuario" placeholder="Código Postal">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del libro</label>
                <h5><strong><?php echo $nombreLibro; ?></strong></h5>
                <input type="hidden" name="nombreLibro" value="<?php echo $nombreLibro; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Precio: 11.95€ </label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="check">
                <label class="form-check-label" for="exampleCheck1">Clica aquí si desea recoger el libro en tienda.</label>
            </div>
            <a href="../controlador/compraLibro.php" name="confirmaComprar"><button type="submit" name="confirmaComprar" class="btn btn-primary">Comprar</button></a><br>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>