<?php
include "../config/db.php";

$nombre_completo = $_POST['nombre_completo'];
$correo_electronico = $_POST['email'];
$motivo = $_POST['motivo'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO contactenos(motivo, descripcion) VALUES ('$motivo', '$mensaje')";
if ($res = $connection->query($query)) {
    echo 1;
} else {
    echo 0;
}
?>