<?php
include_once "../controlador/listaUsuarioAdmin.php";

//estructura de la página
?>
<!doctype html>
<html lang="en">

<head>
    <title>Biblioteca 24/7</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../estilos/estilos.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!---Cabecera-->
        <div class="cabeceraTotal">
            <nav class="nav" id="cabecera">
                <a><img src="../imagenes/Biblioteca.png" id="imgCabecera"></a>
                <a class="nav-link" href="../controlador/quienesSomos.php">Mis Libros</a>
                <a class="nav-link" href="../controlador/quienesSomos.php">Mis Datos</a>
                <a class="nav-link" href="../controlador/cerrarSesion.php">Cerrar Sesión</a>
            </nav>
        </div>

        <div class="cuerpo">

            <!--Contenido del cuerpo-->
            <div class="card">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                <h2 class="text-center" id="titulo">Todos los libros</h2>


                </div>
                <div class="col-md-2 offset-md-2">
                <button type="button" class="btn btn-info">Añadir Libro</button>

                </div>

            </div>
               

                <div class="container text-center" id="libros">
                    <div class="row">
                        <div class="col-sm">

                            <div class="card" style="width: 13rem;">
                                <img src="../imagenes/Biblioteca.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Autor</p>
                                    <a href="#" class="btn btn-primary">Modificar</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">

                            <div class="card" style="width: 13rem;">
                                <img src="../imagenes/Biblioteca.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Autor</p>
                                    <a href="#" class="btn btn-primary">Modificar</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">


                            <div class="card" style="width: 13rem;">
                                <img src="../imagenes/Biblioteca.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Autor</p>
                                    <a href="#" class="btn btn-primary">Modificar</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">


                            <div class="card" style="width: 13rem;">
                                <img src="../imagenes/Biblioteca.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Autor</p>
                                    <a href="#" class="btn btn-primary">Modificar</a>
                                </div>
                            </div>
                        </div>
                    </div> <br><br>
                    <!--Secong row-->
                    <div class="row">
                        <div class="col-sm">

                            <div class="card" style="width: 13rem;">
                                <img src="../imagenes/Biblioteca.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Autor</p>
                                    <a href="#" class="btn btn-primary">Modificar</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">

                            <div class="card" style="width: 13rem;">
                                <img src="../imagenes/Biblioteca.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Autor</p>
                                    <a href="#" class="btn btn-primary">Modificar</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">


                            <div class="card" style="width: 13rem;">
                                <img src="../imagenes/Biblioteca.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Autor</p>
                                    <a href="#" class="btn btn-primary">Modificar</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">


                            <div class="card" style="width: 13rem;">
                                <img src="../imagenes/Biblioteca.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Autor</p>
                                    <a href="#" class="btn btn-primary">Modificar</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div><br>
        <!--Pagination-->



        <!-- Footer -->

        <div class="footer">
            <footer class="page-footer font-small blue pt-4">

                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-7 mt-md-1 mt-3">

                            <!-- Content -->
                            <h2>Info de app</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!">Instagram</a>
                                </li>
                                <li>
                                    <a href="#!">Facebook</a>
                                </li>
                                <li>
                                    <a href="#!">Twitter</a>
                                </li>

                            </ul>
                        </div>


                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">

                            <!-- Links -->
                            <h5 class="text-uppercase" id="mapa">Ubicación</h5>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1621.7590375872555!2d-5.776169221618539!3d37.185901454436305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd127fa80bd7d143%3A0x9fa974b82c133ef6!2sInstituto%20de%20Educaci%C3%B3n%20Secundaria%20Ruiz%20Gij%C3%B3n!5e0!3m2!1ses!2ses!4v1588608719172!5m2!1ses!2ses"></iframe>



                        </div>

                        <!-- Grid row -->

                    </div>
                    <!-- Footer Links -->

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href=""> Manuel Gutiérrez Campos</a>
                    </div>

            </footer>


        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>