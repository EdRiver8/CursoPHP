<?php

    include "../config/db.php";

    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $lugar = $_POST['lugar'];
    $hora = $_POST['hora'];

    $query = "UPDATE citas SET fecha='$fecha',lugar='$lugar',hora='$hora' WHERE id = '$id'";
    if($res = $connection -> query($query)){
        echo 1;
    }echo 0;

?>