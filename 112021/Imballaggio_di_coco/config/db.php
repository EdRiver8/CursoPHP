<?php

//CADENA DE CONEXION CON DB COMO CONSTANTE
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSW', '');
define('DB_NAME', 'imballagiodicoco');

$connection = new mysqli(DB_HOST, DB_USER, DB_PASSW, DB_NAME);

    //uso del operador ternario '?'
    //$resultado = $connection ? 'Conexion Exitosa!😁' : 'Conexion Fallida!😥';
    //echo $resultado;
