<?php

    include "conexion.php";

    $nombre = $_POST['nombre_completo-form'];
    $correo = $_POST['correo_electronico-form'];
    $motivo = $_POST['inquietud-form'];
    $mensaje = $_POST['mensaje-form'];

    $query = "INSERT INTO contactenos(nombre_completo, correo_electronico, motivo, mensaje) VALUES ('$nombre', '$correo', '$motivo', '$mensaje')";

    $final = mysqli_query($conexion, $query);

    if($final){
        echo '
            <script>
                alert("Gracias por darnos tu opinion, la tendremos en cuenta");
                window.location = "../index.php";
            </script>
        ';
    } else{
        echo '
        <script>
            alert("Verifica de nuevo que los datos esten correctos");
            window.location = "../index.php";
        </script>
    ';
    }

    mysqli_close($conexion);
?>