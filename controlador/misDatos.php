<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
session_start();

include_once "../modelo/Persona.php";
$persona = Persona::getPersonaByNombre($_SESSION['nombre']);

if (isset($_REQUEST['modificaPersona'])) {
    $persona = Persona::getPersonaById($_REQUEST['codigo']);

    if (Persona::saberSiEstaNombre($_REQUEST['nombre']) == 0) { //si no hay nadie que se llame así, metemos valores
        $persona->setNombre($_REQUEST['nombre']);
        $persona->setApellidos($_REQUEST['apellidos']);
        $persona->setPass($_REQUEST['pass']);
        $persona->update(); //actualizamo persona
        $_SESSION['nombre'] = $persona->getNombre(); //actualizamos la sesión
        //metemos la consula en la bbdd
        echo '<script type="text/javascript">
        alert("Usuario modificado correctamente.");
        window.location.href="..";
        </script>';
    } elseif ($_REQUEST['nombre'] == $_SESSION['nombre']) { //si quieren modificar otro campo que no sea el del nombre
        $persona->setApellidos($_REQUEST['apellidos']);     // pero quieren dejar un nombre ya registado
        $persona->setPass($_REQUEST['pass']);
        $persona->update(); //actualizamo persona
        $_SESSION['nombre'] = $persona->getNombre(); //actualizamos la sesión
        //metemos la consula en la bbdd
        echo '<script type="text/javascript">
        alert("Usuario modificado correctamente.");
        window.location.href="..";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Este usuario no está disponible.");
        window.location.href="..";
        </script>';
    }
} else {
    include_once "../vista/misDatos.php";
}
