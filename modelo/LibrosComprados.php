<?php
include_once "../modelo/ConexionDB.php";

class LibrosComprados
{
    private $idCliente, $idLibro, $fechaDevolucion;

    public function __construct($idCliente="", $idLibro="", $fechaDevolucion="")
    {
        $this->idCliente = $idCliente;
        $this->idLibro = $idLibro;
        $this->fechaDevolucion = $fechaDevolucion;
    }


    /**
     * Get the value of idCliente
     */ 
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idCliente
     *
     * @return  self
     */ 
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get the value of idLibro
     */ 
    public function getIdLibro()
    {
        return $this->idLibro;
    }

    /**
     * Set the value of idLibro
     *
     * @return  self
     */ 
    public function setIdLibro($idLibro)
    {
        $this->idLibro = $idLibro;

        return $this;
    }

    /**
     * Get the value of fechaDevolucion
     */ 
    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    /**
     * Set the value of fechaDevolucion
     *
     * @return  self
     */ 
    public function setFechaDevolucion($fechaDevolucion)
    {
        $this->fechaDevolucion = $fechaDevolucion;

        return $this;
    }
    
    //función para comprar un libro
    public function alquilaLibro()
    {
        $conexion = ConexionDB::conectar(); //conectamos


        $insertar = "INSERT into librosComprados(idCliente,idLibro,fechaDevolucion) VALUES
        ('" . $this->idCliente . "','" . $this->idLibro . "','" . $this->fechaDevolucion . "')";

        $conexion->exec($insertar); //ejecutamos
        
    }
    public static function getLibrosByIdUsuario($idCliente)
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT idLibro FROM librosComprados WHERE idCliente like '$idCliente'");
            $libros = $consulta->fetchObject();

            return new LibrosComprados($libros->idLibro);
        }
    }

    
}
