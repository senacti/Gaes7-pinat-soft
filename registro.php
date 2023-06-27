<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <title>Registro</title>
</head>
<body>
    <form action="login/registrarse.php" method="post">
        <h1>Registrarse</h1>
        <hr>
        <i class="fa-solid fa-address-card"></i>
        <label>Numero de identificacion</label>
        <input type="number" name="Numero" placeholder="Numero de identificacion">

        <i class="fa-solid fa-circle-user"></i>
        <label>Nombres</label>
        <input type="text" name="nombres" placeholder="Nombres">

        <i class="fa-solid fa-circle-user"></i>
        <label>Apellidos</label>
        <input type="text" name="apellidos" placeholder="Apellidos">

        <i class="fa-solid fa-at"></i>
        <label>Correo electronico</label>
        <input type="email" name="email" placeholder="Correo electronico">

        <i class="fa-solid fa-phone"></i>
        <label>Telefono</label>
        <input type="number" name="telefono" placeholder="Telefono">

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="password" name="contraseña" placeholder="Contraseña">
        <hr>
        <button type="submit" name="registro">Registro</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>