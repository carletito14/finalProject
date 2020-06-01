<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.
include_once "../modelo/Persona.php";

$codigo = $_REQUEST['codigo'];

$hacerAdmin = Persona::hacerAdministrador($_REQUEST['codigo']);
echo '<script type="text/javascript">
alert("Administrador actualizado correctamente.");
window.location.href="../controlador/listaUsuarios.php";
</script>'; 