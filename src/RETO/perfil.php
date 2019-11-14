<?php
include ("head.php");
include 'Session/Utils/SessionUtils.php';
?>

<div id="contenedor">
    <div id="anuncios">
    </div>
    <div id="perfilCabecera">
        <img src="<?php //getImgProfile() ?>">
        <h1>Giorno Giovanna<?php $_SESSION['user'] ?></h1>
    </div>
    <div id="perfilDatos">
        <form action="Session/DAO/UserDAO.php" method="post" class="form form-login" onsubmit="return signup()">
            <div class="form-field">
                <label class="user" for="signup-username"><span class="hidden">Name</span></label>
                <input id="signup-name" name="name" type="text" class="form-input" placeholder="Name" required>
            </div>
            <div class="form-field">
                <label class="user" for="signup-lastname"><span class="hidden">Lastname</span></label>
                <input id="signup-lastname" name="lastname" type="text" class="form-input" placeholder="Lastname" required>
            </div>

            <div class="form-field">
                <label class="phone" for="signup-lastname"><span class="hidden">Phone</span></label>
                <input id="signup-phone" name="phone" type="text" class="form-input" placeholder="Phone number" required>
            </div>

            <div class="form-field">
                <label class="cake" for="signup-birthday"><span class="hidden">Date</span></label>
                <input id="signup-birthday" name="birthdate" type="date" class="birthday"  required>
            </div>
            <div class="form-field">
                <label class="gender" for="signup-gender"><span class="hidden">Gender</span></label>
                <select id="signup-gender" name="gender" class="gender" required>
                    <option></option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="uploadFile">
                <button class="uploadFileBtn">Upload a profile image</button>
                <input type="file" id="profImg" name="profImg" />
            </div>

        </form>
    </div>
    <div id="botonesPerfil">
        <input type="button" value="Cambiar datos">
        <input type="button" value="Borrar cuenta">
    </div>
</div>

<?php
include ("footer.php");
?>

