<?php

    session_start();

    include_once('../Config/Conexion.php');
    if (isset($_POST['Usuario']) 
    && isset($_POST['NombreCompleto']) 
    && isset($_POST['CorreoElectronico']) 
    && isset($_POST['Telefono']) 
    && isset($_POST['Contraseña']) 
    && isset($_POST['RContraseña'])) {
        function validar($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }


        $usuario = validar($_POST['Usuario']);
        $nombrecompleto = validar($_POST['NombreCompleto']);
        $correoelectronico = validar($_POST['CorreoElectronico']);
        $telefono = validar($_POST['Telefono']);
        $contraseña = validar($_POST['Contraseña']);
        $Rcontraseña = validar($_POST['RContraseña']);

        $datosusuario = 'Usuario=' . $usuario . '&NombreCompleto=' . $nombreCompleto;

        if (empty($usuario)) {
            header("location: ../Registrarse.php?error=El usuario es requerido&$datosusuario");
            exit();
        }elseif(empty($nombrecompleto)){
            header("location: ../Registrarse.php?error=El nombre completo es requerido&$datosusuario");
            exit();
        }elseif(empty($correoelectronico)){
            header("location: ../Registrarse.php?error=El correo electronico es requerido&$datosusuario");
            exit();
        }elseif(empty($telefono)){
            header("location: ../Registrarse.php?error=El telefono es requerido&$datosusuario");
            exit();
        }elseif(empty($contraseña)){
            header("location: ../Registrarse.php?error=La contraseña es requerida&$datosusuario");
            exit();
        }elseif(empty($Rcontraseña)){
            header("location: ../Registrarse.php?error=Repetir la contraseña es requerido&$datosusuario");
            exit();
        }elseif($contraseña != $Rcontraseña){
            header("location: ../Registrarse.php?error=Las claves no coinciden&$datosusuario");
            exit();
        }else {

            $sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$usuario'";
            $query = $conexion->query($sql);

            if (mysqli_num_rows($query) > 0){
                header("location: ../Registrarse.php?error=El usuario ya existe");
                exit();
            }else{
                $sql2 = "INSERT INTO usuarios(NombreUsuario, NombreCompleto, Email, Telefono, Contraseña, Id_rol) VALUES('$usuario', '$nombrecompleto', '$correoelectronico', '$telefono', '$contraseña', '3')";
                $query2 = $conexion->query($sql2);

                if ($query2) {
                    header("location: ../Registrarse.php?success=Usuario creado con exito");
                    exit();
                }else {
                    header("location: ../Registrarse.php?success=Ocurrio un error");
                    exit();
                }

            }
        }
    }else {
        header('location: ../Registrarse.php');
        exit();
    }