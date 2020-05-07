<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.

//include_once "../modelo/Persona.php";


//$personas = Persona::getPersonas();
session_start();
if (!isset($_SESSION['nombre']) && (!isset($_SESSION['pass']) )) {//si no existe la sesión nombre
    include_once "../vista/listaAnonimo.php";
    }else {//si existe va aquí
        include_once "../controlador/listaUsuarioNormal.php";

    }
    
    
    
    
    //include_once "../vista/listaUsuarioNormal.php";
