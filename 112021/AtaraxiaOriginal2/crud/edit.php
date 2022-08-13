<?php

    include "../config/db.php";

    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];

    $query = "UPDATE personas SET cedula=$cedula,nombres='$nombres',apellidos='$apellidos' WHERE id = $id";
    if($res = $connection -> query($query)){
        echo 1;
    }echo 0;

?>