<?php
//edit = update
include "../config/db.php"; //llamamos la cadena de conexion

$id = $_POST['id'];
$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$query = "UPDATE personas SET cedula = $cedula, nombres = '$nombres', apellidos = '$apellidos' WHERE id = $id";
if ($result = $connection->query($query)) {
    echo 1; //1 para guardo la informacion
} else echo 0;//0 para no guardo la informacion
