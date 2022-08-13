<?php
//edit = update
include "../config/db.php"; //llamamos la cadena de conexion

$id = $_POST['id'];

$query = "DELETE FROM personas WHERE id = $id";
if ($result = $connection->query($query)) {
    echo 1; //1 para guardo la informacion
} else echo 0;//0 para no guardo la informacion
