<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="CSS/Styles3.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
            <img src="/imagenes/1.jpg" alt="logo">
            <a class="navbar-brand" href="#">| BIENVENIDO ADMINISTRADOR |</a>
            <div class="buscar">
                <input type="text" placeholder="Buscar...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <a class="cerrarsesion" href="Login/CerrarSesion.php">Cerrar sesión</a>
        </div>
    </header>
    <div class="container">
        <br>
        <center><h1>Listado de usuarios</h1></center>
        <br>
        <div class="container">
            <a href="/Nuevousuario.php" class="btn btn-dark"><i class="bi bi-plus-circle-fill"></i> Agregar telefono</a>
            <hr>
            <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col">Nombre completo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        include "Config/Conexion.php";

                        $Sql = "SELECT * FROM usuarios";
                        $resultado = $conexion->query($Sql);

                        while ($Fila = $resultado->fetch_assoc()) { ?>
                        
                            <tr>
                                <th scope="row"><?php echo $Fila['Id']?></th>
                                <td><?php echo $Fila['NombreUsuario']?></td>
                                <td><?php echo $Fila['NombreCompleto']?></td>
                                <td><?php echo $Fila['Email']?></td>
                                <td><?php echo $Fila['Telefono']?></td>
                                <td><?php echo $Fila['Contraseña']?></td>
                                <td><?php echo $Fila['Id_rol']?></td>
                                <td>
                                    <a href="Vistaeditar.php?Id=<?php echo $Fila['Id']?>" class="btn btn-warning" title="Editar"><i class="bi bi-pencil-square"></i></a>
                                    <a href="Eliminarusuario.php?Id=<?php echo $Fila['Id']?>" class="btn btn-danger" title="Eliminar"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a class="bi bi-speedometer2" href="dashboard.php"> Dashboard</a>
                <a class="bi bi-grid" href="categorias.php"> Categorias</a>
                <a class="bi bi-basket2-fill" href="Productos.php"> Productos</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>