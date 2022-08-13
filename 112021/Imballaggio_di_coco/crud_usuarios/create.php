 <?php
include "../config/db.php";
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$password = $_POST['password'];

$query = "INSERT INTO usuarios(nombre_completo, correo, fecha_nacimiento, password) VALUES ($nombre_completo,'$correo',$fecha_nacimiento', $password)";
if ($res = $connection->query($query)) {
    echo 1;
} else {
    echo 0;
}
?>