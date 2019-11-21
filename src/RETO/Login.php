<?php
include ("head.php");
include ("Session/DAO/UserDAO.php");
include ("Session/Conf/PersistentManager.php");
//include 'Session/Utils/SessionUtils.php';
//unset($_SESSION['user']);
?>

<div id="container-login">
    <div class="logButtons">
        <!--<input type="button" value="Log in" onclick="loginSign('login')">-->
        <input type="button" value="Sign in" onclick="loginSign('sign')">
    </div>
    <div class="login-item">
        <form action="Session/DAO/UserDAO.php" method="post" class="form form-login" onsubmit="return login()">
            <div class="form-field">
                <label class="user" for="login-username"><span class="hidden">Email</span></label>
                <input id="login-username" name="emailLogin" type="text" class="form-input" placeholder="Email" required>
            </div>

            <div class="form-field">
                <label class="lock" for="login-password"><span class="hidden">Password</span></label>
                <input id="login-password" name="passwordLogin" type="password" class="form-input" placeholder="Password" required>
            </div>

            <div class="form-field">
                <input type="submit" value="Log in">
            </div>
        </form>

            <?php
            if (isset($_GET['error']) && $_GET['error'] == "login"){
                echo "<div class=\"errorMLogin\">";
                echo "<p>Lo sentimos, los datos introducidos son incorrectos</p>";
                echo "</div>";
            }
            ?>

    </div>
</div>
<!--Sign up-->
<div id="container-signup">
    <div class="logButtons">
        <input type="button" value="Log in" onclick="loginSign('login')">
        <!--<input type="button" value="Sign in" onclick="loginSign('sign')">-->
    </div>
    <div class="login-item">
        <form action="Session/DAO/UserDAO.php" method="post" class="form form-login" onsubmit="return signup()" enctype="multipart/form-data">
            <div class="form-field">
                <label class="user" for="signup-name"><span class="hidden">Name</span></label>
                <input id="signup-name" name="name" type="text" class="form-input" placeholder="Name" required>
            </div>
            <div class="form-field">
                <label class="user" for="signup-lastname"><span class="hidden">Lastname</span></label>
                <input id="signup-lastname" name="lastname" type="text" class="form-input" placeholder="Lastname" required>
            </div>

            <div class="form-field">
                <label class="phone" for="signup-phone"><span class="hidden">Phone</span></label>
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

            <div class="form-field">
                <label class="email" for="signup-email"><span class="hidden">Email</span></label>
                <input id="signup-email" name="emailSignup" type="text" class="form-input" placeholder="Email" required>
            </div>

            <div class="form-field">
                <label class="lock" for="signup-password"><span class="hidden">Password</span></label>
                <input id="signup-password" name="passwordSignup" type="password" class="form-input" placeholder="Password" required>
            </div>
            <div class="uploadFile">
                <button class="uploadFileBtn">Upload a Image</button>
                <input type="file" id="nueva_foto" accept="image/*" name="fotoPerfil" />
            </div>

            <div class="form-field privacidad">
                <input type="checkbox" id="signup-privacidad" value=""><p>I have read and agree to the <a href="Login.php">Terms and Conditions</a> and <a href="">Privacy Policy</a></p>
            </div>
            <div class="form-field">
                <input type="submit" value="Sign up">
            </div>
        </form>
        <?php
        if (isset($_GET['error']) && $_GET['error'] == "signup"){
            echo "<div class=\"errorMLogin\">";
            echo "<p>Lo sentimos, el email ya está registrado</p>";
            echo "</div>";
        }
        ?>
        <div id="errorSign">
        </div>
    </div>
</div>
<?php
include ("footer.php");
?>
