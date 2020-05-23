<?php
include_once "../modelo/ConexionDB.php";
//codigo, nombre, autor, descripción.
class Libro
{
    private $codigo, $nombre, $autor, $descripcion;

    public function __construct($codigo, $nombre = "", $autor = "", $descripcion = "") 
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->autor = $autor;
        $this->descripcion = $descripcion;
    }

    public static function totalLibros()
    {
        $conexion = ConexionDB::conectar(); //conectamos
        

            $consulta = $conexion->query("SELECT COUNT(codigo) as cantidad FROM libros");
            $libro = $consulta->fetchColumn();
            $libro=$libro/4;
            echo $libro;
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
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }


    //funciones


    //función para insertar un libro
    public function insert()
    {
        $conexion = ConexionDB::conectar(); //conectamos


        $insertar = "INSERT into libros(nombre,autor,descripcion,) VALUES
    ('" . $this->nombre . "','" . $this->autor . "','" . $this->descripcion . "')";

        $conexion->exec($insertar); //ejecutamos


    }

    //función para eliminar un libro
    public function delete()
    {
        $conexion = ConexionDB::conectar(); //conectamos
        if (!is_null($conexion)) {
            $borrar = ("DELETE FROM libros WHERE codigo=" . $this->getCodigo());
            $conexion->exec($borrar);
        }
    }

    //función para actualizar un libro
    public function update()
    {
        $conexion = ConexionDB::conectar(); //conectamos
        //consulta
        $insertar = "UPDATE libros SET nombre='" . $this->getNombre() . "', autor = '" . $this->getAutor() . "',
         descipcion = '" . $this->getDescripcion() . "' WHERE codigo=" . $this->getCodigo();
        $conexion->exec($insertar); //ejecutamos
    }

    //función para recoger todos los libros de la base de datos y poder mostrarlos

    public static function getLibros()
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT * FROM libros");
            $salida = [];
            while ($libro = $consulta->fetchObject()) {

                $salida[] = new Libro($libro->codigo, $libro->nombre, $libro->autor, $libro->descripcion);
            }
            return $salida;
        }
    }


    public static function getLibrosLimit($valor) //para lista listar los libros
    {
        $conexion = ConexionDB::conectar(); //conectamos
        

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT * FROM libros LIMIT $valor,4");
            
            $salida = [];
            while ($libro = $consulta->fetchObject()) {

                $salida[] = ['codigo'=>$libro->codigo,'nombre'=>$libro->nombre, 'autor'=>$libro->autor, 'descripcion'=>$libro->descripcion];
            }
            return $salida;
        }
    }
    public static function getLibrosTotales()
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT count(*) FROM libros");
            $salida = [];
            while ($libro = $consulta->fetchObject()) {

                $salida[] = new Libro($libro->codigo, $libro->nombre, $libro->autor, $libro->descripcion);
            }
            return $salida;
        }
    }
    public static function getLibroByName($nombre)
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT * FROM libros where nombre  LIKE '%$nombre%'");
            $salida = [];
            while ($libro = $consulta->fetchObject()) {

                $salida[] = new Libro($libro->codigo, $libro->nombre, $libro->autor, $libro->descripcion);
            }
            return $salida;
        }
    }
    public static function getLibroByCodigo($codigo)
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT * FROM libros where codigo  LIKE '$codigo'");
            $salida = [];
            while ($libro = $consulta->fetchObject()) {

                $salida[] = new Libro($libro->codigo, $libro->nombre, $libro->autor, $libro->descripcion);
            }
            return $salida;
        }
    }
    public static function getIdPersonaByNombre($nombre)
    {
        $conexion = ConexionDB::conectar(); //conectamos

        if (!is_null($conexion)) {
            $consulta = $conexion->query("SELECT codigo FROM persona where nombre  LIKE '$nombre'");
            $salida = [];
            while ($libro = $consulta->fetchObject()) {

                $salida[] = new Libro($libro->codigo, $libro->nombre, $libro->autor, $libro->descripcion);
            }
            return $salida;
        }
    }
   


}
?>