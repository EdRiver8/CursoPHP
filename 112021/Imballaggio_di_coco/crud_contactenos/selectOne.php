<?php
    include "../config/db.php";
    $nombre_completo = $_POST['nombre_completo'];
    $data = [];
    $query = "SELECT id, nombre, precio, stock FROM contactenos WHERE nombre = $nombre";
    //otra manera selecciona todo los atributos
    //$query = "SELECT * FROM personas WHERE cedula = $cedula";

    //ejecuta la query
    $res = $connection -> query($query);
    while($row = mysqli_fetch_object($res)){
        $data[] = $row;
    }

    echo json_encode($data);
?>