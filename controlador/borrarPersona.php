<?php
include_once "../Modelo/Persona.php";
session_start();

if (!isset($_SESSION['nombre'])) {
    echo '<script type="text/javascript">
    alert("Debe iniciar sesión para acceder a esta página.");
    window.location.href="..";
    </script>';
} else {
    if (isset($_REQUEST['confirmarBorrar'])) {

        $personaBorrar = new Persona($_REQUEST['codigo']);
        //ejecutamos la consulta
        $personaBorrar->borrarPersona();
        header("location: ..");
    }
    include "../vista/confirmaBorrar.php";
}
