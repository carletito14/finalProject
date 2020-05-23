<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();
include_once "../modelo/Persona.php";
include_once "../modelo/LibrosComprados.php";


if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
    $cliente = Persona::getIdByNombre($nombre);//cogemos el id de la sesión
    foreach ($cliente as $value) {
        $idUsuario = $value->getCodigo();
    }
    include_once "../vista/misLibros.php"; //mandamos a vista las variables nombre y
}else {
    echo '<script type="text/javascript">
    alert(" Debe iniciar sesión para acceder al contenido de esta página.");
    window.location.href="..";
    </script>';
}

