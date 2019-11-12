<?php
include("..\Conf\PersistentManager.php");


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

?>
