<?php
namespace App\Models;

use App\DB\Conexion;
use PDO;
use PDOException;

class Testimonio
{
    /**
     * @var int
     */
    protected $testimonio_id;
    /**
     * @var string
     */
    protected $fecha;
    /**
    * @var string
    */
    protected $nombre;
    /**
    * @var string
    */
    protected $texto;
     /**
     * @var string
     */
    protected $localidad;
    /**
    * @var string
    */
    protected $provincia;
    /**
    * @var string
    */
    protected $profesion;
     /**
    * @var string
    */
    protected $imagen;
    /**
    * @var string
    */
    protected $imagen_descripcion;

    /*
     |--------------------------------------------------------------------------
     | Busca todas los testimonios de la base de datos.
     |--------------------------------------------------------------------------
     */
    /**
     * Busca todas los testimonios de la base de datos.
     *
     * @return Testimonio[]
     */
    public function todo(): array
    {
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM testimonios";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        return $stmt->fetchAll();
    }

    /*
     |--------------------------------------------------------------------------
     | Trae el testimonio asociado a la $pk.
     |--------------------------------------------------------------------------
     */
     /**
     * Trae el testimonio asociado a la $pk.
     *
     * @param int $pk
     * @return Testimonio|null
     */
    public function traerPorPk(int $pk): ?Testimonio
    {
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM testimonios
              WHERE testimonio_id = ?";
        $stmt = $db->prepare($query);

        $stmt->execute([$pk]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        $testimonio = $stmt->fetch();

        if(!$testimonio) {
            return null;
        }

        return $testimonio;
    }

    /*
     |--------------------------------------------------------------------------
     | Crea un testimonio en la base de datos.
     |--------------------------------------------------------------------------
     */
    /**
     * Crea un testimonio en la base de datos.
     *
     * @param array $data
     * @throws PDOException
     */
    public function crear(array $data)
    {
        $db = (new Conexion())->getConexion();
        $query = "INSERT INTO testimonios(nombre, texto, localidad, provincia, profesion, imagen, imagen_descripcion, fecha, usuario_fk)
                VALUES (:nombre, :texto, :localidad, :provincia, :profesion, :imagen, :imagen_descripcion, NOW(), :usuario_fk)";
        $stmt = $db->prepare($query);
        $stmt->execute([ 
            'nombre'                => $data['nombre'],
            'texto'                 => $data['texto'],
            'localidad'             => $data['localidad'],
            'provincia'             => $data['provincia'],
            'profesion'             => $data['profesion'],
            'imagen'                => $data['imagen'],
            'imagen_descripcion'    => $data['imagen_descripcion'],
            'usuario_fk'            => $data['usuario_fk'],
        ]);
    }

    /*
     |--------------------------------------------------------------------------
     | Edita el testimonio con la PK $pk en la base de datos.
     |--------------------------------------------------------------------------
     */
    /**
     * Edita el testimonio con la PK $pk en la base de datos.
     *
     * @param int $pk
     * @param array $data
     */
    public function editar(int $pk, array $data)
    {
        $db = (new Conexion())->getConexion();
        $query = "UPDATE testimonios
                  SET nombre = :nombre,
                    texto = :texto,
                    localidad = :localidad,
                    provincia = :provincia,
                    profesion = :profesion,
                    imagen = :imagen,
                    imagen_descripcion = :imagen_descripcion,
                    usuario_fk = :usuario_fk
                  WHERE testimonio_id = :testimonio_id";
        $stmt = $db->prepare($query);
        $stmt->execute([
            'nombre'                => $data['nombre'],
            'texto'                 => $data['texto'],
            'localidad'             => $data['localidad'],
            'provincia'             => $data['provincia'],
            'profesion'             => $data['profesion'],
            'imagen'                => $data['imagen'],
            'imagen_descripcion'    => $data['imagen_descripcion'],
            'usuario_fk'            => $data['usuario_fk'],
            'testimonio_id'         => $pk,
        ]);
    }

    /*
     |--------------------------------------------------------------------------
     | Elimina el testimonio por su PK de la base de datos.
     |--------------------------------------------------------------------------
     */

    /**
     * Elimina el testimonio por su PK de la base de datos.
     *
     * @param int $pk
     */
    public function eliminar(int $pk)
    {
        $db = (new Conexion())->getConexion();
        $query = "DELETE FROM testimonios
                    WHERE testimonio_id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$pk]);
    }


    /*
     |--------------------------------------------------------------------------
     | Setters y getters
     |--------------------------------------------------------------------------
     */
    /**
     * @return int
     */
    public function getTestimonioId(): int
    {
        return $this->testimonio_id;
    }
    /**
     * @param int $testimonio_id
     */
    public function setTestimonioId(int $testimonio_id): void 
    {
        $this->testimonio_id = $testimonio_id;
    }

    /**
    * @return string 
    */
    public function getNombre(): string
    {
        return $this->nombre;
    }
    /**
    * @param string $nombre
    */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }


    /**
    * @return string 
    */
    public function getImagen(): string
    {
        return $this->imagen;
    }
    /**
    * @param string $imagen
    */
    public function setImagen(string $imagen): void
    {
        $this->imagen = $imagen;
    }


     /**
    * @return string 
    */
    public function getImagenDescripcion(): string
    {
        return $this->imagen_descripcion;
    }
    /**
    * @param string $imagen_descripcion
    */
    public function setImagenDescripcion(string $imagen_descripcion): void
    {
        $this->imagen_descripcion = $imagen_descripcion;
    }


    /**
    * @return string 
    */
    public function getTexto(): string
    {
        return $this->texto;
    }
    /**
    * @param string $texto
    */
    public function setTexto(string $texto): void
    {
        $this->texto = $texto;
    }


    /**
    * @return string 
    */
    public function getLocalidad(): string
    {
        return $this->localidad;
    }
    /**
    * @param string $localidad
    */
    public function setLocalidad(string $localidad): void
    {
        $this->localidad= $localidad;
    }


    /**
    * @return string 
    */
    public function getProvincia(): string
    {
        return $this->provincia;
    }
    /**
    * @param string $provincia
    */
    public function setProvincia(string $provincia): void
    {
        $this->provincia= $provincia;
    }


    /**
    * @return string 
    */
    public function getProfesion(): string
    {
        return $this->profesion;
    }
    /**
    * @param string $profesion
    */
    public function setProfesion(string $profesion): void
    {
        $this->profesion= $profesion;
    }

    
    /**
     * @return string
     */
    public function getFecha(): string
    {
        return $this->fecha;
    }

    /**
     * @param string $fecha
     */
    public function setFecha(string $fecha): void
    {
        $this->fecha = $fecha;
    }
}