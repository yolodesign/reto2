<?php

?>

<html id="html">
<head>

    <title>Yolo pop</title>
    <link rel="StyleSheet" href="Assets/CSS/main.css" type="text/css">
    <link rel="icon" type="image/png" href="Assets/MEDIA/icono_yolo_sin.png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="Assets/JS/Login.js"></script>
    <script src="Assets/JS/header.js"></script>
    <script src="https://kit.fontawesome.com/1de908b2dd.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>

        <div id="nav_icon">
            <a href="index.php">  <img src="Assets/MEDIA/icono_yolo_sin.png" alt="Icono"/></a>
        </div>

        <div id="nav_title">
            <h1><a href="#">Yolo Pop</a></h1>
        </div>

        <!--
        <nav>
            <a href="#">ANUNCIATE</a>
            <a href="#">LOG IN</a>
            <a href="#">¡UNETE!</a>
            <div class="animation start-home"></div>
        </nav>
        -->
        <section class="top-nav">
            <input id="menu-toggle" type="checkbox" />
            <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button' onclick="menuOcultar()"></div>
            </label>
            <ul class="menu" id="menuDesp">
                <li>PERFIL</li>
                <li>ANUNCIOS</li>
                <li>SALIR</li>
            </ul>
        </section>
    </header>

