<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Libros.php";

$librosTotales = $_REQUEST['librosTotales'];//rescatamos la vriables total de libros 
//para que cuando alguien meta un libro pueda asignarle la foto ya que el codigo
//es auto increment
$meterCodigo = $librosTotales+1;


if (isset($_REQUEST['botonRegistrarLibro'])) {

    $libro = new Libro("$meterCodigo", $_REQUEST['nombreLibro'], $_REQUEST['autorLibro'], $_REQUEST['descripcionLibro']);
    $libro->insert();
    echo '<script type="text/javascript">
    alert("Libro insertado con éxito.");
    window.location.href="..";
    </script>'; 
}else {
    echo '<script type="text/javascript">
    alert("No se puede insertar el libro.");
    window.location.href="..";
    </script>';  
}


