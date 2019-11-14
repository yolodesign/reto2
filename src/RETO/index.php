<?php
include("head.php");
include("Session/DAO/ProductDAO.php");
include("Session/Conf/PersistentManager.php");
session_start();
$dbh = connect();
include "buscador.php";
?>




<?php

consulta($dbh);

?>
</div>

<?php
include("footer.php");
?>
