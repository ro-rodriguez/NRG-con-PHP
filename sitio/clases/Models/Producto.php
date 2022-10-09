<?php
namespace App\Models;

use App\DB\Conexion;
use PDO;
use PDOException;


class Producto
{
    /**
     * @var int
     */
    protected $producto_id;
    /**
     * @var string
     */
    protected $imagen;
    /**
     * @var string
     */
    protected $fecha;
    /**
     * @var string
     */
    protected $imagen_descripcion;
    /**
     * @var string
     */
    protected $titulo;
    /**
     * @var string
     */
    protected $peso;

    /**
     * @var string
     */
    protected $texto;

    /**
     * @var int
     */
    protected $precio;

     /**
     * @var array
     */
    protected $sabor=[];
    /**
     * @var int
     */
    
    protected $porcion;
    /**
     * @var int
     */
    protected $porciones_envase;
    /**
     * @var int
     */
    protected $valor_energetico;
    /**
     * @var int
     */
    protected $carbohidratos;
    /**
     * @var int
     */
    protected $proteinas;
    /**
     * @var int
     */
    protected $grasas_totales;
      /**
     * @var int
     */
    protected $grasas_saturadas;
    /**
     * @var int
     */
    protected $grasas_trans;
     /**
     * @var int
     */
    protected $fibra;
     /**
     * @var int
     */
    protected $sodio;

     /*
     |--------------------------------------------------------------------------
     | Busca todas los productos de la base de datos.
     |--------------------------------------------------------------------------
     */
    /**
     * Busca todas los productos de la base de datos.
     *
     * @return Producto[]
     */
    public function todo(): array {
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM productos";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        return $stmt->fetchAll();
    }

    /*
     |--------------------------------------------------------------------------
     | Trae el producto asociada a la $pk.
     |--------------------------------------------------------------------------
     */

     /**
     * Trae el producto asociada a la $pk.
     *
     * @param int $pk
     * @return Producto|null
     */
    public function traerPorPk(int $pk): ?Producto{
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM productos
              WHERE producto_id = ?";
        $stmt = $db->prepare($query);

        $stmt->execute([$pk]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        $producto = $stmt->fetch();

        if(!$producto) {
            return null;
        }

        return $producto;
    }



     /*
     |--------------------------------------------------------------------------
     | Setters y getters
     |--------------------------------------------------------------------------
     */
    /**
     * @return int
     */
    public function getProductoId(): int
    {
        return $this->producto_id;
    }
    /**
     * @param int $producto_id
     */
    public function setProductoId(int $producto_id): void 
    {
        $this->producto_id = $producto_id;
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
    public function getPeso(): string
    {
        return $this->peso;
    }
    /**
     * @param string $peso
     */
    public function setPeso(string $peso):void
    {
        $this->peso = $peso;
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
     * @return int
     */
    public function getPrecio(): int
    {
        return $this->precio;
    }
     /**
     * @param int $precio
     */
    public function setPrecio(int $precio): void
    {
       $this->precio = $precio;
    }


     /**
     * @return array
     */
    public function getSabor(): array
    {
        return $this->sabor;
    }
     /**
     * @param array $sabor
     */
    public function setSabor(array $sabor): void
    {
       $this->sabor = $sabor;
    }

    
    /**
     * @return int
     */
    public function getPorcion(): int
    {
        return $this->porcion;
    }
    /**
     * @param int $porcion
     */
    public function setPorcion(int $porcion): void 
    {
        $this->porcion = $porcion;
    }

    /**
     * @return int
     */
    public function getPorcionesEnvase(): int
    {
        return $this->porciones_envase;
    }
    /**
     * @param int $porciones_envase
     */
    public function setPorcionesEnvase(int $porciones_envase): void 
    {
        $this->porciones_envase = $porciones_envase;
    }


    /**
     * @return int
     */
    public function getValorEnergetico(): int
    {
        return $this->valor_energetico;
    }
    /**
     * @param int $valor_energetico
     */
    public function setValorEnergetico(int $valor_energetico): void 
    {
        $this->valor_energetico= $valor_energetico;
    }


    /**
     * @return int
     */
    public function getCarbohidratos(): int
    {
        return $this->carbohidratos;
    }
    /**
     * @param int $pcarbohidratos
     */
    public function setCarbohidratos(int $carbohidratos): void 
    {
        $this->carbohidratos = $carbohidratos;
    }

    /**
     * @return int
     */
    public function getProteinas(): int
    {
        return $this->proteinas;
    }
    /**
     * @param int $proteinas
     */
    public function setProteinas(int $proteinas): void 
    {
        $this->proteinas = $proteinas;
    }


    /**
     * @return int
     */
    public function getGrasasTotales(): int
    {
        return $this->grasas_totales;
    }
    /**
     * @param int $grasas_totales
     */
    public function setGrasasTotales(int $grasas_totales): void 
    {
        $this->grasas_totales = $grasas_totales;
    }


    /**
     * @return int
     */
    public function getGrasasSaturadas(): int
    {
        return $this->grasas_saturadas;
    }
    /**
     * @param int $grasas_saturadas
     */
    public function setGrasasSaturadas(int $grasas_saturadas): void 
    {
        $this->grasas_saturadas = $grasas_saturadas;
    }

    /**
     * @return int
     */
    public function getGrasasTrans(): int
    {
        return $this->grasas_trans;
    }
    /**
     * @param int $grasas_trans
     */
    public function setGrasasTrans(int $grasas_trans): void 
    {
        $this->grasas_trans = $grasas_trans;
    }


    /**
     * @return int
     */
    public function getFibra(): int
    {
        return $this->fibra;
    }
    /**
     * @param int $fibra
     */
    public function setFibra(int $fibra): void 
    {
        $this->fibra = $fibra;
    }

    /**
     * @return int
     */
    public function getSodio(): int
    {
        return $this->sodio;
    }
    /**
     * @param int $sodio
     */
    public function setSodio(int $sodio): void 
    {
        $this->sodio = $sodio;
    }
}
  


