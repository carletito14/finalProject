<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Libros.php";
include_once "../modelo/Persona.php";


if (isset($_REQUEST['idCliente'])) {

    $idLibro = ($_REQUEST['idLibro']);
    $idCliente = ($_REQUEST['idCliente']);

    ConexionDB::devolverLibro($idLibro,$idCliente);

   
    
}
