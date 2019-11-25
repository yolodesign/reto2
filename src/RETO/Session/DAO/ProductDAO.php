<?php
include("../Conf/PersistentManager.php");
include '../Utils/SessionUtils.php';
//startSessionIfNotStarted();


if (isset($_POST["nombreProducto"])){
    startSessionIfNotStarted();
    $idCategoria = idCategoriaPorNombre($_POST["categoriaProducto"]);
    $idEtiqueta = idEtiquetaPorNombre($_POST["etiquetaProducto"]);
    $idPerfil = getIdUsuarioByEmail();
    $producto = array(
        "nombre" => $_POST["nombreProducto"],
        "descripcion" => $_POST["descrpcionProducto"],
        "direccion" => $_POST["direccionProducto"],
        "fecha" => date("Y-m-d"),
        "foto" => $_POST["fotoProducto"],
        "id_categoria" => $idCategoria,
        "id_etiqueta" => $idEtiqueta,
        "id_User" => $idPerfil
    );
    $dbh = connect();
    añadirProducto($producto, $dbh);
}
if (isset($_POST["enviarP"])){
    $correo = $_GET['correo'];
    header('Location: ../../enviarMail.php?correo=' . $correo);
}
if (isset($_POST["actualizarAnuncio"])){
    $producto = array(
        "nombre" => $_POST["nombreProductoA"],
        "descripcion" => $_POST["descrpcionProductoA"],
        "direccion" => $_POST["direccionProductoA"],
        "foto" => $_POST["fotoProductoA"],
        "id" => $_GET['id']
    );
    $dbh = connect();
    actualizarProducto($producto, $dbh);
}
if (isset($_POST["borrarP"])){
    $dbh = connect();
    borrarProductoById($_GET['id'], $dbh);
    header('Location: ../../index.php');
}
if (isset($_POST["nombreBuscador"]) && isset($_POST["palabra"])){

        if ($_POST["nombreBuscador"] != "Categorias"){
            $dbh = connect();
            $id = idCategoriaPorNombreBuscador($_POST["nombreBuscador"], $dbh);

            if ($_POST["palabra"] != ""){
                $id = idCategoriaPorNombreBuscador($_POST["nombreBuscador"], $dbh);
                header('Location: ../../ver_mas.php?id=' . $id .'&palabra='.$_POST["palabra"]);
            }else{
                header('Location: ../../ver_mas.php?id=' . $id);
            }
        }else{
            if ($_POST["palabra"] != ""){
                header('Location: ../../index.php');
            }else{
                header('Location: ../../ver_mas.php');
            }

        }
}

function idCategoriaPorNombreBuscador($nombre, $dbh){
    $data = array(
        'nombre' => $nombre
    );
    try{
        $stmt = $dbh->prepare("SELECT id FROM categorias WHERE nombre=:nombre");
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

function consulta()
{
    $dbh = connect();
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
function mostrarEtiquetas(){
    try{
        $dbh = connect();
        $stmt = $dbh->prepare("SELECT nombre FROM etiquetas");
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

function idEtiquetaPorNombre($nombre){
    try{
        $data = array(
            "nombre" => $nombre
        );
        $dbh = connect();
        $stmt = $dbh->prepare("SELECT id FROM etiquetas where nombre=:nombre");
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
function validateAndUploadImage($url, $correo, $queImagen)
{
    $destination = $url . $correo . ".jpg";
    $nombre = $correo . ".jpg";
    if (file_exists($destination)) {
        unlink($destination);
    }
    if (!is_uploaded_file($_FILES[$queImagen]['tmp_name'])) {
        echo "Error: El fichero encontrado no fue procesado por la subida correctamente";
        exit;
    }
    $source = $_FILES[$queImagen]['tmp_name'];
    if (is_file($destination)) {
        echo "Error: Ya existe almacenado un fichero con ese nombre";
        @unlink(ini_get('upload_tmp_dir') . $_FILES[$queImagen]['tmp_name']);
        exit;
    }
    if (!@move_uploaded_file($source, $destination)) {
        echo "Error: No se ha podido mover el fichero enviado a la carpeta de destino";
        echo "<br>  $destination";
        @unlink(ini_get('upload_tmp_dir') . $_FILES[$queImagen]['tmp_name']);
        exit;
    }
    return $nombre;
}

function añadirProducto($producto, $dbh)
{
    if (isset($_FILES) && isset($_FILES['fotoProducto']) && !empty($_FILES['fotoProducto']['name'] && !empty($_FILES['fotoProducto']['tmp_name']))) {
        echo "prueba de coger foto";
        echo $_FILES['fotoProducto'];
        echo $_FILES['fotoProducto']['name'];

        $url_foto = validateAndUploadImage("../../Assets/MEDIA/", $producto["nombre"] . $_SESSION['user'], 'fotoProducto');

        $data = array(
            'nombre' => $producto["nombre"],
            'descripcion' => $producto["descripcion"],
            'foto' => $url_foto,
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
    }else{
        header('Location: ../../subirAnuncio.php');
    }
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
function getNombreProductoById($id, $dbh ){
    $data = array(
        'id' => $id
    );
    try {
        $stmt = $dbh->prepare("SELECT nombre FROM productos WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->nombre;
        }
        return $value;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function getFotoProductoById($id, $dbh ){
    $data = array(
        'id' => $id
    );
    try {
        $stmt = $dbh->prepare("SELECT foto FROM productos WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->foto;
        }
        return $value;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function getDescripcionProductoById($id, $dbh ){
    $data = array(
        'id' => $id
    );
    try {
        $stmt = $dbh->prepare("SELECT descripcion FROM productos WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->descripcion;
        }
        return $value;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function getFechaProductoById($id, $dbh ){
    $data = array(
        'id' => $id
    );
    try {
        $stmt = $dbh->prepare("SELECT fecha FROM productos WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->fecha;
        }
        return $value;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function getDireccionProductoById($id, $dbh ){
    $data = array(
        'id' => $id
    );
    try {
        $stmt = $dbh->prepare("SELECT direccion FROM productos WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->direccion;
        }
        return $value;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function actualizarProducto($producto, $dbh){
    $data = array(
        'nombre' => $producto["nombre"],
        'descripcion' => $producto["descripcion"],
        'foto' => $producto["foto"],
        'direccion' => $producto["direccion"],
        'id' => $producto["id"]
    );
    try {
        $stmt = $dbh->prepare("UPDATE productos SET nombre = :nombre, descripcion = :descripcion, direccion = :direccion, foto = :foto WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute($data);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    header('Location: ../../index.php');
}
function borrarProductoById($id, $dbh){
    $data = array(
        'id' => $id
    );
    try{
        $stmt = $dbh->prepare("DELETE FROM productos WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
    }catch (PDOException $e){
        die($e->getMessage());
    }
}
function getProfileIdByproductId($id, $dbh){
    $data = array(
        'id' => $id
    );
    try {
        $stmt = $dbh->prepare("SELECT id_perfiles FROM productos WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->id_perfiles;
        }
        return $value;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function getNamePById($id, $dbh){
    $data = array(
        'id' => $id
    );
    $value = "";
    try{
        $stmt = $dbh->prepare("SELECT nombre FROM perfiles WHERE id=:id");
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
function getEmailById($id, $dbh){
    $data = array(
        'id' => $id
    );
    $value = "";
    try{
        $stmt = $dbh->prepare("SELECT correo FROM perfiles WHERE id=:id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->correo;
        }
        return $value;
    }catch (PDOException $e){
        die($e->getMessage());
    }
}



?>