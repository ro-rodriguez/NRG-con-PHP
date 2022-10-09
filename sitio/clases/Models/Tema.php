<?php
namespace App\Models;

use App\DB\Conexion;
use PDO;
use PDOException;

class Tema
{
      /**
     * @var int
     */
    protected $tema_id;
    /**
    * @var string
    */
    protected $titulo;
    /**
    * @var string
    */
    protected $imagen;
    /**
    * @var string
    */
    protected $imagen_descripcion;
     /**
     * @var string
     */
    protected $id_for_boton;
    /**
    * @var string
    */
    protected $parrafo;
    /**
    * @var string
    */
    protected $leer_mas;

    /*
     |--------------------------------------------------------------------------
     | Busca todas los temas de la base de datos.
     |--------------------------------------------------------------------------
     */
    /**
     * Busca todas los temas de la base de datos.
     *
     * @return Tema[]
     */
    public function todo(): array {
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM temas";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        return $stmt->fetchAll();
    }

    /*
     |--------------------------------------------------------------------------
     | Trae el tema asociado a la $pk.
     |--------------------------------------------------------------------------
     */
     /**
     * Trae el tema asociada a la $pk.
     *
     * @param int $pk
     * @return Tema|null
     */
    public function traerPorPk(int $pk): ?Tema{
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM temas
              WHERE tema_id = ?";
        $stmt = $db->prepare($query);

        $stmt->execute([$pk]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        $tema = $stmt->fetch();

        if(!$tema) {
            return null;
        }

        return $tema;
    }

    /*
     |--------------------------------------------------------------------------
     | Setters y getters
     |--------------------------------------------------------------------------
     */
    /**
     * @return int
     */
    public function getTemaId(): int
    {
        return $this->tema_id;
    }
    /**
     * @param int $tema_id
     */
    public function setTemaId(int $tema_id): void 
    {
        $this->tema_id = $tema_id;
    }

    /**
    * @return string 
    */
    public function getTitulo(): string
    {
        return $this->titulo;
    }
    /**
    * @param string $titulo
    */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
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
    public function getBoton(): string
    {
        return $this->id_for_boton;
    }
    /**
    * @param string $id_for_boton
    */
    public function setBoton(string $id_for_boton): void
    {
        $this->id_for_boton = $id_for_boton;
    }


    /**
    * @return string 
    */
    public function getParrafo(): string
    {
        return $this->parrafo;
    }
    /**
    * @param string $parrafo
    */
    public function setParrafo(string $parrafo): void
    {
        $this->parrafo= $parrafo;
    }


    /**
    * @return string 
    */
    public function getLeerMas(): string
    {
        return $this->leer_mas;
    }
    /**
    * @param string $leer_mas
    */
    public function setLeerMas(string $leer_mas): void
    {
        $this->leer_mas= $leer_mas;
    }
}