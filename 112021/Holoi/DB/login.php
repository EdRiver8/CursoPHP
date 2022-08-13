<?php
    $conexion = mysqli_connect('localhost','root','','kino');

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $consulta = "SELECT * FROM cliente WHERE email = '$correo' AND contraseña = '$contraseña'";

    $res = mysqli_query($conexion,$consulta);

    if($res >0){
        header("location: ../carrito.html");
    }else{
        echo "fallos";
    }
    
    mysqli_close($conexion);

?>