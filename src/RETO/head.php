<?php

?>

<html id="html">
<head>

    <title>Yolo pop</title>
    <link rel="StyleSheet" href="Assets/CSS/main.css" type="text/css">
    <link rel="icon" type="image/png" href="Assets/MEDIA/icono_yolo_sin.png" sizes="16x16">
    <script src="Assets/JS/Login.js"></script>
    <script src="https://kit.fontawesome.com/1de908b2dd.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <nav id="headNav">
            <div id="nav_icon">

                <a href="index.php">  <img src="Assets/MEDIA/icono_yolo.png" alt="Icono"/></a>

            </div>

            <div id="nav_title">
                <h1><a href="#">Yolo Pop</a></h1>
            </div>

            <div id="nav_links">
                <div class="logButtons">
                    <input type="button" value="+ Anuncio" />
                    <input type="button" value="Log in" onclick="loginSign('login')"/>
                    <input type="button" value="Sign in" onclick="loginSign('sign')"/>


                </div>
            </div>
        </nav>
    </header>


<!--

    <ul id="headUl">
        <li><a href="#">  <img src="Assets/MEDIA/icono_yolo.png" alt="Icono"/></a></li>
        <li><a href="#">Subir Producto</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="#">Salir</a></li>
    </ul>
-->

