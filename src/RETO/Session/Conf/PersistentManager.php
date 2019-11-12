<?php

class PersistentManager {

    function connect()
    {
        $dbname = "yolo";
        $host = "localhost";
        $user = "root";
        $pass = "";
        try {
            $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>