<?php

function menuCat($categorias){
    foreach ($categorias as $categoria) {
        echo "<li class=\"liCatNav\">{$categoria->nombre}<a href=\"#section{$categoria->id}\"></a></li>";
    }
}

function sectionPorCat($categorias){
    foreach ($categorias as $categoria) {
        echo "<section id=\"section{$categoria->id}\">
                    <div ><a href=ver_mas.php?id={$categoria->id}>Ver mas</a> <h1>{$categoria->nombre}</h1> ";?>
        <?php
        $datos = consultaCategoriasPro(connect(),$categoria->id);?>
        <table>
            <?php
            while($row = $datos->fetch()){
                echo "<td><stron>{$row['nombreproducto']} </stron></td></tr>";
                echo '<tr><td> <a href=\'verProducto.php?id=' .$row["idproducto"] .'\'><img class ="imagenAnuncion" src="Assets/MEDIA/' . $row['fotoproducto'] . '"></a></td></tr>';
                echo "<tr><td>  {$row['descproducto']}  </td></tr>";
            }
            ?>
        </table>

        <?php
        echo "</div></section>";
    }

}
