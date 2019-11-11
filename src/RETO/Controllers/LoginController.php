<?php
include_once '../Session/DAO/UserDAO.php';
include_once '../Clases/User.php';
include_once '../Session/Utils/SessionUtils.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (true){
        checkAction();
    }else{
        createAction();
    }
}


function checkAction() {

    //Usuaeio al que le añadiremos sus propiedades
    $user = new User();
    $user->setEmail($_POST["user"]);
    $user->setPassword($_POST["password"]);

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

        header('Location: ../index.php');
    }


    // Función encargada de crear nuevos usuarios
    function createAction() {
        // Obtención de los valores del formulario y validación
        $email = ValidationsRules::test_input($_POST["email"]);
        $pass = ValidationsRules::test_input($_POST["password"]);
        // Creación de objeto auxiliar
        $user = new User();
        $user->setEmail($email);
        $user->setPassword($pass);
        //Creamos un objeto UserDAO para hacer las llamadas a la BD
        $userDAO = new UserDAO();
        $userDAO->insert($user);

        // Establecemos la sesión
        SessionUtils::startSessionIfNotStarted();
        SessionUtils::setSession($user->getEmail());

        header('Location: ../index.php');
    }

}

