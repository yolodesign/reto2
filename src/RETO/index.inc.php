<?php

function menuCat($categorias){
    foreach ($categorias as $categoria) {
        echo "<li class=\"liCatNav\">{$categoria->nombre}<a href=\"#section{$categoria->id}\"></a></li>";
    }
}

function sectionPorCat($categorias){
    foreach ($categorias as $categoria) {
        echo "<section id=\"section{$categoria->id}\">
                    <div > <h1>{$categoria->nombre}</h1> ";?>
        <?php
        $datos = consultaCategoriasPro(connect(),$categoria->id);?>
        <table>
            <thead>
            <tr>
                <th> Productos</th>

            </tr>
            </thead>
            <tbody>

            <?php


            while($row = $datos->fetch()){
                echo "<tr><td> {$row['nombreproducto']} </td>";
                echo '<td> <img class ="imagenAnuncion" src="Assets/MEDIA/' . $row['fotoproducto'] . '"></td>';
                echo "<td>  {$row['descproducto']}  </td></tr>";
            }
            ?>


            </tbody>
        </table>
        <?php
        echo "</div></section>";
    }

}

/*
 *
 * <table>
            <thead>
            <tr>
                <th>prueba</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>pruebatd</td>
            </tr>
            </tbody>
        </table>
 */