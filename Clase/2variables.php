<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body style="background: linear-gradient(to right,red,brown);">
    <h1 style="text-align: center; font-family: sans-serif; color: white;">11B Learning PHP</h1>

    <!--Se imprime una varible de php por medio de etiquetas -->
    <?php 
        /* una variable es un espacio en memoria que sirve para almacenar
        datos o informacion; en php las variables se identifican con 
        el simbolo $ seguido de un nombre que describa lo mejor posible
        el dato a almacenar; php cuenta tipado dinamico, esto indica que
        no es necesario especificar el tipo de dato a guardar (int, 
        string, float, bool...)
        a tener en cuenta:
        * El nombre de la variable no debe iniciar con un numero
        * las variable son "Case Sensitive", lo que indica que no es 
          mismo nombre a Nombre o NOmbre*/
    
        //una varible que guarde el nombre del usuario
        //usando notacion camelCase
        // para decirle que guarde un dato usamos "=", es el asignador
        $userName = "Edwin";//string
        //variable para guardar edad
        $userAge = 35;//int
        $userHeight = 1.75;//float

        echo "Nombre del usuario: " . $userName . "<br>";
        echo "Edad del usuario: " . $userAge . "<br>";
        echo "Estatura del usuario: " . $userHeight ."<br>";
        
        echo "Nombre del usuario: " . $userName . " y su edad " . $userAge;   
        
        /*Constantes, es un valor que no va a cambiar a lo largo del
         codigo, para crearla se usa una palabra reservada (son palabras
         del sistema, PHP, que no pueden ser usadas para definier 
         variables) const */
         
        echo "<br>"; 
        const CONSTANTE = "Mensaje que no cambia";
        echo CONSTANTE;
        //realizamos un cambio en la variable userName
        $userName = "Lucas";//mutamos la variable
        
        //sistema de nomina, panaderos = $2', este valor no puede cambiar
        const SUELDOPANADERO = 2000000;
        echo "<br>";
        const ESTUDIANTES = array('Lucas', "Juan Pablo Silva", 'Paulina');
        echo ESTUDIANTES[1];//no se puede mutar

    ?>
    
    <h2><?php echo $userName; ?></h2>

</body>
</html>