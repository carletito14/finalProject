<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();
include_once "../modelo/LibrosComprados.php";
include_once "../modelo/Persona.php";
include_once "../modelo/Libros.php";
$nombreUsuario =  $_SESSION['nombre']; //nombre usuario

//cogemos el id del usuario
$cliente = Persona::getIdByNombre($nombreUsuario); //se guarda la id por el nombre

foreach ($cliente as $value) {
    $idUsuario = $value->getCodigo();
}

if (isset($_REQUEST['confirmaComprar'])) {
    echo $idUsuario;
    echo $nombreCompra = $_REQUEST['nombreComprador'];
    echo $apellido = $_REQUEST['apellidoComprador'];
    echo $direccion = $_REQUEST['direccionUsuario'];
    echo $cp = $_REQUEST['cpUsuario'];
    echo $nombreLibro = $_REQUEST['nombreLibro'];
    $estado = "";
    if (isset($_REQUEST['check'])) {
        $estado = "Recogida de libro en Biblioteca";
    }else {
        $estado = "Entregar a domicilio";
    }
    include_once "../controlador/facturaCompra.php";


} else {

    $nombreUsuario =  $_SESSION['nombre']; //nombre usuario

    //cogemos el id del usuario
    $cliente = Persona::getIdByNombre($nombreUsuario); //se guarda la id por el nombre

    foreach ($cliente as $value) {
        $idUsuario = $value->getCodigo();
    }

    $correo = Persona::getApellidosById($idUsuario);


    foreach ($correo as $value) {
        $correo = $value->getCodigo(); //accedo al correo
    }
    $codigoLibro = $_REQUEST['codigo']; //id libro

    $libro = Libro::getNombrebyCodigo($codigoLibro);
    foreach ($libro as $value) {
        $nombreLibro = $value->getCodigo(); //accedo al correo
    }

    if (isset($idUsuario)) {

        include_once "../vista/formularioCompraLibro.php";
    }
}
