<?php
    include "Config/Conexion.php";

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM productos WHERE producto_id = $Id";

    $sesultado = $conexion -> query($sql);

    if ($sesultado){
        header("location: Productos.php");
    } else {
        echo "No se elimino el dato";
    }