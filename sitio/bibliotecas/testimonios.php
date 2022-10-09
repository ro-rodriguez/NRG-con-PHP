<?php

/**
 * Obtiene todos los testimonios.
 *
 * @param PDO $db
 * @return Testimonio[]
 */
function testimoniosTodos(PDO $db):array {
    $query = "SELECT * FROM testimonios";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS, Testimonio::class);

    return $stmt->fetchAll();
}

/**
* Retorna el testimonio con el $id.
* De lo contrario retorna null.
*
* @param PDO $db
* @param int $id
* @return Testimonio|null
*/
function testimoniosTraerPorId(PDO $db, int $id): ?Testimonio {
    $query = "SELECT * FROM testimonios
            WHERE testimonio_id = ?";
    $stmt = $db->prepare($query);

    $stmt->execute([$id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, Testimonio::class);

    $testimonio = $stmt->fetch();

    if(!$testimonio) {
        return null;
    }
    return $testimonio;
}
 
