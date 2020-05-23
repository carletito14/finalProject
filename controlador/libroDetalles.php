<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.

include_once "../modelo/Libros.php";
//se recogen los datos del libro enviados mediante AJAX
$codigo = $_REQUEST['codigo']; //este recoge el codigo de ajax o el de php


$recogerDatos = Libro::getLibroByCodigo($codigo); //seleccionamos los apartados del libro seleccionado

    foreach ($recogerDatos as $value) {

        $nombre = $value->getNombre();
        $autor =  $value->getAutor();
        $descripcion = $value->getDescripcion();
    }
    include_once "../vista/libroDetalles.php";

