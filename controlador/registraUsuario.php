<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Persona.php";





if (isset($_REQUEST['nombre'])) {

    if (Persona::saberSiEstaNombre($_REQUEST['nombre']) == 0) {

        if ($_REQUEST['pass'] == $_REQUEST['pass1']) {

            if (isset($_REQUEST['administradorSI'])) {

                $persona = new Persona("", $_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['pass'], 1);
                $persona->insert();
                echo '<script type="text/javascript">
        alert("Usuario administrador guardado.");
        window.location.href="..";
        </script>';
            } else {

                $persona = new Persona("", $_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['pass'], 0);
                $persona->insert();
                echo '<script type="text/javascript">
        alert("Usuario normal guardado.");
        window.location.href="..";
        </script>';
            }
        } else {
            echo '<script type="text/javascript">
        alert("Las contraseñas deben coincidir.");
        window.location.href="../vista/formularioRegistro.php";
        </script>';
        }
    } else {

        echo '<script type="text/javascript">
            alert("Este usuario no está disponible.");
            window.location.href="../vista/formularioRegistro.php";
            </script>';
    }
}
include_once "../vista/formularioRegistro.php";