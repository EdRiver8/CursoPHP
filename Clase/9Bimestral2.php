<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles4.css">
    <title>Document</title>
</head>
<body>
    <h3>Programa que aplica calculos pertenecientes al MRUA</h3>
    <div>
        <p>Seleccione la variable a calcular: </p>
        <form action="9Bimestral2.php" method="post" id="ppal" class="formulario">
            <select name="opcion" id="opcion">
                <option value="velocidad">Velocidad</option>
                <option value="tiempo">Tiempo</option>
                <option value="distancia">Distancia</option>
                <option value="aceleracion">Aceleracion</option>
            </select>
            <input type="submit" class="enviar">
    </div>  
        </form>
        <form action="9Bimestral2.php" class="formulario">
            <label for="">Velocidad Inicial</label>
            <input type="text" placeholder="Vo"><br> 
            <label for="">Velocidad Final</label>
            <input type="text" placeholder="Vf" disabled><br> 
            <label for="">Distancia</label>
            <input type="text" placeholder="D"><br> 
            <label for="">Tiempo</label>
            <input type="text" placeholder="T"><br> 
            <label for="">Aceleracion</label>
            <input type="text" placeholder="A"><br> 
            <input type="submit" value="Calcular" class="enviar">
            <input type="reset" class="enviar">
        </form>
      

    <?php 
    /*Realizar un programa que aplique el MRUA, de tal manera que le muestre al usuario, las siguientes opciones, este elija si desea calcular:
            * Velocidad
            * Tiempo
            * Distancia
            * Aceleración
        tener en cuenta:
        *Se debe mostrar las opciones a calcular con una lista desplegable
        *Ninguno de los valores ingresados pueden ser negativos
        *Si se ingresa un valor de forma incorrecta debe informar del error y pedir que lo ingrese nuevamente (excepción, si puede ser negativa).

        Ejemplo: el usuario define que quiere calcular la distancia, para esto se le debe pedir que ingrese la velocidad inicial, el tiempo y la aceleración.
       */
      if(isset($_POST['opcion'])){
        $opcion = $_POST['opcion'];
        $disabled = '';
        switch($opcion){
            case 'velocidad':
                echo "vel";
                $disabled = 'disabled';
                echo "<input type='text' $disabled>";
                break;
            case 'tiempo':
                echo "tiempo";
                break;
            case 'distancia':
                echo "distancia";
                break;
            case 'aceleracion':
                echo "aceleracion";
                break;
        }
      }
      
    
    ?>
</body>
</html>