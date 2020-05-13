<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();
include_once "../modelo/Persona.php";

/*if (isset(Persona::esAdministrador($_SESSION['nombre']))) {
    
}*/
$nombre = $_REQUEST['nombre']; //si este nombre no está en la bbdd, debe registrarse
$pass = $_REQUEST['pass']; //si este nombre no está en la bbdd, debe registrarse
$nombreRegistrado = Persona::saberSiEstaNombre($nombre);
$contraseñaRegistrada = Persona::saberSiEstaContrasenia($pass);
$saberAdministrador = Persona::esAdministrador($nombreRegistrado);

if (($nombreRegistrado > 0) && ($contraseñaRegistrada > 0)) {

    if (!isset($_SESSION['nombre'])) {
        $_SESSION['nombre'] = $nombre;
        $_SESSION['pass'] = $pass;
    }

    $_SESSION['nombre'] = $nombre;
    $_SESSION['pass'] = $pass;
    echo '<script type="text/javascript">
    alert("Bienvenido '.$nombre.'");
    window.location.href="../controlador/index.php";
    </script>';
} else {
    echo '<script type="text/javascript">
    alert("Este usuario no existe, por favor, inténtalo de nuevo");
    window.location.href="..";
    </script>';
}
