<?php
include "head.php";
include("Session/Conf/PersistentManager.php");
$dbh = connect();
include("Session/DAO/CategoriaDAO.php");
$id = $_GET['id'];
include "buscador.php";
?>
<!--
    <section class="contenido">
        <h1 id="tituloCat"><?php echo categoriaPorId($id, $dbh); ?></h1>
        <?php
        productosPorCategoria($id, $dbh);
        ?>
    </section>
-->

<?php
include "footer.php"
?>