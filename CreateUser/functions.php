<?php
//incluir la cadena de conexion que se encuentra en db.php en la variable $connection
include "db.php";
?>

<?php
/**
 * Crea un usuario dentro de la base de datos
 */
function creatUser()
{
    //global para que permita leer la variable connection que viene desde db.php
    global $connection;
    //echo "Yeap!";
    $usern = $_POST['username'];
    $passw = $_POST['password'];
    //echo $usern . '<br>';
    //echo $passw . '<br>';

    //para hacer mas seguro el formulario hacemos lo sgte, ya que en los campos pueden
    //insertar sentencias sql, lo que hace es limpiar comillas y parentesis
    $usern = mysqli_real_escape_string($connection, $usern);
    $passw = mysqli_real_escape_string($connection, $passw);

    //encriptar las contraseñas para evitar hackers
    $hashFormat = "$2y$10$";
    $salt = "encriptadoporedwin";
    $hashAndSalt = $hashFormat . $salt;
    $passw = crypt($passw, $hashAndSalt); //passw encriptado
    //echo $passw . "<br>";

    /*ya que existe la conexion podemos crear queries para manipular la db
        para ello creamos cadenas de texto con la estructura de las queries para la db. Una buena
        manera para saber si la cadena con la query va a funcionar, es probarla primero en la db
        y copiar el codigo generado en la db, aca en el php*/
    $query = 'INSERT INTO users(username, password) '; //1ra parte
    $query .= "VALUES ('$usern', '$passw')"; //concatenamos la segunda parte de la query

    //permite traer toda la informacion de la tabla users para poder ser manipulada
    $result = mysqli_query($connection, $query); //dos parametros, conexion y query, lo que envia a la db
    if (!$result) {
        die('La Query Fail!');
    } else echo "Usuario Creado!";
}

function readDataUser()
{
    global $connection;
    //permite traer toda la informacion de la tabla users para poder ser manipulada
    $query = 'SELECT * FROM users';
    $result = mysqli_query($connection, $query); //dos parametros, conexion y query
    if (!$result) {
        die('La Query Fail!');
    }
    return $result;
}

function showIdDataUser()
{
    //para poder manejar la variable connection que tiene la db.php dentro de la funcion
    global $connection;
    //permite traer toda la informacion de la tabla users para poder ser manipulada
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query); //dos parametros, conexion y query
    if (!$result) {
        die('La Query Fail!');
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateUser()
{
    global $connection;
    $usern = $_POST['username'];
    $passw = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$usern', ";
    $query .= "password = '$passw'";
    $query .= "WHERE id = $id"; //sin comillas porque es un entero

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Fallida! " . mysqli_error($connection));
    } else echo "Usuario Actualizado!";
}

function deleteUser()
{
    global $connection;
    $usern = $_POST['username'];
    $passw = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id"; //sin comillas porque es un entero

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Fallida! " . mysqli_error($connection));
    } else echo "Usuario Eliminado!";
}
?>
 
