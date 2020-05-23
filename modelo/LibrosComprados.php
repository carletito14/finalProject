<?php
include_once "../modelo/ConexionDB.php";

class LibrosComprados
{
    private $idCliente, $idLibro;

    public function __construct($idCliente="", $idLibro="")
    {
        $this->idCliente = $idCliente;
        $this->idLibro = $idLibro;
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

    
    //función para comprar un libro
    public function compraLibro()
    {
        $conexion = ConexionDB::conectar(); //conectamos


        $insertar = "INSERT into librosComprados(idCliente,idLibro) VALUES
        ('" . $this->idCliente . "','" . $this->idLibro . "')";

        $conexion->exec($insertar); //ejecutamos
        
    }
     
}
