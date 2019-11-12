<?php
require_once '..\..\conf\PersistentManager.php';

Class UserDAO{
    const USER_TABLE = "usuarios";
    const PROFILE_TABLE = "perfiles";

    private $conn = null;

    //Añade en la tabla seleccionada todos sus datos
    public function insert($user, $profile) {
        try{

        }catch (PDOException $e){
            echo $e->getMessage();
        }

        $data = array(
            'nombre' => $profile("nombre"),
            'apellidos' => $profile("apellido"),
            'fechaNacimiento' => $profile("fechaNacimiento"),
            'genero' => $profile("genero"),
            'email' => $profile("email"),
            'password' => $profile("password"),
            'profImage' => $profile("profImage")
        );
        try{
            $query = "INSERT INTO ". UserDAO::PROFILE_TABLE ."(nombre, apellido, correo, sexo, fechaNacimiento, foto) VALUES (:nombre, :apellidos, :fechaNacimiento, :genero, :email, :password, :profImage)";
            $stmt = mysqli_prepare($this->conn, $query);

            $stmt->setFetchMode (PDO::FETCH_OBJ);
            $stmt->execute($data);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $data2 = array(
            "email" => $user("email"),
            "password" => $user("password")
        );
        try{
            $query = "INSERT INTO ". UserDAO::USER_TABLE ."(usuario, contraseña) VALUES (:email, :password)";
            $stmt = mysqli_prepare($this->conn, $query);

            $stmt->setFetchMode (PDO::FETCH_OBJ);
            $stmt->execute($data2);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    //Comprueba si los datos ya existen en la base de datos
    public function check($user) {
        $query = "SELECT usuario, contraseña FROM " . UserDAO::USER_TABLE . " WHERE usuario=? AND contraseña=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $auxEmail = $user->getEmail();
        $auxPass =  $user->getPassword();

        mysqli_stmt_bind_param($stmt, 'ss', $auxEmail, $auxPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rows = mysqli_stmt_num_rows($stmt);
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
