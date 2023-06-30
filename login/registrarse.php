<?php

session_start();

include_once('../Config/Conexion.php');
if (isset($_POST['usuario']) && isset($_POST['nombrecompleto']) && isset($_POST['correo']) && isset($_POST['telefono']) && isset($_POST['contraseña']) && isset($_POST['rcontraseña'])){
    function validar($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $usuario = validar($_POST['usuario']);
    $nombrecompleto = validar($_POST['nombrecompleto']);
    $correo = validar($_POST['correo']);
    $telefono = validar($_POST['telefono']);
    $contraseña = validar($_POST['contraseña']);
    $rcontraseña = validar($_POST['rcontraseña']);

    $datosusuario = 'usuario' . $usuario . '&nombrecompleto' . $nombrecompleto;

    if(empty($usuario)){
        header("location: ../Registrarse.php?error=El usuario es requrido&$datosusuario");
        exit();
    } elseif(empty($nombrecompleto)){
        header("location: ../Registrarse.php?error=El nombre completo es requrido&$datosusuario");
        exit();
    } elseif(empty($correo)){
        header("location: ../Registrarse.php?error=El correo electronico es requrido&$datosusuario");
        exit();
    } elseif(empty($telefono)){
        header("location: ../Registrarse.php?error=El telefono es requrido&$datosusuario");
        exit();
    } elseif(empty($contraseña)){
        header("location: ../Registrarse.php?error=La contraseña es requerida es requrido&$datosusuario");
        exit();
    } elseif(empty($rcontraseña)){
        header("location: ../Registrarse.php?error=Repetir la contraseña es requrido&$datosusuario");
        exit();
    } elseif($contraseña !== $rcontraseña){
        header("location: ../Registrarse.php?error=La clave no coincide&$datosusuario");
        exit();
    } else {
        $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
        
        $sql = "SELECT * FROM clientes WHERE NombreUsuario = '$usuario'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0){
            header("location: ../Registrarse.php?error=El usuario ya existe!");
            exit();
        }else{
            $sql2 = "INSERT INTO clientes(NombreUsuario, NombreCompleto, Email, Telefono, Contraseña) VALUES('$usuario', '$nombrecompleto', '$correo', '$telefono', '$contraseña')";
            $query2 = $conexion->query($sql2);

            if ($query2){
                header("location: ../Registrarse.php?success=Usuario creado con exito!");
                exit();
            }else{
                header("location: ../Registrarse.php?success=Ocurrio un error!");
                exit();
            }
        }
    }
}else{
    header('location: ../Registrarse.php');
    exit();
}

?>