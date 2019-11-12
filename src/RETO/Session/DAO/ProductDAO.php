<?php
include("..\Conf\PersistentManager.php");
include ("../../Clases/Products.php");

function consulta($dbh){

    echo "------Datos de la tabla-----<hr></hr>";
    $stmt = $dbh->prepare("SELECT id, nombre FROM productos");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo $row['id'] . "<br>";
        echo $row['nombre'] . "<br>";

    }


}


function añadirProducto($producto, $dbh){
    $data = array(
        'nombre' => $producto -> nombre,
        'descripcion' => $producto -> descripcion,
        'foto' => $producto -> foto,
        'direccion' => $producto -> direccion,
        'fecha' => $producto -> fecha
    );
    $stmt = $dbh->prepare("INSERT INTO productos (nombre, descripcion, foto, direccion, fecha) VALUES (:nombre, :descripcion, :foto, :direccion, :fecha)");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute($data);

    //Redireccionar al index
    //header();
}
?>
