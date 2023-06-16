<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "la_pinatera";

$con = mysqli_connect($server, $host, $pass, $db);

if(!$con) {
    die("Conexion Fallida");
}