<?php
include '../Conf/PersistentManager.php';
include '../Utils/SessionUtils.php';

if (isset($_POST["emailLogin"])) {
    checkAction();
}
if (isset($_POST["emailSignup"])) {
    createAction();
}
if (isset($_POST["update"])){
    updateAction();
}
if (isset($_POST["borrar"])){
    borrarCuenta();
}


function checkAction()
{
    $dbh = connect();
    if(check($_POST["emailLogin"], $_POST["passwordLogin"], $dbh))
     {
     // Establecemos la sesión
         startSessionIfNotStarted();
         setSession($_POST["emailLogin"]);

         header('Location: ../../index.php');
     }
     else
    {
        header('Location: ../../index2.php');
    }
}

// Función encargada de crear nuevos usuarios
function createAction()
{
    $dbh = connect();
    $user = array(
        "nombre" => $_POST["name"],
        "apellido" => $_POST["lastname"],
        "telefono" => $_POST["phone"],
        "fecha" => $_POST["birthdate"],
        "genero" => $_POST["gender"],
        "profImg" => $_POST["profImg"],
        "email" => $_POST["emailSignup"],
        "password" => $_POST["passwordSignup"]
        );


        insert($user, $dbh);


    // Establecemos la sesión
    startSessionIfNotStarted();
    setSession($_POST["emailSignup"]);



    header('Location: ../../index.php');
}
function borrarCuenta(){
    startSessionIfNotStarted();
    $dbh = connect();
    $id = getIdUsuarioByEmail();
    $data = array(
        'id' => $id
    );
    try{
        $stmt = $dbh->prepare("DELETE FROM perfiles WHERE id_usuario = :id");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
    }catch (PDOException $e){
        die($e->getMessage());
    }
    try{
        $stmt2 = $dbh->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt2->setFetchMode(PDO::FETCH_OBJ);
        $stmt2->execute($data);
    }catch (PDOException $e){
        die($e->getMessage());
    }

    header('Location: ../../Login.php');
}
function updateAction(){
    startSessionIfNotStarted();
    $dbh = connect();
    $user = array(
        "nombre" => $_POST["nameP"],
        "apellido" => $_POST["lastnameP"],
        "telefono" => $_POST["phoneP"],
        "fecha" => $_POST["birthdateP"],
        "genero" => $_POST["genderP"]
    );

    actualizarPerfil($user, $dbh);

    header('Location: ../../perfil.php');
}
function actualizarPerfil($user, $dbh){

    $data = array(
        "nombre" => $user["nombre"],
        "apellido" => $user["apellido"],
        "telefono" => $user["telefono"],
        "fecha" => $user["fecha"],
        "genero" => $user["genero"],
        "correo" => $_SESSION['user']

    );
    try{
        $stmt = $dbh->prepare("UPDATE perfiles SET nombre = :nombre, apellido = :apellido, telefono = :telefono, fechaNacimiento = :fecha, sexo = :genero WHERE correo = :correo");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
    }catch (PDOException $e){
        die($e->getMessage());
    }
}
//Comprueba si los datos ya existen en la base de datos
function check($email, $password, $dbh)
{

    $data = array(
        'email' => $email,
        'password' => $password
    );

    try {
        $stmt = $dbh->prepare("SELECT usuario FROM usuarios WHERE usuario = :email AND contrasena = :password");

        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        $num = 0;
        while($row = $stmt->fetch()){
            $num++;
        }
        if ($num > 0) {
            return true;
        } else {
            return false;
        }
    }
    catch (PDOException $e){
        die($e->getMessage());
    }

}

//Añade en la tabla seleccionada todos sus datos
function insert($user, $dbh)
{
    $data2 = array(
        "email" => $user["email"],
        "password" => $user["password"]
    );
    try{
        $stmt = $dbh->prepare("INSERT INTO usuarios(usuario, contrasena) VALUES (:email, :password)");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data2);
    }catch (PDOException $e){
        die($e->getMessage());
    }

    $value = getIdUsuario($dbh, $data2);

    $data = array(
        'nombre' => $user["nombre"],
        'apellidos' => $user["apellido"],
        'telefono' => $user["telefono"],
        'fechaNacimiento' => $user["fecha"],
        'genero' => $user["genero"],
        'email' => $user["email"],
        'id_usuario' => $value,
        'profImage' => $user["profImg"]
    );

    try{
        $stmt2 = $dbh->prepare("INSERT INTO perfiles(nombre, apellido, correo, sexo, telefono, fechaNacimiento, id_usuario, foto) VALUES (:nombre, :apellidos, :email, :genero, :telefono, :fechaNacimiento, :id_usuario ,:profImage)");
        $stmt2->setFetchMode(PDO::FETCH_OBJ);
        $stmt2->execute($data);
    }catch (PDOException $e){
        die($e->getMessage());
    }
}
function getIdUsuario($dbh, $data){
    try{
        $stmt = $dbh->prepare("SELECT id FROM usuarios WHERE usuario=:email AND contrasena=:password");
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


function getNamebyEmail($email){
    $dbh = connect();
    $data = array(
        'email' => $email
    );
    $value = "";
    try{
        $stmt = $dbh->prepare("SELECT nombre FROM perfiles WHERE correo=:email");
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
function getImgProfile($email){
    $dbh = connect();
    $data = array(
        'email' => $email
    );
    $value = "";
    try{
        $stmt = $dbh->prepare("SELECT foto FROM perfiles WHERE correo=:email");
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

function getLastnameProfile($email){
    $dbh = connect();
    $data = array(
        'email' => $email
    );
    $value = "";
    try{
        $stmt = $dbh->prepare("SELECT apellido FROM perfiles WHERE correo=:email");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->apellido;
        }
        return $value;
    }catch (PDOException $e){
        die($e->getMessage());
    }
}


function getPhoneProfile($email){
    $dbh = connect();
    $data = array(
        'email' => $email
    );
    $value = "";
    try{
        $stmt = $dbh->prepare("SELECT telefono FROM perfiles WHERE correo=:email");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->telefono;
        }
        return $value;
    }catch (PDOException $e){
        die($e->getMessage());
    }
}
function getBirthdateProfile($email){
    $dbh = connect();
    $data = array(
        'email' => $email
    );
    $value = "";
    try{
        $stmt = $dbh->prepare("SELECT fechaNacimiento FROM perfiles WHERE correo=:email");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->fechaNacimiento;
        }
        return $value;
    }catch (PDOException $e){
        die($e->getMessage());
    }
}
function getGenderProfile($email){
    $dbh = connect();
    $data = array(
        'email' => $email
    );
    $value = "";
    try{
        $stmt = $dbh->prepare("SELECT sexo FROM perfiles WHERE correo=:email");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        while($row = $stmt->fetch()){
            $value = $row->sexo;
        }
        return $value;
    }catch (PDOException $e){
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
    }catch (PDOException $e){
        die($e->getMessage());
    }
    return $value;
}

?>
