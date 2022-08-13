<?php
include "../config/db.php"; //llamamos la cadena de conexion

$data = array(); //arreglo para guardar todos los registros de la tabla personas de la db
$query = "SELECT * FROM personas";
$result = $connection->query($query); //guarda todos los registros donde concuerde la query
//mientras result tenga registros (filas), haga
while ($row = mysqli_fetch_object($result)) {
    /*
    echo $fila["cedula"];
    echo $fila["nombres"];
    echo $fila["apellidos"];
    */
    $data[] = $row; //cada registro(fila) de la db, lo guardo en el arreglo
}

echo json_encode($data);//se muestra la info obtenida en la consulta en objetos tipos json