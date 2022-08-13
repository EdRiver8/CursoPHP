<?php 
    include "db.php"; 
?>

<?php

    function crearUsuario(){
        global $conn;
        //echo "Se va a crear un usuario";
        $nombreUsuario = $_POST['nombre'];
        $correoUsuario = $_POST['correo'];
        $passwUsuario = $_POST['passw'];

        //cadena de query para insertar un usuario nuevo en la db
        $query = 'INSERT INTO usuarios(nombre, correo, clave)';
        $query .= "VALUES ('$nombreUsuario', '$correoUsuario', '$passwUsuario')";

        //verificamos que la query se pueda inyectar a la db, le pasamos cadena de conexion, y la query
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Conexion Fallida con Db, Query no Ejecutada!" . mysqli_error(mysqli_connect('localhost', 'root', '', 'replit')));
        }

    }   
    
    

?>