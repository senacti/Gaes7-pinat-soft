<?php

error_reporting(1);

include "Config/Conexion.php";

$Id = $_REQUEST['Ideditar'];

$NombreUsuario = $_POST['usuarionombre'];
$NombreCompleto = $_POST['completonombre'];
$Email = $_POST['usuarioemail'];
$Telefono = $_POST['usuariotelefono'];
$Contraseña = $_POST['usuarioContraseña'];
$Id_rol = $_POST['usuariorol'];

$sql = "UPDATE usuarios SET
NombreUsuario = '$NombreUsuario',
NombreCompleto = '$NombreCompleto',
Email = '$Email',
Telefono = '$Telefono',
Contraseña = '$Contraseña',
Id_rol = '$Id_rol' WHERE Id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('location: Dashboard.php');
} else{
    echo "No se insertaron los datos";
}