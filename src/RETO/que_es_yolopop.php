<?php
include("head.php");
include("Session/DAO/ProductDAO.php");
include("Session/Conf/PersistentManager.php");
session_start();
$dbh = connect();

?>



<section class="contenido">
    <div class="que_es_yolopop">
        <div class="box item1">
            <h2>¿Qué es YoloPop? </h2>
        </div>
        <div class="box item2">

            <div class="foto_anuncio">
                <a href="index.php"> <img src="Assets/MEDIA/icono_yolo_sin.png" alt="Icono"/></a>
            </div>

            <div class="descripcion_anuncio">
                <h2>Reto 2</h2>
                <p> YoloPop es un portal de publicidad para que los jóvenes empresarios de Álava puedan anunciar su empresa de una forma
                    sencia y gratuita, pudiendo llegar así a más público y crecer como emprededores.</p>
            </div>

        </div>
        <div class="box item3" class="item3_que_es_yolopop">
            <p>Nuestra empresa se dedica a diseñar páginas y aplicaciones web, en este caso, YoloPop.
                Esta web está diseñada para Ajebask.
            </p>
            <a href="http://ajebaskalava.es/" target="_blank" ><img id="ajebask_img" src="Assets/MEDIA/ajebask.png"> </a>
        </div>

        <div class="box item4">
            <p>Somos el equpo 4 YOLO DESIGN® de Desarrollo de Aplicaciones Web de Egibide Arriaga.</p>
        </div>
        <div class="box item5" id="links_iconos">
            <a class="twitter"  target="_blank" href="https://twitter.com/?lang=ES"><i class="fab fa-twitter"></i></a>
            <a class="git" target="_blank" href="https://github.com/yolodesign/reto2"><i class="fab fa-github"></i></a>
            <a class="mail" tarjet="_blank" href="mailto:yolodesign.jas@gmail.com"> <i class="far fa-envelope"></i></a>
        </div>
    </div>
</section>


<?php
include("footer.php");
?>

