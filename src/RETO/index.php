<?php
include("head.php");
include("Session/DAO/ProductDAO.php");
include_once("Session/Conf/PersistentManager.php");

$dbh = connect();
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
                    <li class="liCatNav">Categoria1<a href="#section00"></a></li>
                    <li class="liCatNav">Categoria2<a href="#section01"></a></li>
                    <li class="liCatNav">Categoria3<a href="#section02"></a></li>
                    <li class="liCatNav">Categoria4<a href="#section03"></a></li>
                </ul>
            </div>
        </nav>
        <div id="hero-section">
            <?php
            include("buscador.php");
            ?>
        </div>
        <section id="section00">
            <div id="heading"></div>
        </section>
        <section id="section01">
            <div id="heading"></div>
        </section>
        <section id="section02">
            <div id="heading"></div>
        </section>
        <section id="section03">
            <div id="heading"></div>
        </section> 
    </div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>

    <div>
        <?php
        consulta($dbh);
        ?>
    </div>
</div>

<?php
include("footer.php");
?>
