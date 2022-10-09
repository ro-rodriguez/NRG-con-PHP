<?php
/**
 * Obtiene todos los productos
 *
 * @param PDO $db
 * @return Producto[]
 */
function productosTodos(PDO $db): array {
    $query = "SELECT * FROM productos";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS, Producto::class);

    return $stmt->fetchAll();
}

/**
* Retorna el producto con el $id.
* De lo contrario retorna null.
*
* @param PDO $db
* @param int $id
* @return Producto|null
*/
function productosTraerPorId(PDO $db, int $id): ?Producto {
    $query = "SELECT * FROM productos
    WHERE producto_id = ?";
    $stmt = $db->prepare($query);

    $stmt->execute([$id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, Producto::class);

    $producto = $stmt->fetch();

    if(!$producto) {
    return null;
    }
    return $producto;
}

