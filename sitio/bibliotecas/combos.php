<?php
/**
 * Obtiene todos los combos
 *
 * @param PDO $db
 * @return Combo[]
 */
function combosTodos(PDO $db): array {
    $query = "SELECT * FROM combos";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS, Combo::class);

    return $stmt->fetchAll();
}

/**
* Retorna el combo con el $id.
* De lo contrario retorna null.
*
* @param PDO $db
* @param int $id
* @return Combo|null
*/
function combosTraerPorId(PDO $db, int $id): ?Combo{
    $query = "SELECT * FROM combos
    WHERE combo_id = ?";
    $stmt = $db->prepare($query);

    $stmt->execute([$id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, Combo::class);

    $combo = $stmt->fetch();

    if(!$combo) {
    return null;
    }
    return $combo;
}