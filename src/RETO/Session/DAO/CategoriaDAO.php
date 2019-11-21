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



function consultaCategoriasPro($dbh,$id)
{
    try{
        $stmt = $dbh->prepare("SELECT c.id idcat , c.nombre nombrecat, p.id idproducto, p.nombre nombreproducto, 
                                    p.descripcion descproducto, p.foto fotoproducto
                                    FROM categorias c, productos p 
                                    WHERE p.id_categoria = c.id
                                    AND c.id = :id
                                    LIMIT 5");
        $stmt->bindParam("id", $id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt;
    }catch (PDOException $e){
        echo $e->getMessage();
    }

}

