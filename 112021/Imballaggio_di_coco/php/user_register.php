<?php

    /*Incluir un archivo */
    include "conexion.php";

    /*Creacion de variables*/
    $nombre_completo = $_POST['nombre_completo'];/*Entre corchetes y comillas van los name de los input*/
    $correo_electronico = $_POST['correo_electronico'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $password = $_POST['password'];

    /*Inicia la ubicacion de los valores*/
    $query = "INSERT INTO usuarios(id, nombre_completo, correo_electronico, fecha_nacimiento, password) VALUES('', '$nombre_completo', '$correo_electronico', '$fecha_nacimiento',  '$password')";


    //Revisar si el correo ya esta registrado
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico = '$correo_electronico' ");
    /*Boolean son los que tienen valor true o false, y se manejan con 0=true y 1=false*/
    if(mysqli_num_rows($verificar_correo) > 0){
        echo /*Este es un mensaje en recuadro de advertencia*/'
            <script>
                alert("Este correo ya esta registrado, intenta con otro nuevamente");
                window.location = "../session.php";
            </script>
        ';
        exit();
    }

    //Finalizacion de la creacion del usuario o error de repeticion
    $ejecutar = mysqli_query($conexion, $query);

    /*Si esta entre parentesis es un parametro osea algo que se debe cumplir*/
    if($ejecutar){
        echo '
            <script>
                alert("El usuario ha sido registrado exitosamente");
                window.location = "../session.php";
            </script>
        ';
    } else{
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "../session.php";
        </script>
    ';
    }

    mysqli_close($conexion);
?>