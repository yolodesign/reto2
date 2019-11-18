<?php
include("head.php");
include 'Session/Utils/SessionUtils.php';
include 'Session/Conf/PersistentManager.php';
include "Session/DAO/UserDAO.php";
//startSessionIfNotStarted();

function checkGender($genderP)
{
    $gender = getGenderProfile($_SESSION['user']);
    if ($genderP == $gender) {
        echo "selected";
    }
}

?>

<div class="perfil">
    <div class="box a">
        <form action="Session/DAO/UserDAO.php" method="post" class="form form-login" onsubmit="return validacionesPerfil()">
            <div class="form-field">
                <label class="user" for="profileName"><span class="hidden">Name</span></label>
                <input id="profileName" name="nameP" type="text" class="form-input" placeholder="Name" value="<?php echo getNamebyEmail($_SESSION['user']) ?>" required>
            </div>
            <div class="form-field">
                <label class="user" for="profileLastname"><span class="hidden">Lastname</span></label>
                <input id="profileLastname" name="lastnameP" type="text" class="form-input" placeholder="Lastname" value="<?php echo getLastnameProfile($_SESSION['user']) ?>" required>
            </div>

            <div class="form-field">
                <label class="phone" for="profilePhone"><span class="hidden">Phone</span></label>
                <input id="profilePhone" name="phoneP" type="text" class="form-input" placeholder="Phone number" value="<?php echo getPhoneProfile($_SESSION['user']) ?>" required>
            </div>

            <div class="form-field">
                <label class="cake" for="profileBirthday"><span class="hidden">Date</span></label>
                <input id="profileBirthday" name="birthdateP" type="date" class="birthday" value="<?php echo getBirthdateProfile($_SESSION['user']) ?>" required>
            </div>
            <div class="form-field">
                <label class="gender" for="profileGender"><span class="hidden">Gender</span></label>
                <select id="profileGender" name="genderP" class="gender" required>
                    <option <?php checkGender('Male'); ?>>Male</option>
                    <option <?php checkGender('Female'); ?>>Female</option>
                </select>
            </div>
            <div class="uploadFile">
                <button class="uploadFileBtn">Upload a profile image</button>
                <input type="file" id="profileImg" name="profImgP"/>
            </div>
            <div id="botonesPerfil">
                <input type="submit" name="update" value="Cambiar datos">
                <input type="submit" name="borrar" value="Borrar cuenta">
            </div>
        </form>
    </div>
    <div class="box b">
        <div id="perfilCabecera">
            <img src="<?php echo getImgProfile($_SESSION['user']) ?>">
            <h1><?php echo getNamebyEmail($_SESSION['user']) ?></h1>
            <p><?php echo $_SESSION['user'] ?></p>
            <p><?php echo getIdUsuarioByEmail() ?></p>
        </div>
        <div id="datos">
            <div>
                <h3>Nombre</h3><p><?php echo getNamebyEmail($_SESSION['user']) ?></p>
            </div>
            <div>
                <h3>Apellido</h3><p><?php echo getLastnameProfile($_SESSION['user']) ?></p><br>
            </div>
            <div>
                <h3>Teléfono</h3><p><?php echo getPhoneProfile($_SESSION['user']) ?></p><br>
            </div>
            <div>
                <h3>Género</h3><p><?php echo getGenderProfile($_SESSION['user']) ?></p><br>
            </div>
            <div>
                <h3>Fecha de nacimiento</h3><p><?php echo getBirthdateProfile($_SESSION['user']) ?></p><br>
            </div>
            <div>
                <h3>Correo</h3><p><?php echo getNamebyEmail($_SESSION['user']) ?></p><br>
            </div>

        </div>
    </div>

    <div class="box c">
        <div id="anuncios">
            <ul>
                <li>Ver Perfil</li>
                <li>Subir Anuncio</li>
                <li>Editar Perfil</li>
            </ul>
        </div>

    </div>
    <div class="box d">
        <form action="Session/DAO/UserDAO.php" method="post">
            <button id="boton_log_out" name="cerrarSession">LOG OUT</button>
        </form>

    </div>
</div>













<!--
<div id="contenedor">
    <div id="anuncios">
        <ul>
            <li>Ver Perfil</li>
            <li>Subir Anuncio</li>
            <li>Editar Perfil</li>
        </ul>
    </div>
    <div id="perfilCabecera">
        <img src="<?php //echo getImgProfile($_SESSION['user']) ?>">
        <h1><?php //echo getNamebyEmail($_SESSION['user']) ?></h1>
        <p><?php //echo $_SESSION['user'] ?></p>
        <p><?php //echo getIdUsuarioByEmail() ?></p>
    </div>
    <div id="perfilCuerpo">
        <div id="perfilDatos">
            <form action="Session/DAO/UserDAO.php" method="post" class="form form-login" onsubmit="return validacionesPerfil()">
                <div class="form-field">
                    <label class="user" for="profileName"><span class="hidden">Name</span></label>
                    <input id="profileName" name="nameP" type="text" class="form-input" placeholder="Name" value="<?php //echo getNamebyEmail($_SESSION['user']) ?>" required>
                </div>
                <div class="form-field">
                    <label class="user" for="profileLastname"><span class="hidden">Lastname</span></label>
                    <input id="profileLastname" name="lastnameP" type="text" class="form-input" placeholder="Lastname" value="<?php //echo getLastnameProfile($_SESSION['user']) ?>" required>
                </div>

                <div class="form-field">
                    <label class="phone" for="profilePhone"><span class="hidden">Phone</span></label>
                    <input id="profilePhone" name="phoneP" type="text" class="form-input" placeholder="Phone number" value="<?php //echo getPhoneProfile($_SESSION['user']) ?>" required>
                </div>

                <div class="form-field">
                    <label class="cake" for="profileBirthday"><span class="hidden">Date</span></label>
                    <input id="profileBirthday" name="birthdateP" type="date" class="birthday" value="<?php //echo getBirthdateProfile($_SESSION['user']) ?>" required>
                </div>
                <div class="form-field">
                    <label class="gender" for="profileGender"><span class="hidden">Gender</span></label>
                    <select id="profileGender" name="genderP" class="gender" required>
                        <option <?php //checkGender('Male'); ?>>Male</option>
                        <option <?php //checkGender('Female'); ?>>Female</option>
                    </select>
                </div>
                <div class="uploadFile">
                    <button class="uploadFileBtn">Upload a profile image</button>
                    <input type="file" id="profileImg" name="profImgP"/>
                </div>
                <div id="botonesPerfil">
                    <input type="submit" name="update" value="Cambiar datos">
                    <input type="submit" name="borrar" value="Borrar cuenta">
                </div>
            </form>
        </div>
        <div id="datos">
            <div>
                <h3>Nombre</h3><p><?php //echo getNamebyEmail($_SESSION['user']) ?></p>
            </div>
            <div>
                <h3>Apellido</h3><p><?php //echo getLastnameProfile($_SESSION['user']) ?></p><br>
            </div>
            <div>
                <h3>Teléfono</h3><p><?php //echo getPhoneProfile($_SESSION['user']) ?></p><br>
            </div>
            <di>
                <h3>Género</h3><p><?php //echo getGenderProfile($_SESSION['user']) ?></p><br>
            </di>
            <div>
                <h3>Fecha de nacimiento</h3><p><?php //echo getBirthdateProfile($_SESSION['user']) ?></p><br>
            </div>
            <div>
                <h3>Correo</h3><p><?php //echo getNamebyEmail($_SESSION['user']) ?></p><br>
            </div>

        </div>
    </div>

</div>
-->
<?php
include("footer.php");
?>

