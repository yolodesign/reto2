<?php

function menuCat($categorias){
    foreach ($categorias as $categoria) {
        echo "<li class=\"liCatNav\">{$categoria->nombre}<a href=\"#section{$categoria->id}\"></a></li>";
    }
}

function sectionPorCat($categorias){
    foreach ($categorias as $categoria) {
        echo "<section id=\"section{$categoria->id}\">
                    <div class='sectionDiv'><a href=ver_mas.php?id={$categoria->id}>Ver mas</a> <h1>{$categoria->nombre}</h1> ";?>
        <?php
        $datos = consultaCategoriasPro(connect(),$categoria->id);?>
        <ul class="cards">
            <?php
            while($row = $datos->fetch()){
                echo "<li class=\"cards__item\">";
                echo "<div class=\"card\">";
                echo "<div class=\"card__image\" style='background-image: url(Assets/MEDIA/" . $row['fotoproducto'] . ")'></div>";
                echo "<div class=\"card__content\">";
                echo "<div class=\"card__title\">{$row['nombreproducto']}</div>";
                echo "<p class=\"card__text\">{$row['descproducto']}  </p>";
                echo "<a href='verProducto.php?id={$row["idproducto"]}' class=\"btn btn--block card__btn\">Ir al producto</a></div></div></li>";

            }
            ?>
        </ul>

        <?php
        echo "</div></section>";
    }

}

/*
 <ul class="cards">
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--fence"></div>
      <div class="card__content">
        <div class="card__title">Flex</div>
        <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
        <button class="btn btn--block card__btn">Button</button>
      </div>
    </div>
  </li>
 */

/**
 *
<table>
<?php
while($row = $datos->fetch()){
echo "<td><stron>{$row['nombreproducto']} </stron></td></tr>";
echo '<tr><td> <a href=\'verProducto.php?id=' .$row["idproducto"] .'\'><img class ="imagenAnuncion" src="Assets/MEDIA/' . $row['fotoproducto'] . '"></a></td></tr>';
echo "<tr><td>  {$row['descproducto']}  </td></tr>";
}
?>
</table>
 *
 *
 *
 */
