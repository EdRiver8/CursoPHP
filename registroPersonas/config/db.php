<?php
//cadena de conexion definida como constante
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSW', '');
define('DB_NAME', 'registropersonas');

$connection = new mysqli(DB_HOST, DB_USER, DB_PASSW, DB_NAME);
//$connection = new mysqli('localhost','root','','registropersonas');
/*
if (!$connection) {
    die("Error en la conexion con DB");
} else echo "Conectado a la DB";
*/
