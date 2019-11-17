<?php
include ("head.php");
include ("Session/DAO/UserDAO.php");
include ("Session/Conf/PersistentManager.php");
include 'Session/Utils/SessionUtils.php';
?>
<div id="container-login">

    <div class="login-item">
        <form action="Session/DAO/UserDAO.php" method="post" class="form form-login" onsubmit="return login()">
            <div class="form-field">
                <label class="user" for="nombreProducto"><span class="hidden">Nombre</span></label>
                <input id="nombreProducto" name="nombreProducto" type="text" class="form-input" placeholder="Nombre" required>
            </div>

            <div class="form-field">
                <label class="lock" for="descrpcionProducto"><span class="hidden">Descripcion</span></label>
                <input id="descrpcionProducto" name="descrpcionProducto" type="text" class="form-input" placeholder="Descripción" required>
            </div>
            <div class="form-field">
                <label class="lock" for="direccionProducto"><span class="hidden">Direccion</span></label>
                <input id="direccionProducto" name="direccionProducto" type="text" class="form-input" placeholder="Dirección" required>
            </div>

            <div class="form-field">
                <input type="submit" value="Subir anuncio">
            </div>
        </form>
    </div>
</div>