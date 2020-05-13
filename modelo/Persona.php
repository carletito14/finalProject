<?php
include_once "../modelo/ConexionDB.php";
//codigo, nombre, apellidos, contraseña, foto.
class Persona
{
    private $codigo, $nombre, $apellidos, $pass, $administrador;

    public function __construct($codigo, $nombre = "", $apellidos = "", $pass = "",$administrador = false) //se sobrecarga el método(opcional)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->pass = $pass;
        $this->administrador = $administrador;
    }

    /**
     * Get the value of codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of administrador
     */
    public function getAdministrador()
    {
        return $this->administrador;
    }

    /**
     * Set the value of administrador
     *
     * @return  self
     */
    public function setAdministrador($administrador)
    {
        $this->administrador = $administrador;

        return $this;
    }
    public function insert()
    {
        $conexion = ConexionDB::conectar(); //conectamos


        $insertar = "INSERT into personas(nombre,apellidos,pass,administrador) VALUES
        ('" . $this->nombre . "','" . $this->apellidos . "','" . $this->pass . "','" . $this->administrador . "')";

        $conexion->exec($insertar); //ejecutamos

    }
    public function delete()
    {
        $conexion = ConexionDB::conectar(); //conectamos
        if (!is_null($conexion)) {
            $borrar = ("DELETE FROM personas WHERE codigo=" . $this->getCodigo());
            $conexion->exec($borrar);
        }
    }
    public function update()
    {
        $conexion = ConexionDB::conectar(); //conectamos
        //consulta
        $insertar = "UPDATE personas SET nombre='" . $this->getNombre() . "', apellidos = '" . $this->getApellidos() . "',
         pass = '" . $this->getPass() . "' WHERE codigo=" . $this->getCodigo();
        $conexion->exec($insertar); //ejecutamos
    }

    public static function getPersonas()
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT * FROM personas");
            $salida = [];
            while ($persona = $consulta->fetchObject()) {

                $salida[] = new Persona($persona->codigo, $persona->nombre, $persona->apellidos, $persona->pass, $persona->administrador);
            }
            return $salida;
        }
    }
    public static function saberSiEstaNombre($nombre)
    {
        $conexion = ConexionDB::conectar(); //conectamos

        $consulta = $conexion->query("SELECT * FROM personas WHERE nombre like '$nombre'");

        return $consulta->rowCount();
    }
    public static function saberSiEstaContrasenia($pass)
    {
        $conexion = ConexionDB::conectar(); //conectamos

        $consulta = $conexion->query("SELECT * FROM personas WHERE pass like '%$pass%'");

        return $consulta->rowCount();
    }
    public static function getPersonaByNombre($nombre)
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT * FROM personas WHERE nombre like '%$nombre%'");
            $persona = $consulta->fetchObject();

            return new Persona($persona->codigo, $persona->nombre, $persona->apellidos, $persona->pass);
        }
    }
    public function borrarAlumno()
    {
        $conexion = ConexionDB::conectar(); //conectamos
        if (!is_null($conexion)) {
            $borrar = ("DELETE FROM personas WHERE codigo=" . $this->getCodigo());
            $conexion->exec($borrar);
        }
    }
    public static function getPersonaById($codigo)
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT * FROM personas WHERE codigo like '$codigo'");
            $persona = $consulta->fetchObject();

            return new Persona($persona->codigo, $persona->nombre, $persona->apellidos, $persona->pass);
        }
    }
    public static function esAdministrador($nombre)
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT * FROM personas WHERE nombre like '$nombre' and administrador=1");
            if ($consulta->rowCount() > 0) {
                return true;
            }

            return false;
        }
    }

}
