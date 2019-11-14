<?php
include("../Conf/PersistentManager.php");
include("../../Clases/Products.php");

function consulta($dbh)
{

    $stmt = $dbh->prepare("SELECT id, nombre, foto FROM productos");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo $row['nombre'] . "<br>";
        echo '<img class ="imagenAnuncion" src="Assets/MEDIA/' . $row['foto'] . '"><br>';

    }


}

function consultaByIdCategoriProduct($dbh)
{

    $stmt = $dbh->prepare("SELECT id, nombre, foto FROM productos");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo $row['nombre'] . "<br>";
        echo '<img class ="imagenAnuncion" src="Assets/MEDIA/' . $row['foto'] . '"><br>';

    }


}


function añadirProducto($producto, $dbh)
{
    $data = array(
        'nombre' => $producto->nombre,
        'descripcion' => $producto->descripcion,
        'foto' => $producto->foto,
        'direccion' => $producto->direccion,
        'fecha' => $producto->fecha
    );
    try {
        $stmt = $dbh->prepare("INSERT INTO productos (nombre, descripcion, foto, direccion, fecha) VALUES (:nombre, :descripcion, :foto, :direccion, :fecha)");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute($data);
    } catch (PDOException $e) {
        die($e->getMessage());
    }


    //Redireccionar al index
    //header();
}

?>
