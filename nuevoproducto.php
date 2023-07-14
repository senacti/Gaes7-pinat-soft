<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/styles8.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <title>Nuevo producto</title>
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
    ?>
    <div class="container">
        <br>
        <h1>Nuevo producto</h1>
        <br>
        <form action="agregarproducto.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Referencia del producto</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="referencia">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Precio del producto</label>
                <input type="number" class="form-control" name="precio">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock del producto</label>
                <input type="number" class="form-control" name="stock">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Imagen del producto</label>
                <input type="File" class="form-control" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="productos.php" class="btn btn-info">Regresar</a>
        </form>
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