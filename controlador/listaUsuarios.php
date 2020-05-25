<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();


if (!isset($_SESSION['nombre'])) {
    echo '<script type="text/javascript">
    alert("Debe iniciar sesión para acceder a esta página.");
    window.location.href="..";
    </script>'; 
}else{
include_once "../modelo/Persona.php";

$usuariosTotales = Persona::getPersonas();       
include_once "../vista/listaUsuarios.php";   

}

