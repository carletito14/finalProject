<?php

abstract class ConexionDB
{ //1º Crear la conexión con la base de datos a través de un clase aislada.
    private static $url = "localhost";
    private static $usu = "root";
    private static $pass = "root";
    private static $nameDB = "proyecto";

    public static function conectar()
    {
        try {
            $conexion = new PDO("mysql:host=" . self::$url . ";dbname=" . self::$nameDB . ";charset=utf8", self::$usu, self::$pass);
        } catch (PDOException $e) {
            return null;
        }
        return $conexion;
    }

    public static function devolverLibro($idLibro, $idCliente)
    {

        $conexion = ConexionDB::conectar(); //conectamos

        $consulta = "DELETE FROM librosComprados WHERE idLibro=$idLibro and idCliente=$idCliente";
        $conexion->exec($consulta);
        echo '<script type="text/javascript">
    alert("Libro devuelto con éxito.");
    window.location.href="..";
    </script>';
    }
}
