<?php
include_once '../Session/DAO/UserDAO.php';
include_once '../Clases/User.php';
include_once '../Clases/Profiles.php';
include_once '../Session/Utils/SessionUtils.php';



if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET["emailLogin"])){
        checkAction();
    }else if (isset($_GET["emailSignup"])){
        createAction();
    }
}


function checkAction() {

    //Usuario al que le añadiremos sus propiedades
    $user = new User();
    $user->setEmail($_GET["emailSignup"]);
    $user->setPassword($_GET["passwordSignup"]);
    //Creamos un objeto UserDAO para hacer las llamadas a la BD
    $userDAO = new UserDAO();
    if($userDAO->check($user))
    {
        // Establecemos la sesión
        SessionUtils::startSessionIfNotStarted();
        SessionUtils::setSession($user->getEmail());

        header('Location: ../index.php');
    }
    else
    {

        header('Location: ../Login.php');
    }


    // Función encargada de crear nuevos usuarios
    function createAction() {
        //Usuario al que le añadiremos sus propiedades
        $user = new User();
        $user->setEmail($_GET["emailSignup"]);
        $user->setPassword($_GET["passwordSignup"]);

        //Perfil al que le añadiremos sus propiedades
        $profile = new Profiles();
        $profile->setNombre($_GET["name"]);
        $profile->setApellido($_GET["lastname"]);
        $profile->setTelefono(($_GET["phone"]));
        $profile->setFechaNacimiento($_GET["birthdate"]);
        $profile->setGenero($_GET["gender"]);
        if (isset($_GET["profImg"])){
            $profile->setProfImage($_GET["profImg"]);
        }else{
            $profile->setProfImage(/**Añadir aqui imagen por defecto**/);
        }
        $profile->setEmail($_GET["emailSignup"]);
        $profile->setPassword($_GET["passwordSignup"]);
        //Creamos un objeto UserDAO para hacer las llamadas a la BD
        $userDAO = new UserDAO();

        try{
            $userDAO->insert($user, $profile);
        }catch (PDOException $e){
        echo $e->getMessage();
        }


        // Establecemos la sesión
        SessionUtils::startSessionIfNotStarted();
        SessionUtils::setSession($user->getEmail());

        header('Location: ../index.php');
    }

}

