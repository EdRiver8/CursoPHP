<?php 
    include("conexion.php");
    $rol = $_POST['rol'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $celular = $_POST['telefono'];
    $birth_date = $_POST['birth_date'];
    $contraseña = $_POST['contraseña'];
    $fecha_compra = $_POST['fecha_compra'];
    $medio_pago = $_POST['medio_pago'];

    $consulta = "INSERT INTO `usuario`( `ID_rol`, `nombre`, `apellidos`, `email`,`telefono`, `birth_date`, `contraseña`, `fecha_compra`,`medio_pago`) VALUES ('$rol','$nombre','$apellido','$cedula','$celular','$dirrecion','$email','$pasword')";

    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo = '$email'");
    $ejecutar = mysqli_query($conexion,$consulta);
    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '<script> alert("Este correo ya esta registrado")
            window.location ="../registro.html";
        </script>';
        exit();
    }

    if($ejecutar > 0 ){
        echo '<script> alert("Te registraste correctamente")
            window.location ="usuarios.php";
        </script>';
    }else{
        echo '<script> alert("Ocurrio un fallo")
            window.location ="registro.html";
        </script>';
    }

    // mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
    
?>