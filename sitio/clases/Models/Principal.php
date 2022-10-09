<?php
namespace App\Models;

use App\DB\Conexion;
use PDO;
use PDOException;

class Principal
{
    /**
     * @var int
     */
    protected $principal_id;
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
    protected $texto;
    /**
    * @var string
    */
    protected $url;
    /**
    * @var string
    */
    protected $boton;

       /*
     |--------------------------------------------------------------------------
     | Busca todos los principales de la base de datos.
     |--------------------------------------------------------------------------
     */
    /**
     * Busca todas las noticias de la base de datos.
     *
     * @return Principal[]
     */
    public function todo(): array
    {
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM principal";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        return $stmt->fetchAll();
    }

    /*
     |--------------------------------------------------------------------------
     | Trae los principales asociados a la $pk.
     |--------------------------------------------------------------------------
     */

     /**
     * Trae los principales asociados a la $pk.
     *
     * @param int $pk
     * @return Principal|null
     */
    public function traerPorPk(int $pk): ?Principal{
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM principal
              WHERE principal_id = ?";
        $stmt = $db->prepare($query);

        $stmt->execute([$pk]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        $principal = $stmt->fetch();

        if(!$principal) {
            return null;
        }

        return $principal;
    }

        /*
     |--------------------------------------------------------------------------
     | Getters y Setters
     |--------------------------------------------------------------------------
     */

    /**
     * @return int
     */
    public function getPrincipalId(): int
    {
        return $this->principal_id;
    }
    /**
     * @param int $principal_id
     */
    public function setPrincipalId(int $principal_id): void 
    {
        $this->principal_id = $principal_id;
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
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
    * @param string $url
    */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

     /**
    * @return string 
    */
    public function getBoton(): string
    {
        return $this->boton;
    }
    /**
    * @param string $boton
    */
    public function setBoton(string $boton): void
    {
        $this->boton = $boton;
    }
}