<?php
/**
 * @return string[][]
 */
function getRutasSitio(): array {
    return [
        'principal' => [
            'title' => 'Inicio',
        ],
        'temas' => [
            'title' => 'Nosotros',
        ],
        'productos' => [
            'title' => 'Catalogo de productos',
        ],
        'productos-leer' => [
            'title' => 'Leer productos',
        ],
        'testimonios' => [
            'title' => 'Testimonios',
        ],
        'contacto' => [
            'title' => 'Contacto',
        ],
        'gracias' => [
            'title' => 'Gracias',
        ],
        'iniciar-sesion' => [
            'title' => 'Iniciar Sesión',
        ],
        'registrarse' => [
            'title' => 'Registrarse',
        ],
    ];
}

/**
 * Las rutas del panel de administración.
 *
 * @return array
 */
function getRutasAdmin(): array {
    return [
        'principal' => [
            'title' => 'Inicio',
            'autenticacion' => true,
        ],
        'login' => [
            'title' => 'Iniciar Sesión',
        ],
        'testimonios' => [
            'title' => 'Administrar Testimonios',
            'autenticacion' => true,
        ],
        'testimonios-nuevo' => [
            'title' => 'Publicar Testimonio',
            'autenticacion' => true,
        ],
        'testimonios-editar' => [
            'title' => 'Editar Testimonio',
            'autenticacion' => true,
        ],
    ];
}


