<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();
include_once "../modelo/LibrosComprados.php";
include_once "../modelo/Persona.php";

$nombreUsuario =  $_SESSION['nombre']; //nombre usuario
$codigoLibro = $_REQUEST['codigo']; //id libro

//cogemos el id del usuario
$cliente = Persona::getIdByNombre($nombreUsuario);

foreach ($cliente as $value) {
    $idUsuario = $value->getCodigo();
}
//metemos en la base de datos de libros comprados el id de usuario con el id de libro


if (isset($idUsuario)) {

    $libroComprado = new LibrosComprados($idUsuario, $codigoLibro);
    $libroComprado->compraLibro();


    echo '<script type="text/javascript">
    alert("Libro comprado con éxito.");
    window.location.href="../controlador/index.php";
    </script>';
   
}
