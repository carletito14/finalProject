<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.

if (!isset($_SESSION['nombre']) && (!isset($_SESSION['pass']))) { //si no existe la sesión nombre
    echo '<script type="text/javascript">
    alert("Espacio reservado para los administradores.");
    window.location.href="..";
    </script>';
}if (!Persona::esAdministrador($_SESSION['nombre'])) {
    echo '<script type="text/javascript">
    alert("Espacio reservado para los administradores.");
    window.location.href="..";
    </script>';
}
else {
    include_once "../vista/listaUsuarioAdmin.php";

}
