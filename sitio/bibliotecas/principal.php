<?php

/**
 * Obtiene todos los principales
 *
 * @param PDO $db
 * @return Principal[]
 */
function principalesTodos(PDO $db):array {
    $query = "SELECT * FROM principal";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS, Principal::class);

    return $stmt->fetchAll();
}

/**
* Retorna el principal con el $id.
* De lo contrario retorna null.
*
* @param PDO $db
* @param int $id
* @return Principal|null
*/
function principalTraerPorId(PDO $db, int $id): ?Principal{
    $query = "SELECT * FROM principal
    WHERE principal_id = ?";
    $stmt = $db->prepare($query);

    $stmt->execute([$id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, Principal::class);

    $principal = $stmt->fetch();

    if(!$principal) {
    return null;
    }
    return $principal;
}
 

