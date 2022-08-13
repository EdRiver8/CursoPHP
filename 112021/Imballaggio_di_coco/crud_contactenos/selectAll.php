<?php
include "../config/db.php";
$data = [];
$query = "SELECT * FROM contactenos";
//otra manera selecciona todo los atributos

//ejecuta la query
$res = $connection->query($query);
while ($row = mysqli_fetch_object($res)) {
    $data[] = $row;
}

echo json_encode($data);
?>