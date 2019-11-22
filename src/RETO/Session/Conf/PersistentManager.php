<?php


function connect()
{
    $dbname = "yolo";
    $host = "localhost";
    $user = "yolo";
    $pass = "12345";

    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}
?>