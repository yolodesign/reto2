<?php
include "head.php";
include("Session/Conf/PersistentManager.php");
$dbh = connect();
include("Session/DAO/CategoriaDAO.php");
$id = $_GET['id'];
?>
<div id="buscadorVerMas">
    <?php
    include "buscador.php";
    ?>
</div>


    <section id="contenedorProductosVerMas">
        <div id="tablaVerMas">
            <h1 id="tituloCat"><?php echo categoriaPorId($id, $dbh); ?></h1>
            <table id="verMasProductos">
                <?php
                if (isset($_GET['id'])){
                    if (isset($_GET['palabra'])){
                        $palabra = $_GET['palabra'];
                        //$id = idCategoriaPorNombre($_GET['nombreCat'], $dbh);
                        productosPorCategoriaNombre($id, $palabra, $dbh);
                    }else{
                        productosPorCategoria($id, $dbh);
                    }
                }else{
                        seleccionarTodosPorCategoria($dbh);
                }


                ?>
            </table>
        </div>
    </section>
<?php
include "footer.php"
?>