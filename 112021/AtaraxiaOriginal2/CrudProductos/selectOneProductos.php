<?php
    include "../config/db.php";
    $id = $_POST['id'];
    //$cedula = $_POST['cedula'];
    $data = [];
    $query = "SELECT id, fecha, lugar, hora FROM citas WHERE id = $id";
    //otra manera selecciona todo los atributos
    //$query = "SELECT * FROM personas WHERE cedula = $cedula";

    //ejecuta la query
    $res = $connection -> query($query);
    while($row = mysqli_fetch_object($res)){
        $data[] = $row;
    }

    echo json_encode($data);

?>