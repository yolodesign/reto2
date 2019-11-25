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

function productosPorCategoria($id, $dbh){
    $data = array(
        'id' => $id
    );
    try{
        $stmt = $dbh->prepare("SELECT id, nombre, foto, descripcion FROM productos WHERE id_categoria = :id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){

            echo "<tr><td> {$row -> nombre} </td>";
            echo '<td class="fileImagenesAnuncio"> <a href=\'verProducto.php?id=' .$row -> id.'\'><img class ="imagenAnuncioMasGrande" src="Assets/MEDIA/' . $row -> foto . '"></a>';
            echo "<td>  {$row -> descripcion}  </td></tr>";
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function productosPorCategoriaNombre($id, $palabra ,$dbh){
    $data = array(
        'id' => $id,
        'palabra' => "%".$palabra."%"
    );
    try{
        $stmt = $dbh->prepare("SELECT id, nombre, foto, descripcion FROM productos WHERE id_categoria = :id AND nombre LIKE :palabra");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){

            echo "<tr><td> {$row -> nombre} </td>";
            echo '<td> <a href=\'verProducto.php?id=' .$row -> id.'\'><img class ="imagenAnuncioMasGrande" src="Assets/MEDIA/' . $row -> foto . '"></a>';
            echo "<td>  {$row -> descripcion}  </td></tr>";
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function seleccionarTodosPorCategoria($dbh){
    try{
        $stmt = $dbh->prepare("SELECT id, nombre, foto, descripcion FROM productos");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        while($row = $stmt->fetch()){

            echo "<tr><td> {$row -> nombre} </td>";
            echo '<td class="fileImagenesAnuncio"> <a href=\'verProducto.php?id=' .$row -> id.'\'><img class ="imagenAnuncioMasGrande" src="Assets/MEDIA/' . $row -> foto . '"></a>';
            echo "<td>  {$row -> descripcion}  </td></tr>";
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function categoriaPorId($id, $dbh){
    $data = array(
        'id' => $id
    );
    $value = "";
    try{
        $stmt = $dbh->prepare("SELECT nombre FROM categorias WHERE id=:id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->nombre;
        }
        return $value;
    }catch (PDOException $e){
        die($e->getMessage());
    }
}


