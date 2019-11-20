<?php
include("head.php");
include("Session/Conf/PersistentManager.php");
include("Session/DAO/ProductDAO.php");
include("Session/DAO/CategoriaDAO.php");


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
                    <?php
                    foreach ($categorias as $categoria) {
                        echo "<li class=\"liCatNav\">{$categoria->nombre}<a href=\"#section{$categoria->id}\"></a></li>";
                    }
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
        $categoriaspro = consultaCategoriasPro($dbh);
        foreach ($categorias as $categoria) {
            echo "<section id=\"section{$categoria->id}\">
                    <div > <h1>{$categoria->nombre}</h1> 
                    
                    
                    <table>
    <thead>
    <tr>
        <th>$categoriaspro->nombreproducto</th>
    </tr>
    </thead>
    <tbody>

    <td>
    </td>
    </tr>

    </tbody>
</table>
                    
                    
                    
                    
                    
                    </div>
                  </section>";
        }
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
