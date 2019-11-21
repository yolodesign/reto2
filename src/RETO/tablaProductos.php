<?php
$datos = consultaCategoriasPro(connect(),$categoria->id);
?>



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
