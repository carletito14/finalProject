<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.

//recogemos los datos del usuario

if (isset($_REQUEST['codigo'])) {
    $codigo = $_REQUEST['codigo'];
    $nombre = $_REQUEST['nombre'];
    $correo = $_REQUEST['apellidos'];
?>
    <div class="d-flex justify-content-center">

        <h3><?php 
          
            echo $nombre ?> &nbsp&nbsp&nbsp<span class="badge badge-secondary">Código -><?php echo $codigo ?></span></h3>
    </div>
<?php

    include_once "../vista/verLibrosUsuario.php";
} else {
    header("location: ..");
}
