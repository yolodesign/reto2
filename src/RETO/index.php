<?php
include ("head.php");
include ("Session\DAO\ProductDAO.php");
include ("Session\Conf\PersistentManager.php");
?>

<body id="indexBody">
    <div id="buscador">
        <input type="search" id="miBusqueda" placeholder="buscador" size="75" autofocus >
        <button>Buscar</button>
    </div

    <?php
    $dbh = connect();
    consulta($dbh);

    ?>
        
</body>
<?php
include ("footer.php");
?>