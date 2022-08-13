<?php
$user = $_POST['user']; //viene del name del input del formulario
$passw = $_POST['passw'];
//comprobar campos vacios y envia una respuesta positiva o negativa a fetch
if ($user === '' || $passw === '') {
    //el echo no esta en formato json, por eso usamos 'encode' y procesarlo con fetch api
    echo json_encode('error');
} else {
    echo json_encode('Datos Procesados... <br> Usuario: ' . $user . '<br>Password: ' . $passw);
}
