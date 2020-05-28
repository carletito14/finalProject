<?php
error_reporting(E_ALL); //           Esto para que 
ini_set('display_errors', 'on'); //   salgan errores.

include_once "../Modelo/Libros.php";
if (isset($_REQUEST['editarLibro'])) {


    $libroParaEditar = Libro::getLibroByCodigo2($_REQUEST['editarLibro']); //seleccionamos el id de la persona
  

        $libroParaEditar->setNombre($_REQUEST['nombre']);
        $libroParaEditar->setAutor($_REQUEST['autor']);
        $libroParaEditar->setDescripcion($_REQUEST['descripcion']);
        $libroParaEditar->update();

        echo '<script type="text/javascript">
        alert("Persona editada correctamente.");
        window.location.href="..";
        </script>';
    
} else {
    $libroParaEditar = Libro::getLibroByCodigo2($_REQUEST['codigoLibro']);
    include_once "../vista/actualizarLibros.php";
}
