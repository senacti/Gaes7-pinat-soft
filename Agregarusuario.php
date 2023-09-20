<?php

    include "Config/Conexion.php";

    $nombreusuario = $_POST["nombreusuario"];
    $nombrecompleto = $_POST["nombrecompleto"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $contraseña = $_POST["contraseña"];
    $rol = $_POST["rol"];

    $sql = "INSERT INTO `usuarios` (NombreUsuario , NombreCompleto , Email , Telefono , Contraseña , Id_rol) VALUES ('$nombreusuario','$nombrecompleto','$email','$telefono','$contraseña','$rol')";

    $resultado = $conexion->query($sql);

    if ($resultado) {
        header('location: Dashboard.php');
    } else{
        echo "No se insertaron los datos";
    }