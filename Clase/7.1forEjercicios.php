<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Ciclo For</title>
</head>
<body>
    <h1>Ejercicios Ciclo For en PHP</h1>
    <?php
        // crear un programa que muestre los numeros del 30 al cero
        echo "* Programa que cuenta del 30 al 0";
        echo "<br>";
        for($i = 30; $i >= 0; $i--){
            echo $i . "\t";
        }

        //programa que cuente y muestre los numeros impares de 0 - 100
        echo "<br><br><br>";
        echo "* Programa que cuente y muestre los numeros impares de 0 - 100" . "<br>";
        $contador = 0;
        for($i = 1; $i <= 100; $i = $i + 2){
            echo $i . " ";
            $contador = $contador + 1;
        }
        echo "<br>";
        echo "La cantidad de numeros impares es: " . $contador;
        echo "<br><br><br>";
        
        echo "* Realizar un programa que reciba un numero por parte del usuario" . "; si el numero es par, que muestra la suma desde 0 hasta ese numero;" . " si el numero es impar, que muestre el factorial del numero.";
        //Realizar un programa que reciba un numero por parte del usuario
        //si el numero es par, que muestra la suma desde 0 hasta ese numero
        //si el numero es impar, que muestre el factorial del numero
        /*factorial de 5
        5*4*3*2*1

        factorial de 10
        10*9*8*7*6*5*4*3*2*1
        */
    ?>
    <br><br>
    <form action="7.1forEjercicios.php" method="post">
        <label for="">Numero</label>
        <input type="number" placeholder="Ingrese Numero" name="numero">
        <input type="submit">
    </form>
    <?php 
        if(isset($_POST['numero'])){
            $numero = $_POST['numero'];
            $suma = 0;
            if($numero % 2 == 0){
                for($i = 0; $i <= $numero; $i++){
                    $suma = $suma + $i;
                }
                echo "La suma de 0 hasta " . $numero . " es:" . $suma;
            }else{
                $factorial = $numero; 
                for($i = $numero-1; $i >= 1; $i--){
                    $factorial = $factorial * $i;
                    //echo $factorial . " ";
                }
                echo "El factorial de " . $numero . " es: " . $factorial;
            }
        }
    ?>
    <br><br>
    <table border = "1px">
        <thead>
            <th>Periodo</th>
            <th>Cuota</th>
            <th>Interes</th>
            <th>Abono K</th>
            <th>Saldo</th>
        </thead>
    </table>
    <?php
        $i = 1;
        while($i < 6){
            ?>
                <tr>
                    <td><?php echo $i*1 ?></td>
                    <td><?php echo $i*2 ?></td>
                    <td><?php echo $i*3 ?></td>
                    <td><?php echo $i*4 ?></td>
                    <td><?php echo $i*5 ?></td>
                </tr>

            <?php $i++;
        }
    ?>    
    
</body>
</html>