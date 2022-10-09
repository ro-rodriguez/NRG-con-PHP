<?php
namespace App\Validators;


class TestimonioPublicarValidacion
{
    /**
     * @var array - Los datos a validar.
     */
    protected $data = [];

    /**
     * @var array - Los errores ocurridos en la validación.
     */
    protected $errores = [];

    /**
     * @param array $data - Los datos a validar.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Ejecuta las validaciones.
     */
    public function ejecutar(){
        // Nombre.
        if(empty($this->data['nombre'])) {
            $this->errores['nombre'] = "Debes escribir tu nombre";
        } else if(strlen($this->data['nombre']) < 3) { 
            $this->errores['nombre'] = "Requiere al menos 3 caracteres";
        }
    
        // Texto
        if(empty($this->data['texto'])) {
            $this->errores['texto'] = "Tenés que escribir el texto del testimonio";
        }
        
        // Localidad
        if(empty($this->data['localidad'])) {
            $this->errores['localidad'] = "Debes escribir tu localidad";
        } else if(strlen($this->data['localidad']) < 3) { 
            $this->errores['localidad'] = "Requiere al menos 3 caracteres";
        }
        
        // Provincia
        if(empty($this->data['provincia'])) {
            $this->errores['provincia'] = "Debes escribir tu provincia";
        } else if(strlen($this->data['provincia']) < 3) { 
            $this->errores['provincia'] = "Requiere al menos 3 caracteres";
        }

        // Profesion
        if(empty($this->data['profesion'])) {
            $this->errores['profesion'] = "Debes escribir tu profesion";
        } else if(strlen($this->data['profesion']) < 3) { 
            $this->errores['profesion'] = "Requiere al menos 3 caracteres";
        }

    }

    /**
     * Si ocurren errores en la validación de productos.
     *
     * @return bool
     */
    public function hayErrores(): bool
    {
        return count($this->errores) > 0;
    }

    /**
     * @return array
     */
    public function getErrores(): array
    {
        return $this->errores;
    }
}
