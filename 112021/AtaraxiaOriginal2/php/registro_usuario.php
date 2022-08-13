<?php

    include 'conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    //encriptar contraseña
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena)
              VALUES('$nombre_completo','$correo', '$usuario','$contrasena')";

    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferemte");
                window.location = "../php/bienvenida.php";
            </script>       
        ';
        exit();
    }
    //verificar que el usuario no se repita
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferemte");
                window.location = "../login_register.php";
            </script>       
        ';
        exit();
    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../login_register.php"         
            </script>
        ';
    }else{
        echo '
            <script>
                alert("intentalo de nuevo, Usuario no almacenado");
                window.location = "../login_register.php"         
            </script>
        ';
    }

    mysqli_close($conexion); 
?>