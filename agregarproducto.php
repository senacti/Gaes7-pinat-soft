<?php

    include "Config/Conexion.php";

    $referencia = $_POST["referencia"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $sql = "INSERT INTO `productos` (producto_referencia , producto_nombre , producto_precio , producto_stock , producto_imagen) VALUES ('$referencia','$nombre','$precio','$stock','$imagen')";

    $resultado = $conexion->query($sql);

    if ($resultado) {
        header('Location: Productos.php');
    } else{
        echo "No se insertaron los datos";
    }