<?php
    $file = "example.txt";

    /*
    //w = write document
    if($handle = fopen($file, 'w')){
        fwrite($handle, "Escribiendo en el archivo!");
    }else {
        echo "No se pudo abrir el archivo";
    }    
    
    */


    /*
    //r = read documento    
    if($handle = fopen($file, 'r')){
        //echo $content = fread($handle, 15);//cada bite es un caracter del documen
        //leer todo el documento
        echo $content = fread($handle, filesize($file));
    }else {
        echo "No se pudo abrir el archivo";
    }    
    */
    fclose($handle);//cerramos la conexion con el archivo
    //eliminar un archivo
    unlink("delete_example.txt");//no funciona


    fclose($handle);//cerramos la conexion con el archivo
?>