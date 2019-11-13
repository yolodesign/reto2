<?php
include("head.php");
include("Session/DAO/ProductDAO.php");
include("Session/Conf/PersistentManager.php");
$dbh = connect();
?>

<body id="indexBody">
<div id="buscador">
    <input type="search" id="miBusqueda" placeholder="buscador" size="75" autofocus>
    <button>Buscar</button>
</div>

<?php

consulta($dbh);

?>

<?php
include("footer.php");
?>
