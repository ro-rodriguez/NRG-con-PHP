<?php

/**
 * Obtiene todos los temas.
 *
 * @param PDO $db
 * @return Tema[]
 */
function temasTodos(PDO $db):array {
    $query = "SELECT * FROM temas";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS, Tema::class);

    return $stmt->fetchAll();
}

/**
* Retorna el tema con el $id.
* De lo contrario retorna null.
*
* @param PDO $db
* @param int $id
* @return Tema|null
*/
function temasTraerPorId(PDO $db, int $id): ?Tema {
    $query = "SELECT * FROM temas
    WHERE tema_id = ?";
    $stmt = $db->prepare($query);

    $stmt->execute([$id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, Tema::class);

    $tema = $stmt->fetch();

    if(!$tema) {
    return null;
    }
    return $tema;
}
 

