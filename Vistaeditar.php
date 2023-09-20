<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Editar usuario</title>
</head>
<body>
    <?php
        include "Config/Conexion.php";
        $Id = $_REQUEST['Id'];
        
        $Sql = "SELECT * FROM usuarios WHERE Id = $Id";
        $resultado = $conexion->query($Sql);

        $Fila = $resultado->fetch_assoc();
    ?>
    <div class="container">
        <br>
        <center><h1>Modificar usuario</h1></center>
        <form action="Editarusuario.php?Ideditar=<?php echo $Fila["Id"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" name="usuarionombre" value="<?php echo $Fila['NombreUsuario']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" name="completonombre" value="<?php echo $Fila['NombreCompleto']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" name="usuarioemail" value="<?php echo $Fila['Email']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telefono</label>
            <input type="number" class="form-control" name="usuariotelefono" value="<?php echo $Fila['Telefono']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="usuarioContraseña" value="<?php echo $Fila['Contraseña']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Rol</label>
            <input type="number" class="form-control" name="usuariorol" placeholder="Escribe el rol, 1=Administrador, 2=Vendedor, 3=Cliente" value="<?php echo $Fila['Id_rol']?>">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="Dashboard.php" class="btn btn-info">Regresar</a>
        </form>
    </div>
</body>
</html>