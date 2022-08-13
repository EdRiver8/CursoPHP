<?php
        /*post es una variable super global que tiene un arreglo asociativo, en este
        le mandamos la clave para que devuelva el valor
        */
        if(isset($_POST['submit'])){
            $usern = $_POST['username'];
            $passw = $_POST['pass'];
            $name = ['Ed', "Kt", 'Jo', 'Eu'];//array de logins
            $min = 6;
            $max = 10;
            if(strlen($usern) < $min ){
                echo "Username es demasiado corto, debe tener entre 6 y 10 caracteres" . "<br>";
            }
            if(strlen($usern) > $max ){
                echo "Username es demasiado largo, debe tener entre 6 y 10 caracteres" . "<br>";
            }
            if(!in_array($usern, $name)){//no esta en el array de logins
                echo "No tienes permitido ingresar!";
            }else echo "Bienvenido!";
        }
    ?>