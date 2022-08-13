<?php
    //Generar conexion con db
    $conn = mysqli_connect('localhost','root','','replit');//funcion, recibe 4 parametros para generar la conexion

    if(mysqli_connect_error()){
        printf("Conexion Fallida: %s\n", mysqli_connect_error());
        mysqli_close($link);
    }
