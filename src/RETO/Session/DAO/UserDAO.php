<?php
require_once '../Conf/PersistentManager.php';

Class UserDAO{
    const USER_TABLE = "usuarios";
    const PROFILE_TABLE = "perfiles";

    //Añade en la tabla seleccionada todos sus datos
    public function insert($user, $profile){
        $dbh = connect();
        $data = array(
            'nombre' => $profile("nombre"),
            'apellidos' => $profile("apellido"),
            'fechaNacimiento' => $profile("fechaNacimiento"),
            'genero' => $profile("genero"),
            'email' => $profile("email"),
            'password' => $profile("password"),
            'profImage' => $profile("profImage")
        );
        $query = "INSERT INTO ". UserDAO::PROFILE_TABLE ."(nombre, apellido, correo, sexo, fechaNacimiento, foto) VALUES (:nombre, :apellidos, :fechaNacimiento, :genero, :email, :password, :profImage)";
        $stmt = mysqli_prepare($this->conn, $query);

        $stmt->setFetchMode (PDO::FETCH_OBJ);
        $stmt->execute($data);


        $data2 = array(
            "email" => $user("email"),
            "password" => $user("password")
        );
        $query = "INSERT INTO ". UserDAO::USER_TABLE ."(usuario, contraseña) VALUES (:email, :password)";
        $stmt = mysqli_prepare($this->conn, $query);

        $stmt->setFetchMode (PDO::FETCH_OBJ);
        $stmt->execute($data2);
    }

    //Comprueba si los datos ya existen en la base de datos
    public function check($user){
        $dbh = connect();

        $data = array(
            'usuario' => $user -> email,
            'constraseña' => $user -> password
        );

        $stmt = $dbh->prepare("SELECT usuario, contraseña FROM " . UserDAO::USER_TABLE . " WHERE usuario=:usuario AND contraseña=:contraseña" );

        $stmt->setFetchMode (PDO::FETCH_OBJ);
        $stmt->execute($data);
        $rows = $stmt->fetch();
        if($rows>0){
            return true;
            echo "false";
        }else{
            return false;
            echo "false";
        }
    }
}

?>
