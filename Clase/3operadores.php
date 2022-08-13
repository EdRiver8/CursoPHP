<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body style="background: linear-gradient(to right,red,brown);">
    <h1 style="text-align: center; font-family: sans-serif; color: white;">11B Learning PHP</h1>

    <?php 
        /*los operadores son simbolos reservados, que se utilizan para
        realizar calculos:
        * + suma
        * - resta
        * * multi
        * / cociente - division
        * % residuo - mod
        * ** potenciacion
        Nota: las operaciones siguen la precedencia de las matematicas

        */
        //suma de dos numeros
        echo "El resultado de la suma es: " . 58 + 19 . "<br>";
        //resta de dos numeros
        echo "El resultado de la resta es: " .  58 - 19 . "<br>";
        //multip de dos numeros
        echo "El resultado de la multip es: " .  58 * 19 . "<br>";
        //div de dos numeros
        echo"El resultado de la division es: " .  58 / 19 . "<br>";
        //residuo de dos numeros
        echo "El residuo de la division es: " .  58 % 19 . "<br>";
        //potencia de dos numeros
        echo "El resultado de la potencia es: " .  5 ** 19 . "<br>";

        $number1 = 58;
        $number2 = 19;
        $resultado = $number1 + $number2;
        echo "El resultado es: " . $resultado;
    
    ?>


</body>
</html>