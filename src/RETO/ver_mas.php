<?php
include "head.php";
//include("Session/DAO/ProductDAO.php");
//include("Session/Conf/PersistentManager.php");
//session_start();
//$dbh = connect();
include "buscador.php";
?>

    <section class="contenido">
        <div class="ver_mas_anuncios">
                <div class="box item1">
                    <h2>Esto es lo que hemos encontrado</h2>
                </div>
                <div class="box item2">

                    <div class="foto_anuncio">
                        <img src="https://cdn1.iconfinder.com/data/icons/minicons-4/64/box_split_cross-512.png" alt="foto"/>
                    </div>

                    <div class="descripcion_anuncio">
                        <h2>Titulo</h2>
                        <p>Descripcion</p>
                    </div>



                </div>
                <div class="box item3">Three</div>
                <div class="box item4">Four</div>
                <div class="box item5">Five</div>
            </div>
    </section>



<?php
include "footer.php"
?>