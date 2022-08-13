<?php
    include "../config/db.php";
    $cedula = $_POST['cedula'];
    $data = [];
    $query = "SELECT id, cedula, nombres, apellidos FROM personas WHERE cedula = $cedula";
    //otra manera selecciona todo los atributos
    //$query = "SELECT * FROM personas WHERE cedula = $cedula";

    //ejecuta la query
    $res = $connection -> query($query);
    while($row = mysqli_fetch_object($res)){
        $data[] = $row;
    }

    echo json_encode($data);

?>