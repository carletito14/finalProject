<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();
include_once "../modelo/Libros.php";
include_once "../modelo/Persona.php";

if (!Persona::esAdministrador($_SESSION['nombre'])) {
    echo '<script type="text/javascript">
    alert("Espacio reservado para los administradores.");
    window.location.href="..";
    </script>';
} else {

    if (isset($_REQUEST['idCliente'])) {

        $idLibro = ($_REQUEST['idLibro']);
        $idCliente = ($_REQUEST['idCliente']);

        ConexionDB::devolverLibro($idLibro, $idCliente);
    } else {
        echo '<script type="text/javascript">
    alert("No cliente selecccionado.");
    window.location.href="..";
    </script>';
    }
}
