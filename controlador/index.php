<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Persona.php";
include_once "../modelo/Libros.php";
$personas = Persona::getPersonas();//almacenamos todas las personas en esta variable
$libro = Libro::getLibros(); //lo mismo para los libros

session_start();
if (!isset($_SESSION['nombre']) && (!isset($_SESSION['pass']))) { //si no existe la sesión nombre
    include_once "../vista/listaAnonimo.php";
} elseif (!Persona::esAdministrador($_SESSION['nombre'])) {
   
        include_once "../controlador/listaUsuarioNormal.php";
    
}else {
    
    $librosTotales = Libro::getCountLibros();//recogemos el total de todos los libros
    include_once "../controlador/listaUsuarioAdmin.php";

}
    
    
    
    
    
    //include_once "../vista/listaUsuarioNormal.php";
