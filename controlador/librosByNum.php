<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Libros.php";

$numero = $_REQUEST['num']; //recogemos el número
$recoger = Libro::getLibrosLimit($numero);

echo json_encode($recoger);//lo pasamos por json
