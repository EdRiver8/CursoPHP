<?php

    //Iniciar una nueva sesion o cargar la pagina de 0
    session_start();

    include 'conexion.php';

    $correo_electronico = $_POST['correo_electronico'];
    $password = $_POST['password'];
    
    
    /*Se crea una variable, donde le damos inicio al query, donde en la conexion nos seleccionara todo de usuarios
    Donde el correo electronico ingresado en el register, coincida con el recibido en el input y lo mismo con la contraseña*/
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico = '$correo_electronico' and password = '$password'");

    /*Los if solo serviran si se cumple o no, si el if se cumple el exit se inicia y termina el condicional
    Sino procedera al else*/
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo_electronico;
        header("location: ../index.php");
        exit();
    }else{
        echo '
            <script>
                alert("El usuario es inexistente, por favor verifique los datos o cree una cuenta");
                window.location = "../session.php";
            </script>
        ';
        exit();
    }
?>