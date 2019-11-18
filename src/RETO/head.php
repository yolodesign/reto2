<?php

?>

<html id="html">
<head>

    <title>Yolo pop</title>
    <link rel="StyleSheet" href="Assets/CSS/main.css" type="text/css">
    <link rel="StyleSheet" href="Assets/CSS/buscador.css" type="text/css">
    <link rel="Stylesheet" href="Assets/CSS/navegacionCategorias.css" type="text/css">
    <link rel="icon" type="image/png" href="Assets/MEDIA/icono_yolo_sin.png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="Assets/JS/Login.js"></script>
    <script src="Assets/JS/header.js"></script>
    <script src="Assets/JS/search_julen.js"></script>
    <script src="Assets/JS/jquery-3.4.1.js"></script>
    <script src="Assets/JS/navegacionCategorias.js"></script>
    <script src="https://kit.fontawesome.com/1de908b2dd.js" crossorigin="anonymous"></script>

</head>
<body id="loginBody">
<header>

    <div id="nav_icon">
        <a href="index.php"> <img src="Assets/MEDIA/icono_yolo_sin.png" alt="Icono"/></a>
    </div>

    <div id="nav_title">
        <h1><a href="index.php">Yolo Pop</a></h1>
    </div>
    <article class="top-nav">
        <input id="menu-toggle" type="checkbox"/>
        <label class='menu-button-container' for="menu-toggle">
            <div class='menu-button' onclick="visualizarMenu();"></div>
        </label>
        <ul class="menu" id="menu_desplegable">
            <li>ANUNCIATE</li>
            <li><a href="Login.php">LOG IN</a></li>
            <li>¡UNETE!</li>
        </ul>
    </article>
</header>


