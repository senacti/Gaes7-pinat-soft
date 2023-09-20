<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Styles2.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="contenedor">
        <h1><ins>Registrarse</ins></h1>
        <br>
        <form action="Login/Registrarse.php" method="POST">

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']?></p>
            <?php } ?>
            <br>
            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']?></p>
            <?php } ?>
            <label for="">
                <img width="25px" src="ICONS/User.svg" alt="">
                Usuario
            </label>
            <input type="text" placeholder="Ingrese usuario" name="Usuario">

            <label for="">
                <img width="25px" src="ICONS/User.svg" alt="">
                Nombre Completo
            </label>
            <input type="text" placeholder="Ingrese nombre completo" name="NombreCompleto">

            <label for="">
                <img width="25px" src="ICONS/At-circle.svg" alt="">
                Correo electronico
            </label>
            <input type="email" placeholder="Ingrese correo electronico" name="CorreoElectronico">

            <label for="">
                <img width="25px" src="ICONS/Call.svg" alt="">
                Telefono
            </label>
            <input type="number" placeholder="Ingrese telefono" name="Telefono">

            <label for="">
                <img width="25px" src="ICONS/Key.svg" alt="">
                Contraseña
            </label>
            <input type="password" placeholder="Ingrese Clave" name="Contraseña">

            <label for="">
                <img width="25px" src="ICONS/Key2.svg" alt="">
                Repetir Contraseña
            </label>
            <input type="password" placeholder="Repeta Clave" name="RContraseña">
            
            <input type="submit" class="button" value="Registrarse">
            <a href="Iniciosesión.php" class="Boton_Ingresar">
                Ingresar
            </a>
        </form>
    </div>
</body>
</html>