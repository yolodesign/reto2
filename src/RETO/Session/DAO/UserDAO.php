<?php
require_once '..\..\conf\PersistentManager.php';

Class UserDAO{
    const USER_TABLE = "";

    private $conn = null;

    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }
    //Muestra todos los registros de la tabla seleccionada
    public function selectAll() {
        $query = "SELECT * FROM " . UserDAO::USER_TABLE;
        $result = mysqli_query($this->conn, $query);
        $users= array();
        while ($userBD = mysqli_fetch_array($result)) {

            $user = new User();
            $user->setIdUser($userBD["id"]);
            $user->setEmail($userBD["user"]);
            $user->setPassword($userBD["pass"]);

            array_push($users, $user);
        }
        return $users;
    }

    //Añade en la tabla seleccionada todos sus datos
    public function insert($user) {

    }
    public function check($user) {
        $query = "SELECT user, pass FROM " . UserDAO::USER_TABLE . " WHERE user=? AND pass=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $auxEmail = $user->getEmail();
        $auxPass =  $user->getPassword();

        mysqli_stmt_bind_param($stmt, 'ss', $auxEmail, $auxPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rows = mysqli_stmt_num_rows($stmt);
        if($rows>0)
            return true;
        else
            return false;
    }

    public function delete($id) {

    }
    public function update($user) {


    }

}

?>
