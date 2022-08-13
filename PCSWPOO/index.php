<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>


    <!-- <h1>Probando la conexion a la DB</h1> -->
    <h1>Modelo Vista Controlador</h1>
    <br>

    <?php

    require_once("Controller/UserController.php");



    /*
    include "Model/ConnectionDB.php";

    $conn = new ConnectionDB();

    if ($conn->connection()) {
        echo '<br>' . 'Conexion exitosa 😁';
    } else {
        echo '<br>' . 'Conexion Fallida 😥';
    }

    /*
    $connect = $conn->connection();
    $msg = $connect ? 'Conexion exitosa 😁' : 'Conexion Fallida 😥';
    echo '<h3>' . $msg . '</h3>';
    */
    ?>

</body>

</html>