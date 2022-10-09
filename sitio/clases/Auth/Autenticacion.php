<?php
namespace App\Auth;

use App\Models\Usuario;

class Autenticacion{
    /**
     * @var Usuario
     */
    protected $usuario;

    /**
     *
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function iniciarSesion(string $email, string $password): bool
    {
        $this->usuario = (new Usuario())->traerPorEmail($email);

        if($this->usuario === null) {
            return false;
        }

        if(!password_verify($password, $this->usuario->getPassword())) {
           return false;
        }

        $_SESSION['usuario_id'] = $this->usuario->getUsuarioId();
        return true;
    }

    public function cerrarSesion()
    {
        unset($_SESSION['usuario_id']);
    }

    /**
     *
     * @return bool
     */
    public function estaAutenticado(): bool
    {
        return isset($_SESSION['usuario_id']);
    }
}