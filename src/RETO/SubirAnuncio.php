<?php
include ("head.php");
include ("Session/DAO/ProductDAO.php");
include ("Session/Conf/PersistentManager.php");
//include 'Session/Utils/SessionUtils.php';
?>
<div id="container-login">
    <div class="login-item">
        <form action="Session/DAO/ProductDAO.php" method="post" class="form form-login" onsubmit="return subirAnuncio()" enctype="multipart/form-data">
            <div class="form-field">
                <label class="nombreProducto" for="nombreProducto"><span class="hidden">Nombre</span></label>
                <input id="nombreProducto" name="nombreProducto" type="text" class="form-input" placeholder="Nombre" required>
            </div>
            <div class="form-field">
                <label class="direccionProducto" for="direccionProducto"><span class="hidden">Direccion</span></label>
                <input id="direccionProducto" name="direccionProducto" type="text" class="form-input" placeholder="Dirección" required>
            </div>
            <div class="form-field">
                <label class="categ" for="categoriaProducto"><span class="hidden">Gender</span></label>
                <select id="categoriaProducto" name="categoriaProducto" class="categ" required>
                    <option></option>
                    <?php mostrarCategorias(); ?>
                </select>
            </div>
            <div class="form-field">
                <label class="descpcionProducto" for="descrpcionProducto"><span class="hidden">Descripcion</span></label>
                <textarea id="descrpcionProducto" name="descrpcionProducto" class="form-input" placeholder="Descripción"></textarea>
            </div>
            <div class="uploadFile">
                <button class="uploadFileBtn">Upload a image</button>
                <input type="file" id="fotoProducto" name="fotoProducto" accept="image/*" />
            </div>
            <div class="form-field">
                <input type="submit" name="subirAnuncio" value="Subir anuncio">
            </div>
        </form>
    </div>
</div>
<?php
include("footer.php");
?>