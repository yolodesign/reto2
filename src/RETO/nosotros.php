<?php
include("head.php");
include("Session/DAO/ProductDAO.php");
include("Session/Conf/PersistentManager.php");
session_start();
$dbh = connect();
?>

<div class="nosotros">
    <div class="titulo_nosotros">
        <h2>¿Quiénes Somos?</h2>
    </div>
    <div class="miembro_1">
        <h3>SERGIO</h3>
    </div>
    <div class="contenido_1">
        <img src="Assets/MEDIA/fotoPerfil.jpg">
        <p>Hola soy Zulu y programo que da gusto</p>
        <p>Este es mi <a href="https://github.com/SergioZulueta"> GitHub!</a></p>
    </div>
    <div class="miembro_2">
        <h3>ARKAITZ</h3>
    </div>
    <div class="contenido_2">
        <img src="Assets/MEDIA/fotoPerfil.jpg">
        <p> Hola soy Arkaitz y programo que da gusto</p>
        <p>Este es mi <a href="https://github.com/SrArkaitz"> GitHub!</a></p>
    </div>
    <div class="miembro_3">
        <h3>JULEN</h3>
    </div>
    <div class="contenido_3">
        <img src="Assets/MEDIA/fotoPerfil.jpg">
        <p> Hola soy Julen , master en css</p>
        <p>Este es mi <a href="https://github.com/prietojulen"> GitHub!</a></p>

    </div>
</div>



<?php
include("footer.php");
?>
