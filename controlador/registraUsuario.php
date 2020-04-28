<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Persona.php";

if (isset($_REQUEST['nombre'])) {

    if (isset($_REQUEST['administradorSI'])) {

        $persona = new Persona("", $_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['pass'],1);
        $persona->insert();
        echo '<script type="text/javascript">
        alert("Tarea Guardada");
        window.location.href="..";
        </script>';
    } else {

        $persona = new Persona("", $_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['pass'],0);
        $persona->insert();
        echo '<script type="text/javascript">
        alert("Tarea Guardada");
        window.location.href="..";
        </script>';
    }
}

include_once "../vista/formularioRegistro.php";
