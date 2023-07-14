<?php

error_reporting(1);

include "Config/Conexion.php";

$Id=$_REQUEST['Ideditar'];

$Referencia = $_POST['referenciaproducto'];
$Nombre = $_POST['nombreproducto'];
$Precio = $_POST['precioproducto'];
$Stock = $_POST['stockproducto'];
$Imagen = addslashes(file_get_contents($_FILES['imagenproducto']['tmp_name']));

$sql = "UPDATE productos SET
producto_referencia = '$Referencia',
producto_nombre = '$Nombre',
producto_precio = '$Precio',
producto_stock = '$Stock',
producto_imagen = '$Imagen' WHERE producto_id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
        header('Location: Productos.php');
    } else{
        echo "No se insertaron los datos";
    }