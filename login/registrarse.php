<?php

session_start();

include_once('../config/conexion.php');
if (isset($_POST['Numero']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['contraseña'])) {
    function validar($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    function validar($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $identificacion = validar($_POST['Numero']);
    $nombres = validar($_POST['nombres']);
    $apellidos = validar($_POST['apellidos']);
    $email = validar($_POST['email']);
    $telefono = validar($_POST['telefono']);
    $contraseña = validar($_POST['contraseña']);
}