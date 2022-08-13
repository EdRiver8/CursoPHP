<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo For</title>
</head>
<body>
    <h1>Uso del Ciclo For en PHP</h1>
    <?php 
        /* for, es la forma en que se construyen y manejan los 
        bucles-loop-ciclos; es una estructura que representa una secuencia
        de control repetitiva.
        su estructura es la siguiente:

        for(iniciacion variable; lim variable; incrementador-decrementa){
            instrucciones y lineas de codigo a ejecutar en el for
        }
        es de suma importancia manejar los operadores-iteradores:
        *i++ incremento de a 1
        *i-- decremento de a 1
        casos especiales
        *--i
        *++i
        */
        //programa que muestre los numeros 0-9
        //forma secuencial, no optima:
        /*
        echo 0 . "<br>";
        echo 1 . "<br>";
        echo 2 . "<br>";
        echo 3 . "<br>";
        echo 4 . "<br>";
        echo 5 . "<br>";
        echo 6 . "<br>";
        echo 7 . "<br>";
        echo 8 . "<br>";
        echo 9 . "<br>";

        echo "<br>";*/
        //i = iterador, variable que cuenta y controla los ciclos
        //1ra linea del for: desde donde inicia se ejecuta una sola vez
        //2da linea del for: hasta donde llega (es una comparacion)
        //3ra linea del for: como cambia i++ => i = i + 1; i-- => i = i-1
        echo "Programa que muestra los numeros entre 0 - 10" . "<br>";
        for($i = 0; $i <= 10; $i++){//se repite tantas veces como diga la 2da linea
            echo $i . "\n";
            //en este punto ejecuta la 3ra linea del for: iterador
        }
        echo "<br>"; 
        echo "programa que muestre los numeros pares que existen entre 50-100" . "<br>";
        for($i = 50; $i <= 100; $i = $i + 2){
            echo $i . "\n";
        }
        echo "programa que muestre los numeros impares entre -25 y 25" . "<br>";
        for($i = -25; $i <= 25; $i = $i + 2){
            echo $i . "\n";
        }
        echo "programa que muestre la tabla del 7, llegando hasta 7 * 10" . "<br>";
        for($i = 1; $i <= 10; $i++){
            echo 7*$i . "\n";
        }
    ?>
</body>
</html>