<?php
    include("conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $consulta = "DELETE FROM cliente Where id_clientes = $id";

        $resultado = mysqli_query($conexion,$consulta);   

        if($resultado){
            echo '<script> alert("Eliminado Correctamente")
            window.location ="usuarios.php";
            </script>';
        }else{            
            echo '<script> alert("No se pudo eliminar")
            window.location ="usuarios.php";
            </script>';
        }
    }

?>