<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.

//recoger la cantidad de libros que hay
$librosTotales = $_REQUEST['totalLibros'];

include_once "../vista/formularioAniadeLibro.php";