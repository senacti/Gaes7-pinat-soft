<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/styles8.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
            <img src="imagenes/1.jpg" alt="logo">
            <a class="navbar-brand" href="#">| BIENVENIDO ADMINISTRADOR |</a>
            <div class="buscar">
                <input type="text" placeholder="Buscar...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <a href="Login/CerrarSesion.php">Cerrar Sesion</a>
        </div>
    </header>
    <div class="container">
        <br>
        <center>
            <h1>Listado de productos</h1>
        </center>
        <br>
        <div class="container">
            <a href="/nuevoproducto.php" class="btn btn-dark">Agregar producto</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Referencia</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "Config/Conexion.php";

                        $Sql = "SELECT * FROM productos";
                        $resultado = $conexion->query($Sql);

                        while ($Fila = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row"><?php echo $Fila['producto_id']?></th>
                                <td><?php echo $Fila['producto_referencia']?></td>
                                <td><?php echo $Fila['producto_nombre']?></td>
                                <td><?php echo $Fila['producto_precio']?></td>
                                <td><?php echo $Fila['producto_stock']?></td>
                                <td><img style="width:100px" src="data:image/jpg;base64,<?php echo base64_encode($Fila['producto_imagen'])?>" alt=""></td>
                                <td>
                                    <a href="vista_editar.php?Id=<?php echo $Fila["producto_id"]?>" class="btn btn-warning">Editar</a>
                                    <a href="eliminarproducto.php?Id=<?php echo $Fila["producto_id"]?>" class="btn btn-danger">Eliminar</a>
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
			    <a class="bi bi-journal-check" href="roles.php"> Usuarios</a>
			    <a class="bi bi-grid" href="categorias.php"> Categorias</a>
			    <a class="bi bi-basket2-fill" href="Productos.php"> Productos</a>
		    </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>