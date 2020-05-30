<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();
include_once "../modelo/Persona.php";

if (!Persona::esAdministrador($_SESSION['nombre'])) {
    echo '<script type="text/javascript">
    alert("Espacio reservado para los administradores.");
    window.location.href="..";
    </script>';
} else {

    //recoger la cantidad de libros que hay
    $librosTotales = $_REQUEST['totalLibros'];

    include_once "../vista/formularioAniadeLibro.php";
}
