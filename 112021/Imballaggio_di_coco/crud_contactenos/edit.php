<?php

    include "../config/db.php";

    $id = $_POST['id'];
    $nombre_completo = $_POST['nombre_completo'];
    $correo_electronico = $_POST['email'];
    $motivo = $_POST['motivo'];
    $mensaje = $_POST['mensaje'];

    $query = "UPDATE contactenos SET nombre = '$nombres', motivo = '$motivo', mensaje = '$mensaje' WHERE id = $id";
    if($res = $connection -> query($query)){
        echo 1;
    }echo 0;

?>