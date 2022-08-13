<?php

    session_start();

    include 'db.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'
    and contrasena = '$contrasena'");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo; 
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo '
            <script>
                alert("Este usuario no existe, por favor verifique los datos introducidos");
                windows.location = "../login_register.php";
            </script>
        ';
        exit;
    }

?>