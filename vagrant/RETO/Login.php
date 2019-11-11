<?php
include ("head.php");
?>
<html id="loginHtml">
<head>
    <title>Yolo pop</title>
    <link rel="StyleSheet" href="Assets/CSS/main.css" type="text/css">
    <script src="Assets/JS/Login.js"></script>
</head>
<body id="loginBody">
<div id="container-login">
    <div class="logo">
        <input type="button" value="Log in" onclick="loginSign('login')">
        <input type="button" value="Sign in" onclick="loginSign('sign')">
    </div>
    <div class="login-item">
        <form action="" method="post" class="form form-login" onsubmit="return login()">
            <div class="form-field">
                <label class="user" for="login-username"><span class="hidden">Username</span></label>
                <input id="login-username" type="text" class="form-input" placeholder="Username" required>
            </div>

            <div class="form-field">
                <label class="lock" for="login-password"><span class="hidden">Password</span></label>
                <input id="login-password" type="password" class="form-input" placeholder="Password" required>
            </div>

            <div class="form-field">
                <input type="submit" value="Log in">
            </div>
        </form>
    </div>
</div>



<div id="container-signup">
    <div class="logo">
        <input type="button" value="Log in" onclick="loginSign('login')">
        <input type="button" value="Sign in" onclick="loginSign('sign')">
    </div>
    <div class="login-item">
        <form action="" method="post" class="form form-login" onsubmit="return signup()">
            <div class="form-field">
                <label class="user" for="signup-username"><span class="hidden">Name</span></label>
                <input id="signup-name" type="text" class="form-input" placeholder="Name" required>
            </div>
            <div class="form-field">
                <label class="user" for="signup-lastname"><span class="hidden">Lastname</span></label>
                <input id="signup-lastname" type="text" class="form-input" placeholder="Lastname" required>
            </div>
            <div class="form-field">
                <label class="cake" for="signup-birthday"><span class="hidden">Date</span></label>
                <input id="signup-birthday" type="date" class="birthday"  required>
            </div>

            <div class="form-field">
                <label class="gender" for="signup-gender"><span class="hidden">Gender</span></label>
                <select id="signup-gender" class="gender" required>
                    <option></option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="form-field">
                <label class="email" for="signup-email"><span class="hidden">Email</span></label>
                <input id="signup-email" type="text" class="form-input" placeholder="Email" required>
            </div>

            <div class="form-field">
                <label class="lock" for="signup-password"><span class="hidden">Password</span></label>
                <input id="signup-password" type="password" class="form-input" placeholder="Password" required>
            </div>
            <div class="form-field privacidad">
                <input type="checkbox" id="signup-privacidad" value=""><p>I have read and agree to the <a href="Login.php">Terms and Conditions</a> and <a href="">Privacy Policy</a></p>
            </div>
            <div class="form-field">
                <input type="submit" value="Sign up">
            </div>
        </form>
    </div>
</div>
</body>
</html>

