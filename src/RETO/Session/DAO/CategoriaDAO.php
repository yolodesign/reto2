<?php

$dbh = connect();

function consultaCategorias($dbh)
{

    $stmt = $dbh->prepare("SELECT id, nombre FROM categorias");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $stmt->fetchAll();
}

$categorias = consultaCategorias($dbh);

