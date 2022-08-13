<?php
    $conexion = mysqli_connect('localhost','root','','kino');
    // if (mysqli_connect_error()){
    //         printf("Conexion Fallida: %s\n", mysqli_connect_error());
    //         mysqli_close($link);
    // }
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['correo']; 
    $numero = $_POST['numero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $consulta = "INSERT INTO `cliente`( `ID_rol`, `nombre`, `apellido`, `email`, `number`, `birth_date`, `contraseña`) VALUES ('2', '$nombre','$apellido','$email','$numero','$fecha_nacimiento','$contraseña')";

    $res = mysqli_query($conexion,$consulta);

    if($res > 0){
        header("location: ../carrito.html");   
    }else{
        echo "fallo";
    }
    mysqli_close($conexion);

?>