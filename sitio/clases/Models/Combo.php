<?php
namespace App\Models;

use App\DB\Conexion;
use PDO;
use PDOException;

class Combo
{
    /**
     * @var int
     */
    protected $combo_id;
    /**
     * @var string
     */
    protected $fecha;
    /**
     *@var string
     */
    protected $titulo_identificacion;

    /**
     *@var string
     */
    protected $titulo;

    /**
     *@var string
     */
    protected $titulo_imagen;

    /**
     *@var string
     */
    protected $imagen;

    /**
     *@var string
     */
    protected $imagen_descripcion;

    /**
     *@var array
     */
    protected $beneficios=[];

     /*
     |--------------------------------------------------------------------------
     | Busca todas los combos de la base de datos.
     |--------------------------------------------------------------------------
     */
    /**
     * Busca todas los combos de la base de datos.
     *
     * @return Combo[]
     */
    public function todo(): array {
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM combos";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        return $stmt->fetchAll();
    }
    /*
     |--------------------------------------------------------------------------
     | Trae el combo asociado a la $pk.
     |--------------------------------------------------------------------------
     */

     /**
     * Trae el combo asociado a la $pk.
     *
     * @param int $pk
     * @return Combo|null
     */
    public function traerPorPk(int $pk): ?Combo{
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM combos
              WHERE combo_id = ?";
        $stmt = $db->prepare($query);

        $stmt->execute([$pk]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        $combo = $stmt->fetch();

        if(!$combo) {
            return null;
        }
        return $combo;
    }
     

    /*
     |--------------------------------------------------------------------------
     | Setters y getters
     |--------------------------------------------------------------------------
     */

    /**
     * @return int
     */
    public function getComboId(): int
    {
        return $this->combo_id;
    }
    /**
     * @param int $combo_id
     */
    public function setComboId(int $combo_id): void 
    {
        $this->combo_id = $combo_id;
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

    /**
     *@return string
     */
    public function getTituloIdentificacion(): string
    {
        return $this->titulo_identificacion;
    }
    /**
     *@param string $titulo_identificacion
     */
    public function setTituloIdentificacion(string $titulo_identificacion): void 
    {
        $this->titulo_identificacion = $titulo_identificacion;
    }



    /**
     *@return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }
    /**
     *@param string $titulo
     */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }


    /**
     *@return string
     */
    public function getTituloImagen():string
    {
        return $this->titulo_imagen;
    }

    /**
     *@param string $titulo_imagen
     */
    public function setTituloImagen(string $titulo_imagen): void
    {
        $this->titulo_imagen = $titulo_imagen;
    }


    /**
     *@return string
     */
    public function getImagen():string
    {
        return $this->imagen;
    }

    /**
     *@param string $imagen
     */
    public function setImagen(string $imagen): void
    {
        $this->imagen = $imagen;
    }


    /**
     *@return string
     */
    public function getImagenDescripcion():string
    {
        return $this->imagen_descripcion;
    }

    /**
     *@param string $imagen_descripcion
     */
    public function setImagenDescripcion(string $imagen_descripcion): void
    {
        $this->imagen_descripcion = $imagen_descripcion;
    }


    /**
     * @return array
     */
    public function getBeneficios():array
    {
        return $this->beneficios;
    }

    /**
     *@param array $beneficios
     */
    public function setBeneficios(array $beneficios): void
    {
        $this->beneficios = $beneficios;
    }
}
