<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles8.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <title>Editar producto</title>
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
    <?php
        include "Config/Conexion.php";

        $Id = $_REQUEST['Id'];
        
        $Sql = "SELECT * FROM productos WHERE producto_id = $Id";
        $resultado = $conexion->query($Sql);

        $Fila = $resultado->fetch_assoc();
        ?>
    <div class="container">
        <br>
        <center>
            <h1>Modificar producto</h1>
        </center>
        <form action="editarproducto.php?Ideditar=<?php echo $Fila["producto_id"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Referencia del producto</label>
                <input type="number" class="form-control" name="referenciaproducto" value="<?php echo $Fila['producto_referencia']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" name="nombreproducto" value="<?php echo $Fila['producto_nombre']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Precio del producto</label>
                <input type="number" class="form-control" name="precioproducto" value="<?php echo $Fila['producto_precio']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock del producto</label>
                <input type="number" class="form-control" name="stockproducto" value="<?php echo $Fila['producto_stock']?>">
            </div>
            
            <td><img style="width:100px" src="data:image/jpg;base64,<?php echo base64_encode($Fila['producto_imagen'])?>" alt=""></td>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Imagen del producto</label>
                <input type="File" class="form-control" name="imagenproducto">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="Productos.php" class="btn btn-info">Regresar</a>
        </form>
    </div>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a class="bi bi-speedometer2" href="dashboard.php"> Dashboard</a>
			    <a class="bi bi-journal-check" href="roles.php"> Usuarios</a>
			    <a class="bi bi-grid" href="categorias.php"> Categorias</a>
			    <a class="bi bi-basket2-fill" href="productos.php"> Productos</a>
		    </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>