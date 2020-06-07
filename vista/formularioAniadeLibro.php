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
    <div class="container" id="formulariosVarios">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">

                        <a class="nav-link"><strong>
                                <h3>Añade Libro</h3>
                            </strong>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <form class="justify-content-center text-center" action="../controlador/registraLibro.php?librosTotales=<?php $librosTotales ?>">
            <input type='hidden' name='librosTotales' value="<?= $librosTotales ?>">
            <div class="form-group justify-content-center">
                <div class="col-6 offset-3">
                    <div class="d-flex justify-content-center">

                        <h3><span class="badge badge-secondary">Código Libro -><?php echo $librosTotales + 1 ?></span></h3>
                    </div>
                </div>
                <label for="exampleFormControlInput1">Nombre</label>
                <div class="col-6 offset-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Introduce aquí el nombre del libro" required name="nombreLibro">
                </div>
                <label for="exampleFormControlInput1">Autor</label>
                <div class="col-6 offset-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Introduce aquí el autor del libro" required name="autorLibro">
                </div>

                <label for="exampleFormControlInput1">Descripción</label>
                <div class="col-6 offset-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcionLibro"></textarea>
                </div>

                <strong><label for="exampleFormControlInput1">LEER ANTES DE INSERTAR</label></strong>
                <div class="col-6 offset-3">
                    <textarea class="form-control" disabled="true" id="exampleFormControlTextarea1" rows="2">Para insertar la foto del libro, renómbrala como: '<?php echo $librosTotales + 1 ?>.jpg', después, vuelca la foto dentro de la carpeta 'imagenes'.</textarea>
                </div>
            </div>
            <div style="margin-bottom: 50px;">

                <a href="../controlador/registraLibro.php"><button type="submit" value="Verificar" name="botonRegistrarLibro" class="btn btn-outline-primary">Añade Libro</button></a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
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