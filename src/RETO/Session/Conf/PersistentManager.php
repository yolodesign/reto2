<?php


function connect()
{
    $dbname = "yolo";
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    return $dbh;
}


?>