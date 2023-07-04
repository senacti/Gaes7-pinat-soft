<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles2.css">
    <title>Login administrador</title>
</head>
<body>
    <div class="contenedor">
        <h1><ins>Iniciar sesión administrador</ins></h1>
        <br>
        <form action="loginadmin.php" method="POST">
            <label for="">
                <img width="25px" src="ICONS/User.svg" alt="">
                Usuario
            </label>
            <input type="text" placeholder="Ingrese usuario" name="Usuario">
            <label for="">
                <img width="25px" src="ICONS/Key.svg" alt="">
                Clave
            </label>
            <input type="password" placeholder="Ingrese contraseña" name="Clave">
            <button class="button">
                Entrar
            </button>
        </form>
    </div>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Usuario = $_POST["Usuario"];
    $Clave = $_POST["Clave"];
}


if (empty($Usuario)) {
   //ingresar todos los campos

   exit;
}

$usuario_correcto = 'AdministradorLapiñatera';
if ($Usuario !== $usuario_correcto) {
    ?>
    <?php
    exit;
}


if (empty($Clave)) {
      //ingresar todos los campos

    exit;
}
$clave_correcta = 'administrador2023';
if ($Clave !== $clave_correcta) {
    ?>
    <?php
    exit;
}
header("Location: administrador.php");
exit;
?>

</body>
</html>