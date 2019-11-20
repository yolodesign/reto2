<?php
include("head.php");
include("Session/DAO/ProductDAO.php");
include("Session/Conf/PersistentManager.php");
$dbh = connect();
$id = 1;
?>
<div id="paginaProducto">
    <div id="contenedorProducto" style="display: none">

        <div id="productoHead">
            <h1><?php echo getNombreProductoById($id, $dbh) ?></h1>
            <img src="Assets/MEDIA/coche.jpg">
        </div>

        <p><?php echo getDescripcionProductoById($id, $dbh) ?></p>
        <div id="productoBody">
            <p id="fechaProd"><?php echo getFechaProductoById($id, $dbh) ?></p>
            <p id="persona"><?php echo "Giorno Giovanna"; ?></p>
            <p id="direccion"><?php echo getDireccionProductoById($id, $dbh) ?></p>
        </div>
    </div>
    <div id="actualizarAnuncio" >
        <div class="login-item">
            <form action="Session/DAO/ProductDAO.php?id=<?php echo $id ?>" method="post" class="form form-login" onsubmit="return subirAnuncio()">
                <div class="form-field">
                    <label class="nombreProducto" for="nombreProducto"><span class="hidden">Nombre</span></label>
                    <input id="nombreProducto" name="nombreProductoA" type="text" class="form-input" value="<?php echo getNombreProductoById($id, $dbh) ?>" required>
                </div>
                <div class="form-field">
                    <label class="direccionProducto" for="direccionProducto"><span class="hidden">Direccion</span></label>
                    <input id="direccionProducto" name="direccionProductoA" type="text" class="form-input" value="<?php echo getDireccionProductoById($id, $dbh) ?>" required>
                </div>
                <div class="form-field">
                    <label class="descpcionProducto" for="descrpcionProducto"><span class="hidden">Descripcion</span></label>
                    <textarea id="descrpcionProducto" name="descrpcionProductoA" class="form-input"><?php echo getDescripcionProductoById($id, $dbh) ?></textarea>
                </div>
                <div class="uploadFile">
                    <button class="uploadFileBtn">Upload a image</button>
                    <input type="file" id="fotoProducto" name="fotoProductoA"/>
                </div>
                <div class="form-field">
                    <input type="submit" name="actualizarAnuncio" value="Actualizar anuncio">
                </div>
            </form>
        </div>
    </div>
    <div>
        <form action="Session/DAO/ProductDAO.php?id=<?php echo $id ?>" method="post" id="formBotones">
            <input type="submit" id="boton_contacto" name="enviarP" value="Ponerse en contacto">
            <input type="submit" id="boton_update" name="" value="Modificar producto">
            <input type="submit" id="boton_log_out" name="borrarP" value="Borrar producto">
        </form>

    </div>
</div>


<?php
include("footer.php");
?>

