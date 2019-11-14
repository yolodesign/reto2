<?php
include("head.php");
include("Session/DAO/ProductDAO.php");
include("Session/Conf/PersistentManager.php");
session_start();
$dbh = connect();
?>

<div id="indexBody">
<div id="buscadorDiv">
    <section class="buscadorSection">
        <form action="" method="">
            <input type="search" placeholder="Introduce tu busqueda" autofocus>
            <button>Buscar</button>
        </form>
    </section>
</div>


<?php

consulta($dbh);

?>
</div>

<?php
include("footer.php");
?>
