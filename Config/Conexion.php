<?php

$host="localhost";
$user="root";
$pass="";
$db="la_piñatera";

$conexion = new mysqli($host, $user, $pass, $db);

if(!$conexion) {
    echo "Conexion fallida";
}

?>