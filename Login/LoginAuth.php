<?php

    session_start();

    include_once('../Config/Conexion.php');
    if(isset($_POST['usuario']) && isset($_POST['contraseña'])){

        function validar($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $usuario = validar($_POST['usuario']);
        $contraseña = validar($_POST['contraseña']);

        if (empty($usuario)){
            header('location: ../Login.php?error=El usuario es requerido');
            exit();
        } elseif(empty($contraseña)){
            header('location: ../Login.php?error=La contraseña es requerida');
            exit();
        } else{
            $Sql = "SELECT * FROM clientes WHERE NombreUsuario = '$usuario'";
            $query = mysqli_query($conexion, $Sql);

            if ($query->num_rows==1){
                $usuarioQ = $query->fetch_assoc();

                $Id = $usuarioQ['Id'];
                $NombreUsuario = $usuarioQ['NombreUsuario'];
                $NombreCompleto = $usuarioQ['NombreCompleto'];
                $Email = $usuarioQ['Email'];
                $Telefono = $usuarioQ['Telefono'];
                $Contraseña = $usuarioQ['Contraseña'];

                if ($usuario === $NombreUsuario){
                    if(password_verify($contraseña, $Contraseña)){
                        $_SESSION['Id'] = $Id;
                        $_SESSION['NombreUsuario'] = $NombreUsuario;
                        $_SESSION['NombreCompleto'] = $NombreCompleto;
                        $_SESSION['Email'] = $Email;
                        $_SESSION['Telefono'] = $Telefono;

                        echo "<script>
                            alert('Bienvenido $NombreCompleto');
                            location.href = '../Home.php';
                        </script>";
                    } else{
                        header('location: ../Login.php?error=Usuario o clave incorrecta');
                    }
                } else {
                    header('location: ../Login.php?error=Usuario o clave incorrecta');
                }
            }else {
                header('location: ../Login.php?error=Usuario o clave incorrecta');
            }
        }
    }