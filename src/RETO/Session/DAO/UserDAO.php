<?php
include '../Conf/PersistentManager.php';
include '../Utils/SessionUtils.php';

if (isset($_POST["emailLogin"])) {
    checkAction();
}
if (isset($_POST["emailSignup"])) {

    createAction();

}

function checkAction()
{
    $dbh = connect();
    if(check($_POST["emailLogin"], $_POST["passwordLogin"], $dbh))
     {
     // Establecemos la sesión
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
    /*SessionUtils::startSessionIfNotStarted();
    SessionUtils::setSession($user->getEmail());*/

    //header('Location: ../../index.php');
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
        $stmt->fetch();
    }catch (PDOException $e){
        die($e->getMessage());
    }

    try{
        $stmt = $dbh->prepare("SELECT id FROM usuarios WHERE usuario=:email AND contrasena=:password");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data2);
        while($row = $stmt->fetch()){
            $value = $row->id;
        }
    }catch (PDOException $e){
        die($e->getMessage());
    }


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
        $stmt = $dbh->prepare("INSERT INTO perfiles(nombre, apellido, telefono, correo, sexo, fechaNacimiento, id_usuario, foto) VALUES (:nombre, :apellidos, :telefono, :email, :genero, :fechaNacimiento, :id_usuario ,:profImage)");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        $stmt->fetch();
    }catch (PDOException $e){
        die($e->getMessage());
    }

}

?>
