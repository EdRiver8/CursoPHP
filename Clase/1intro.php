<?php
    //Comentario en una sola linea, no necesita cerrar
    /* Esto
        es un
        comentario
        de multiples lineas
    */
    // Introduccion a PHP
    print("Este es el primer msj") . "<br>";//no es la mejor
    echo "Segundo msj por ECHO" . "<br>";//la mejor forma
    $mensaje = "Esto es otro mensaje";
    echo $mensaje;

    $mensajeHtml = "<h1>Hola de nuevo... 😅</h1>";
    echo $mensajeHtml;
?>