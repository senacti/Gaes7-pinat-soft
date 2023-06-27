<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Iniciar sesion</title>
</head>
<body>
    <form action="#" method="post">
        <h1>Iniciar sesion</h1>
        <hr>
        <?php
        include("conexion.php");
        include("controlador.php");
        ?>
        <i class="fa-solid fa-user"></i>
        <label>Nombres del usuario</label>
        <input type="text" name="Nombresusuario" placeholder="Nombres del usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="password" name="contraseña" placeholder="Contraseña">
        <hr>
        <input type="submit" href="inicio2.php" name="login" value="Iniciar">
        <br>
        <div class="registrar">
            <p>si no tienes cuenta <a href="registro.php">Registrate aqui: </a></p>
        </div>
    </form>
    <div class="administrador">
        <p> si eres administrador pulsa <a href="ingresar.php">aqui: </a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>