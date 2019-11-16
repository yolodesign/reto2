<?php
include("head.php");
include("Session/DAO/ProductDAO.php");
include("Session/Conf/PersistentManager.php");
session_start();
$dbh = connect();

?>
<div id="que_es_yolopop">
    <div id="que_es_yolopop_titulo"> <h2>¿Qué es YoloPop? </h2></div>
    <div id="que_es_yolopop_contenido">
        <p>Somos el equpo 4 YOLO DESIGN® de Desarrollo de Aplicaciones Web de Egibide Arriaga.</p>
        <p>Nuestra empresa se dedica a diseñar páginas y aplicaciones web, en este caso, YoloPop.</p>
        <p> YoloPop es un portal de publicidad para que los jóvenes empresarios de Álava puedan anunciar su empresa de una forma
            sencia y gratuita, pudiendo llegar así a más público y crecer como emprededores.</p>
    </div>
    <div id="yolopop_img_quienes_somos"></div><a href="index.php"> <img src="Assets/MEDIA/icono_yolo_sin.png" alt="Icono"/></a></div>

</div>


<?php
include("footer.php");
?>

