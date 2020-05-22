<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Libros.php";
if (!isset($_REQUEST['nombreLibro'])) {
  $_REQUEST['nombreLibro'] = "";
}else {
    $libroIntroducido = $_REQUEST['nombreLibro'];
    $nombreLibro = Libro::getLibroByName($libroIntroducido);

include_once "../vista/listaUsuarioNormal.php";
}