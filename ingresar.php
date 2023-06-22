<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles5.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de sesion administrador</title>
</head>
<body>
    <form action="inicio.php" method="post">
        <h1>Iniciar sesion</h1>
        <h1>administrador</h1>
        <hr>
        <i class="fa-solid fa-at"></i>
        <label>Correo electronico</label>
        <input type="gmail" name="gmail" placeholder="Correo electronico" required>
        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="password" name="Contraseña" placeholder="Contraseña" required>
        <hr>
        <input type="submit" value="Iniciar">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $correo = $_POST["gmail"];
    $contraseña = $_POST["Contraseña"];
}

if (empty($correo)) {
   //ingresar todos los campos

}

if (empty($contraseña)) {
      //ingresar todos los campos

    exit;
}

$correo_correcto = 'administrador@lapiñatera.com';
if ($correo !== $correo_correcto) {
    ?>
    <div class="validacion">
      <?php echo "El correo ingresado es incorrecto."; ?>
    </div>
    <?php
    exit;
}

$contraseña_correcta = 'la_piñatera2023';
if ($contraseña !== $contraseña_correcta) {
    ?>
    <div class="validacion">
      <?php echo "La contraseña ingresada es incorrecta."; ?>
    </div>
    <?php
    exit;
}
header("inicio2.php");
exit;
?>
</body>
</html>