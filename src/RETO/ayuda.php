<?php
include("head.php");
include("Session/DAO/ProductDAO.php");
include("Session/Conf/PersistentManager.php");
session_start();
$dbh = connect();

?>


<div class="ayuda">
    <div class="ayuda_titulo"><h2>¿NECESITAS AYUDA? </h2> </div>

    <div class="contenido_ayuda">
        <p>Si tienes alguna duda que quieres que te respondamos, no dudes en ponerte en contacto con nosotros. Escribenos un email
            haciendo click en la imagen que aparece en pantalla. Te responderemos lo antes posible.</p>
         <a href="mailto:yolodesign.jas@gmail.com"> <img id="ayuda_img"src="Assets/MEDIA/help.png"/></a>
    </div>
</div>





<?php
include("footer.php");
?>

