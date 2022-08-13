<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Switch</title>
</head>
<body>
    <h2><span>A</span>v<span>anzar</span></h2>
    <?php 
        /* son estructuras que se usan para comparar
        diferentes expresiones con el fin de evaluar
        si algo es verdadero o falso; se asemejan
        a varios if-else, dependiendo del problema
        se usa el switch o el if
        * == igual 
        * === completamente identico
        * comparadores <, >, <=, >=
        * != diferente o no igual
        * !== no es completamente identico

        Operadores logicos
        * && and
        * || or
        * ! not

        switch(x) {
            case 'valor1':  // if (x === 'valor1')
            ...
            [break]

            case 'valor2':  // if (x === 'valor2')
            ...
            [break]

            default:
            ...
            [break]
        }
        El valor de x es comparado contra el valor del primer case (en este caso, valor1), luego contra el segundo (valor2) y así sucesivamente, todo esto bajo una igualdad estricta.
        Si la igualdad es encontrada, switch empieza a ejecutar el código iniciando por el primer case correspondiente, hasta el break más cercano (o hasta el final del switch).
        Si no se cumple ningún caso entonces el código default es ejecutado (si existe).  
        normalmente se usa para casos exactos
       */
        /*programa que muestre si una persona es de
        sexo femenino o masculino, dada una variable
        que puede guardar "f" o "m"
        */
        //primera forma, usando if
        $msj;
        $msj2;
        $sexo = "f";
        if($sexo == "f"){
            $msj = "Femenina" . "<br>";
        }else if($sexo == "m"){
            $msj = "Masculino" . "<br>";
        }else{$msj = "Respuesta desde el si: Sexo no es identificado" . "<br>";}

        //segunda forma, usando switch
        switch($sexo){
            case 'f': 
                $msj2 = "Femenina" . "<br>";
                break;
            case 'm': 
                $msj2 = "Masculino" . "<br>";
                break;
            default: $msj2 = "Sexo no es identificado" . "<br>";
        }      
        echo "Mensaje desde PHP sin HTML, usando IF: $msj";  
        echo "<p>Mostrando desde el PHP usando HTML:</p>" . "<h3>Usando SWITCH: $msj2</h3>";

        /* hacer un programa que permita seleccionar (calculadora)
            1- sumar
            2- restar
            3- multip
            4- dividir
            5- potenciar
            6- radicar
        y muestre el resultado de una de esas operaciones entre dos numeros
        */
        $num1 = 4;
        $num2 = 2;
        $resultado;//declarada pero no iniciada
        $opcion = 6;//opcion del men
        $msj3 = "El resultado es: "; //es para imprimir
        switch($opcion){
            case 1:
                $resultado = $num1 + $num2;
                echo $msj3 . $resultado;
                break;
            case 2:
                $resultado = $num1 - $num2;
                echo $msj3 . $resultado;
                break;
            case 3:
                $resultado = $num1 * $num2;
                echo $msj3 . $resultado;
                break;
            case 4:
                $resultado = $num1 / $num2;
                echo $msj3 . $resultado;
                break;
            case 5:
                $resultado = $num1 ** $num2;
                echo $msj3 . $resultado;
                break;
            case 6:
                $resultado = $num1 ** (1/$num2);
                echo $msj3 . $resultado;
                break;
            default: echo "Opcion no valida";
        }
        /*realizar un programa que muestre segun una variable definida por el programador, el dia de la semana seleccionado dado esta variable*/ 
    ?>

    <br><br>
    <p>Imprimiendo desde HTML</p>    
    <h3><?php echo "Usando IF: $msj";?></h3>
    <h3><?php echo "Usando SWITCH: $msj2";?></h3>
</body>
</html>