<?php
include("head.php");
include("Session/Conf/PersistentManager.php");
$dbh = connect();
include("Session/DAO/ProductDAO.php");
include("Session/DAO/CategoriaDAO.php");
include ("index.inc.php");
?>

<div id="indexBody">

    <div>
        <nav id="navCat">
            <div id="menuCat">
                <div id="menu-toggle-cat">
                    <div id="menu-icon">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
                <ul id="ulCatNav">
                    <?php
                        menuCat($categorias);
                    ?>
                </ul>
            </div>
        </nav>
        <div id="hero-section">
            <?php
            include("buscador.php");
            ?>
        </div>
        <?php
            sectionPorCat($categorias);
        ?>


    </div>

    <div>
        <?php
        consulta($dbh);
        ?>
    </div>
</div>

<?php
include("footer.php");
?>
