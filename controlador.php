<?php

if(!empty($_POST["btningresar"])){
    if (empty($_POST["nombres"]) and empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger">Los campos estan vacios</div>';
    } else {
        $nombres=$_POST["nombres"];
        $contraseña=$_POST["contraseña"];
        $sql=$conexion->query("select * from clientes where nombres='$nombres' and clave='$contraseña'");
        if ($datos=$sql->fetch_object()) {
            header("location: login.php");
        } else {
            echo '<div class="alert alert-danger">El usuario no existe</div>';
        }   
    }
}

?>