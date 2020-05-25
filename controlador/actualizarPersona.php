<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.

include_once "../Modelo/Persona.php";
if (isset($_REQUEST['editarPersona'])) {


    $personaEditar = Persona::getPersonaById($_REQUEST['editarPersona']); //seleccionamos el id de la persona

    if ((Persona::saberSiEstaNombre($_REQUEST['nombre']) == 0) || ($_REQUEST['nombre'] == $personaEditar->getNombre())) {

        $personaEditar->setNombre($_REQUEST['nombre']);
        $personaEditar->setApellidos($_REQUEST['correoElectronico']);
        $personaEditar->setPass($_REQUEST['pass']);
        $personaEditar->update();

        echo '<script type="text/javascript">
        alert("Persona editada correctamente.");
        window.location.href="../controlador/listaUsuarios.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Usuario no disponible.");
        window.location.href="..";
        </script>';
    }
} else {
    $personaEditar = Persona::getPersonaById($_REQUEST['codigo']);

    include_once "../vista/actualizarPersona.php";
}
