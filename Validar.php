<?php
$NombreUsuario = $_POST['NombreUsuario'];
$Contraseña = $_POST['Contraseña'];
session_start();
$_SESSION['NombreUsuario']=$NombreUsuario;

$conexion=mysqli_connect("localhost","root","","la_piñatera");
$consulta= "SELECT * FROM usuarios WHERE NombreUsuario='$NombreUsuario' and Contraseña = '$Contraseña'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_fetch_array($resultado);

if($filas['Id_rol'] == 1){ //admin
        
    header('Location: ../Dashboard.php');

}else if($filas['Id_rol'] == 2){//Vendedor

    header('Location: ../Vendedor.php');

}else if($filas['Id_rol'] == 3){//Cliente

    header('Location: ../Inicio.php');
    
}

else{
    ?>
    <?php
    include("Iniciarsesion.php");
    ?>
    <h1 class="bad">ERRROR EN LA AUTENTICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);