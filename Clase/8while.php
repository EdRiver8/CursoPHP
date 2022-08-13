<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo While</title>
</head>
<body>
    <h4>Este programa realiza la suma desde cero hasta el numero que escojas</h4>
    <form action="8while.php" method="post">
        <label>Numero</label>
        <input type="number" placeholder="ingrese el numero" name="numero">
        <input type="submit">    
    </form>

    <?php 
        /* Uso del ciclo - loop while en php:
           while(condicion - comparacion){
               lineas de codigo
               un iterador o contador
           }
           Repetir las lineas de codigo hasta que la condicion
           deje de cumplirse             
        */
        //programa que muestre los numeros del 1 - 5
        /*$iterador = 1;
        while($iterador < 6){
            echo $iterador . " ";
            $iterador = $iterador + 1;
        }*/
        //Programa que haga la sumatoria entre los numeros 7 y 13
        // 7 + 8 + 9 + 10 + 11 + 12 + 13
        
        //echo "<br>";
        //se comprueba si la variable o variables estan definidas "isset"
        if(isset($_POST['numero'])){//controla que los inputs no esten vacios
            $numero = $_POST['numero'];
            $iterador = 0;
            $suma = 0;
            while($iterador <= $numero){//mientras el iterador sea <= numero haga:
                $suma = $suma + $iterador;//70
                $iterador = $iterador + 1;//14
            }
            echo "La sumatoria es: " . $suma;
        }else{
            echo "Ingrese un valor";
        }
        //Realizar un programa que reciba un numero por parte del usuario
        //si el numero es par, que muestra la suma desde 0 hasta ese numero
        //si el numero es impar, que muestre el factorial del numero
        /*factorial de 5
        5*4*3*2*1

        factorial de 10
        10*9*8*7*6*5*4*3*2*1*/


        /*Realizar un programa que aplique el MRUA, de tal manera que le muestre al usuario, las siguientes opciones, este elija si desea calcular:
            * Velocidad
            * Tiempo
            * Distancia
            * Acelaracion
        tener en cuenta:
        *Se debe mostrar las opciones a calcular con una lista desplegable
        *Ninguno de los valores ingresados pueden ser negativos
        *Si se ingresa un valor de forma incorrecta debe informar del error y pedir que lo ingrese nuevamente (excepcion, si puede ser negativa).

        Ejemplo: el usuario define que quiere calcular la distancia, para esto se le debe pedir que ingrese la velocidad inical, el tiempo y la aceleracion.
        */
        
    ?>
</body>
</html>