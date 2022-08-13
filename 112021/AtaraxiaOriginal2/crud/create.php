<?php
include "../config/db.php";
$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$query = "INSERT INTO personas(cedula, nombres, apellidos) VALUES ($cedula,'$nombres','$apellidos')";
if ($res = $connection->query($query)) {
    echo 1;
} else {
    echo 0;
}
?>