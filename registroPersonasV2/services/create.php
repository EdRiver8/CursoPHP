<?php
include "../config/db.php"; //llamamos la cadena de conexion

$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$query = "INSERT INTO personas (cedula, nombres, apellidos) VALUES ($cedula, '$nombres', '$apellidos')";
//del objeto mysqli, se usa el metodo query para verificar que si se pueda ejecutar la query
if ($result = $connection->query($query)) {
    echo 1; //1 para guardo la informacion
} else {
    echo 0;//0 para no guardo la informacion
}

