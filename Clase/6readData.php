<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Leer Datos</title>
</head>

<body>
    <!--el atributo action le dice al formulario a que archivo le
    va a enviar la informacion (6readDato); se debe usar otro atributo llamado "method" que le diga a la informacion como se va a enviar,  existen dos formar:
    * get: envia la info por la url
    * post: enviar info de forma anonima
    a los inputs se les debe adicionar un atributo "name", le da 
    un nombre a la etiqueta
    -->
    <form class="form-data" action="6readData.php" method="post">
        <label class="etiquetas" for="">Nombre: </label>
        <input class="controls" type="text" name="userName" placeholder="Ingrese su nombre"><br>
        <label class="etiquetas" for="">Edad: </label>
        <input class="controls" type="number" name="userAge" placeholder="Ingrese Edad"><br>
        <label class="etiquetas" for="">Clave</label>
        <input class="controls" type="password" name="pswd" placeholder="contraseña"><br>
        <input class="buttons" type="submit">
        <!--Enviar informacion-->
        <input class="buttons" type="reset">
        <!--Limpiar informacion-->
    </form>

    <?php
    //por el metodo get y post, obtenga lo envie la entrada llamada "userName"
    error_reporting(0); //evita que salga errores por los campos vacios del formulario

    if (isset($_POST['userName']) && isset($_POST['userAge']) && isset($_POST['pswd'])) {
        $pswd = $_POST["pswd"];
        $userName = "Hola " . $_POST["userName"];
        echo $userName;
        echo "<br>";
        $userAge = $_POST["userAge"];
        echo $userAge > 17 ? "Es mayor de edad" : "Es menor de edad";
        "<br>";
        //programa que seleccionando una letra o un numero del 1-7, muestre el dia de la semana
    }
    $dia = 'w';
    switch ($dia) {
        case 'l':
        case 'L':
            echo "lunes";
            break;
        case 'm':
        case 'M':
            echo "Martes";
            break;
        case 'W':
        case 'w':
            echo "Miercoles";
            break;
    }




    ?>


</body>

</html>