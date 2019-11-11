<?php

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

    public function delete($id) {

    }
    public function update($user) {


    }

}

?>
