<?php
include("../Conf/PersistentManager.php");
<<<<<<< HEAD
include '../Utils/SessionUtils.php';



if (isset($_POST["nombreProducto"])){
    echo "entra";
    startSessionIfNotStarted();
    $idCategoria = idCategoriaPorNombre($_POST["categoriaProducto"]);
    echo $idCategoria;
    $idPerfil = getIdUsuarioByEmail();
    $producto = array(
        "nombre" => $_POST["nombreProducto"],
        "descripcion" => $_POST["descrpcionProducto"],
        "direccion" => $_POST["direccionProducto"],
        "fecha" => date("Y-m-d"),
        "foto" => $_POST["fotoProducto"],
        "id_categoria" => $idCategoria,
        "id_User" => $idPerfil
    );
    $dbh = connect();
    añadirProducto($producto, $dbh);

}
=======
include("../../Clases/Products.php");
//startSessionIfNotStarted();
>>>>>>> arkaitz-desarrollo

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

<<<<<<< HEAD
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
function mostrarCategorias(){
    try{
        $dbh = connect();
        $stmt = $dbh->prepare("SELECT nombre FROM categorias");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo "<option>{$row['nombre']}</option>";

        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function idCategoriaPorNombre($nombre){
    try{
        $data = array(
            "nombre" => $nombre
        );
        $dbh = connect();
        $stmt = $dbh->prepare("SELECT id FROM categorias where nombre=:nombre");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute($data);
        $value = "";
        while ($row = $stmt->fetch()) {
            $value = $row['id'];
        }
        return $value;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function getIdUsuarioByEmail(){

    $dbh = connect();
    $data = array(
        'email' => $_SESSION['user']
    );

    try{
        $stmt = $dbh->prepare("SELECT id FROM usuarios WHERE usuario=:email");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->id;
        }

        $data = array(
            "id" => $value
        );
        $stmt = $dbh->prepare("SELECT id FROM perfiles WHERE id_usuario=:id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->id;
        }

    }catch (PDOException $e){
        die($e->getMessage());
    }
    return $value;
}
=======
>>>>>>> arkaitz-desarrollo

function añadirProducto($producto, $dbh)
{
    $data = array(
        'nombre' => $producto["nombre"],
        'descripcion' => $producto["descripcion"],
        'foto' => $producto["foto"],
        'direccion' => $producto["direccion"],
        'fecha' => $producto["fecha"],
        'id_categoria' => $producto["id_categoria"],
        'id_User' => $producto["id_User"]
    );
    try {
        $stmt = $dbh->prepare("INSERT INTO productos (nombre, descripcion, foto, direccion, fecha, id_categoria, id_perfiles) VALUES (:nombre, :descripcion, :foto, :direccion, :fecha, :id_categoria, :id_User)");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute($data);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    //Redireccionar al index
    header('Location: ../../index.php');
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
