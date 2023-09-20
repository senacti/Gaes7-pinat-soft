<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Styles2.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="contenedor">
        <h1><ins>Iniciar sesión</ins></h1>
        <br>
        <form action="Validar.php" method="POST">
            <label for="">
                <img width="25px" src="ICONS/User.svg" alt="">
                Usuario
            </label>
            <input type="text" placeholder="Ingrese usuario" name="NombreUsuario">
            <label for="">
                <img width="25px" src="ICONS/Key.svg" alt="">
                Contraseña
            </label>
            <input type="password" placeholder="Ingrese contraseña" name="Contraseña">
            <button class="button">
                Ingrese
            </button>
            <a href="Registrarse.php" class="button">
                Registrarse
            </a>
        </form>
    </div>
</body>
</html>