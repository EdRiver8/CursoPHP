<?php
include "../config/db.php";
$fecha = $_POST['fecha'];
$lugar = $_POST['lugar'];
$hora = $_POST['hora'];

echo $fecha;
echo $lugar;
echo $hora;
$query = "INSERT INTO citas(fecha, lugar, hora) VALUES ('$fecha','$lugar','$hora')";
if ($res = $connection->query($query)) {
    echo 1;
} else {
    echo 0;
}
?>