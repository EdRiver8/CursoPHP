<?php
    /*para conectar a la db usamos una api llamada mysqli, le pasamos elservidor,
    el usuario, la clave y la db que se va a afectar; como no se tieneclave, se deja vacia*/
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    //luego de tener la conexcion, chequeamos que este funcionando
    /*
    if($connection){
        echo "Conexion funcionando!";
    }else die("Conexion con Db fallida!");//die no ejecuta mas codigo yda resultado error
    */
    //otra manera de probar la conexion y que arroje error por la api
    if (mysqli_connect_error()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        //Cierra la conexión 
        mysqli_close($link);
    }; 

    //Otra manera
    if(!$connection){
        die("Conexion Fallida con DB" . mysqli_error(mysqli_connect('localhost', 'root', '', 'loginapp')));
    } 
?>