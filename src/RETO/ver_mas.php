<?php
include "head.php";
include("Session/Conf/PersistentManager.php");
$dbh = connect();
include("Session/DAO/CategoriaDAO.php");
$id = $_GET['id'];
include "buscador.php";
?>

    <section id="contenedorProductosVerMas">
        <div id="tablaVerMas">
            <h1 id="tituloCat"><?php echo categoriaPorId($id, $dbh); ?></h1>
            <table id="verMasProductos">
                <?php
                productosPorCategoria($id, $dbh);
                ?>
            </table>
        </div>
    </section>
<?php
include "footer.php"
?>