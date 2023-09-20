<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Nuevo usuario</title>
</head>
<body>
    <?php
        include "Config/Conexion.php";
    ?>
    <div class="container">
        <br>
        <h1>Nuevo usuario</h1>
        <br>
        <form action="Agregarusuario.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre usuario</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nombreusuario">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" name="nombrecompleto">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telefono</label>
                <input type="number" class="form-control" name="telefono">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contraseña">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Rol</label>
                <input type="number" class="form-control" name="rol" placeholder="Escribe el rol, 1=Administrador, 2=Vendedor, 3=Cliente">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="/Dashboard.php" class="btn btn-info">Regresar</a>
        </form>
    </div>
</body>
</html>