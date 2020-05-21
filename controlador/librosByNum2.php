<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Libros.php";

$recoger = Libro::totalLibros();

echo $recoger;//lo pasamos por json
