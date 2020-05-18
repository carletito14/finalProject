<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
$libro = Libro::getLibros(); //lo mismo para los libros


if (!isset($_SESSION['nombre']) && (!isset($_SESSION['pass']))) { //si no existe la sesión nombre

    echo '<script type="text/javascript">
    alert(" Debe iniciar sesión para acceder al contenido de esta página.");
    window.location.href="..";
    </script>';
}else {
 include_once "../vista/listaUsuarioNormal.php";

    
}
