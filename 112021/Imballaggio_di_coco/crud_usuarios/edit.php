<?php

    include "../config/db.php";
    $id = $_POST['id'];
    $nombre_completo  = $_POST['nombre_completo'];
    $correo = $_POST['correo_electronico'];
    $fecha_nacimiento =$_POST['fecha_nacimiento'];
    $password = $_POST['password'];

    $query = "UPDATE `usuarios` SET `nombre_completo`='$nombre_completo',`correo_electronico`='$correo',`fecha_nacimiento`='$fecha_nacimiento',`password`='$password' WHERE id = $id";
    if($res = $connection -> query($query)){
        echo 1;
    }echo 0;

?>


