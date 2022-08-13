<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>
<body style="background: linear-gradient(to right,blue,brown);">
    <h1 style="text-align: center; font-family: sans-serif; color: white;">11B Learning IF</h1>

    <?php 
        /*Es una estructura condicional (si); recibe
        una prueba logica, la evalua, si es verdadera
        toma un camino, de lo contrario, si es falsa
        toma otro camino; normalmente se puede
        adjuntar un else al if; tambien se pueden
        agrupar if dentro de if, a esto se llama
        anidar

        en la prueba siempre debe ir un comparador por lo menos:
            == compara si una cosa es igual a la otra
            > mayor que
            < menor que
            <= menor o igual que
            >= mayor o igual que
            != diferente

            los comporadores logicos se usan para hacer dos o mas comparaciones a la vez
            && and
            || or
            !  not

        if(prueba logica){
            verdadera
        }falsa... salta el if, y continua con la siguiente linea de codigo

        if(prueba logica){
            lineas de codigo si es verdadera
        }else {
            lineas de codigo si es falsa
        }

        if(prueba logica){
            lineas de codigo si es verdadera
            if(prueba logica){ 
                lineas de codigo si es verdadera
            }
        }elseif(prueba logica){ si anidado en el else
            lineas de codigo si es falsa
        }
        */

        //un programa que diga cual de dos numeros es el mayor
        $numero1 = 12;
        $numero2 = 12;

        /*  3 escenarios posibles
            1ro: num1 > num2
            2do: num2 > num1
            3ro: num1 = num2
        */

        if($numero1 > $numero2){
            echo "El mayor es: " . $numero1 . "<br>";
        }elseif($numero2 > $numero1){//sino o de lo contrario
            echo "El mayor es: " . $numero2 . "<br>";
        }else{echo "Los dos numeros son iguales: " . $numero1 . "<br>";}

        /* Diego, Juan, Camila y Miguela estan resolviendo 
        una operacion matematica:
            3 + 3 * 3 - 3 + 3
        Diego dice que el resultado es: 18
        Juan dice que es: 12
        Camila dice que es: 3
        Miguela dice que es: 6
        Desarrollar un algoritmo que indique cual de
        los cuatro tiene la razon, mostrando el 
        nombre y el valor correcto de la operacion
        */
        $operacion = 3 + 3 * 3 - 3 + 3;
        $diego = 18;
        $miguela = 12;
        $Juan = 12;
        $camila = 3;

        if($operacion == $diego){
            echo "Diego tiene la respuesta correcta " . $diego . "<br>";
        }
        if($operacion == $Juan){
            echo "Juan tiene la respuesta correcta " . $Juan . "<br>";
        }
        if($operacion == $camila){
            echo "Camila tiene la respuesta correcta " . $camila . "<br>";
        }
        if($operacion == $miguela){
            echo "Miguela tiene la respuesta correcta " . $miguela . "<br>";
        }

        /*
            realizar un programa que defina si un hombre o mujer ya tiene
            derecho a la pension; para ello tener en cuenta:
            * Hombres se pensionan a los 62
            * Mujeres se pensionan a los 57
        */
        //m = male; f = female
        $sexo = 'x';
        $edad = 12;

        /*  Escenarios del problema:
            1ra Hombre y mayor de 61
            2da Hombre y menor de 62
            3ra Mujer y mayor de 56
            4ra Mujer y menor de 57
        */
        //solucion usando IF anidados
        if($sexo == 'm'){
            if($edad > 61){
                echo "La persona es hombre y ya se puede pensionar" . "<br>";
            }else{echo "La persona es hombre pero no tiene la edad de la pension" . "<br>";}
        }elseif($sexo == 'f'){
            if($edad > 56){
                echo "La persona es mujer y ya se puede pensionar" . "<br>";
            }else{echo "La persona es mujer pero no tiene la edad de la pension" . "<br>";}
        }else{echo "Sexo mal seleccionado!!!" . "<br>";}

        //solucion usando 2 IF y AND (and es para que se cumplan todas las condiciones)


        /* programa que diga que estudiante pasa una materia si:
            nota > 3.4 y asistencia > 7
        */

        $nota = 3.5;
        $asistencia = 7;

        if($nota > 3.4){
            if($asistencia > 7){
                echo "El estudiante aprobo la materia" . "<br>";
            }else{
                echo "El estudiante no aprobo por asistencias" . "<br>";
            }
        }else{
            echo "El estudiante no aprobo por nota" . "<br>";
        }

        //2da manera de resolver
        //para que ingrese al IF se deben de cumplir las dos comparaciones
        if($nota > 3.4 && $asistencia > 7){
            echo "El estudiante aprobo la materia" . "<br>";
        }else{
            echo "El estudiante no aprobo" . "<br>";
        }
        
        /*programa que diga si un estudiante pasa la materia, teniendo encuenta que debio sacar mas de 3.45*/
        //USANDO OPERADOR TERNARIO ? = un IF corto
        $nota1 = 3.5;
        echo $nota1 > 3.45 ? "Paso" : "No paso";


    ?>
    
</body>
</html>