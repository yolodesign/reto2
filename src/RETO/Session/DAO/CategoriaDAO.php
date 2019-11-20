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


function consultaCategoriasPro($dbh)
{

    $stmt = $dbh->prepare("SELECT c.id, c.nombre, p.id, p.nombre nombreproducto, p.descripcion, p.foto FROM categorias c, productos p 
                                    WHERE p.id_categoria = c.id");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $stmt->fetchAll();
}