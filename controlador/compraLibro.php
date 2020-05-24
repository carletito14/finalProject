<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();
include_once "../modelo/LibrosComprados.php";
include_once "../modelo/Persona.php";
include_once "../modelo/Libros.php";

$nombreUsuario =  $_SESSION['nombre']; //nombre usuario
$codigoLibro = $_REQUEST['codigo']; //id libro

//cogemos el id del usuario
$cliente = Persona::getIdByNombre($nombreUsuario);//se guarda la id por el nombre

foreach ($cliente as $value) {
    $idUsuario = $value->getCodigo();
}

$correo = Persona::getApellidosById($idUsuario);


foreach ($correo as $value) {
    $correo = $value->getCodigo();//accedo al correo
}

$libro = Libro::getNombrebyCodigo($codigoLibro);
foreach ($libro as $value) {
    $nombreLibro = $value->getCodigo();//accedo al correo
}



if (isset($idUsuario)) {

    $libroComprado = new LibrosComprados($idUsuario, $codigoLibro);
    $libroComprado->compraLibro();
    include_once "../controlador/factura.php";

}
