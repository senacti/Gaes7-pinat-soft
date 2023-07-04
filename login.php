<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles2.css">
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
        <h1><ins>Iniciar sesión</ins></h1>
        <br>
        <form action="Login/LoginAuth.php" method="POST">
            <?php if(isset($_GET['error'])) { ?>
                <p><?php echo $_GET['error']?></p>
            <?php } ?>
            <label for="">
                <img width="25px" src="ICONS/User.svg" alt="">
                Usuario
            </label>
            <input type="text" placeholder="Ingrese usuario" name="usuario">
            <label for="">
                <img width="25px" src="ICONS/Key.svg" alt="">
                Contraseña
            </label>
            <input type="password" placeholder="Ingrese contraseña" name="contraseña">
            <button class="button">
                Ingresar
            </button>
            <a href="Registrarse.php" class="button">
                Registrarse
            </a>
            <br>
            <br>

            <a href="loginadmin.php" class="button2">
            Si eres administrador da click aqui
            </a>
        </form>
    </div>
</body>
</html>