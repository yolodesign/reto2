<?php
include("../Conf/PersistentManager.php");
include("../../Clases/Products.php");
//startSessionIfNotStarted();

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


function getProductosById($dbh, $id)
{

    $data = array(
        'id' => $id
    );
    try {
        $stmt = $dbh->prepare("SELECT pro.nombre productonombre, pro.descripcion productodescripcion, pro.foto productofoto, 
                                    pro.direccion productodireccion, pro.fecha productofecha, cat.nombre categorianombre, per.nombre perfilnombre, 
                                    per.telefono perfiltelefono, per.correo  perfilcorreo
                                    FROM productos pro, perfiles per, categorias cat 
                                    WHERE pro.id=:id 
                                    AND per.id = pro.id_perfiles AND pro.id_categoria = cat.id");

        $stmt->execute($data);
        return $stmt->FetchObject();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


?>
