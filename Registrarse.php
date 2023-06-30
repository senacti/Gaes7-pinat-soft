<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles3.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="contenedor">
        <h1><ins>Registrarse</ins></h1>
        <br>
        <form action="Login/Registrarse.php" method="post">

            <?php if (isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error']?></p>
            <?php } ?>
            <br>
            <?php if (isset($_GET['success'])){ ?>
                <p class="success"><?php echo $_GET['success']?></p>
            <?php } ?>
            <br>
            <label for="">
                <img width="25px" src="ICONS/User.svg" alt="">
                Usuario
            </label>
            <input type="text" placeholder="Ingrese usuario" name="usuario">

            <label for="">
                <img width="25px" src="ICONS/User2.svg" alt="">
                Nombre completo
            </label>
            <input type="text" placeholder="Ingrese nombre completo" name="nombrecompleto">
            
            <label for="">
                <img width="25px" src="ICONS/At.svg" alt="">
                Correo electrónico
            </label>
            <input type="email" placeholder="Ingrese correo electrónico" name="correo">

            <label for="">
                <img width="25px" src="ICONS/Call.svg" alt="">
                Teléfono
            </label>
            <input type="number" placeholder="Ingrese teléfono" name="telefono">

            <label for="">
                <img width="25px" src="ICONS/Key.svg" alt="">
                Contraseña
            </label>
            <input type="password" placeholder="Ingrese contraseña" name="contraseña">
            
            <label for="">
                <img width="25px" src="ICONS/key2.svg" alt="">
                Repetir contraseña
            </label>
            <input type="password" placeholder="Repita contraseña" name="rcontraseña">

            <input type="submit" class="button" value="Registrarse">
            <a href="Login.php" class="Boton_Ingresar">
                Ingresar
            </a>
        </form>
    </div>
</body>
</html>