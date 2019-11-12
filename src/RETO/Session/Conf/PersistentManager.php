<?php

class PersistentManager {

    // Instancia privada de conexión.
    private static $instance = null;
    //Conexión a BD
    private static $connection = null;
    //Parámetros de conexión a la BD.
    private $userBD = "";
    private $psswdBD = "";
    private $nameBD = "";
    private $hostBD = "";

    //Get de la conexión
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    //Constructor de la clase privado: solo queremos construir una instancia
    //Se encarga de establecer una conexion con nuestro GBBDD.
    private function __construct() {
        $this->establishCredentials();

        PersistentManager::$connection = mysqli_connect($this->hostBD, $this->userBD, $this->psswdBD, $this->nameBD)
        or die("Could not connect to db: " . mysqli_error());
        mysqli_query(PersistentManager::$connection, "SET NAMES 'utf8'");
    }

    private function establishCredentials() {
        // Lectura de parametros de configuración desde archivo externo json (En caso de cambiar la basede datos se cambia directamente desde ese archivo)
        if (file_exists('credentials.json')) {
            $credentialsJSON = file_get_contents('credentials.json');
            $credentials = json_decode($credentialsJSON, true);

            $this->userDB = $credentials["user"];
            $this->psswdBD = $credentials["password"];
            $this->nameBD = $credentials["name"];
            $this->hostBD = $credentials["host"];
        } else {
            $this->userBD = "root";
            $this->psswdBD = "";
            $this->nameBD = "yolo";
            $this->hostBD = "localhost";
        }
    }

    //Devuelve la instancia de la conexión
    function get_connection() {
        return PersistentManager::$connection;
    }

    //Cierra la conexión.
    public function close_connection() {
        mysqli_close();
    }

    //Getters y Setters de los parámetros de configuración de BD.
    function get_hostBD() {
        return $this->hostBd;
    }

    function get_usuarioBD() {
        return $this->userBD;
    }

    function get_psswdBD() {
        return $this->psswdBD;
    }

    function get_nombreBD() {
        return $this->nameBD;
    }

}

?>