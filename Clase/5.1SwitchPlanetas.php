<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planetas</title>
</head>
<body>
    <h3>Programa que muestre el peso de las personas en los diferentes planetas del sistema solar</h3>
    <form action="5.1SwitchPlanetas.php" method="post">
        <h4>Planetas</h4>
        <select name="opcion" id="">
            <option value="mercurio">Mercurio</option>
            <option value="venus">Venus</option>
            <option value="tierra">Tierra</option>
            <option value="marte">Marte</option>
            <option value="jupiter">Jupiter</option>
            <option value="saturo">Satruno</option>
            <option value="urano">Urano</option>
            <option value="neptuno">Neptuno</option>
        </select>
        <input type="text" placeholder="Ingresar Masa" name="masa"><br>
        <input type="submit">
    </form>

    <?php
        $planeta = $_POST["opcion"];
        $masa = $_POST["masa"];
        $peso;
        /*
        if($planeta == "mercurio" ){
            $peso = $masa * 3.7;
            echo ("El peso en mercurio es: " . $peso . "N");
        }
        if($planeta == "venus"){
            $peso = $masa * 8.87;
            echo ("El peso en venus es: " . $peso . "N");
        }
        if($planeta == "tierra"){
            $peso = $masa * 9.8;
            echo ("El peso en tierra es: " . $peso . "N");
        }*/
        switch($planeta){
            case "mercurio":
            case "marte":
                $peso = $masa * 3.7;
                echo ("El peso en mercurio es: " . $peso . "N");
                break;
            case "venus":               
                $peso = $masa * 8.87;
                echo ("El peso en mercurio es: " . $peso . "N");
                break;
            case "tierra":
                $peso = $masa * 9.8;
                echo ("El peso en mercurio es: " . $peso . "N");
                break;
            case "marte":
                $peso = $masa * 3.71;
                echo ("El peso en mercurio es: " . $peso . "N");
                break;
            case "mercurio":
                $peso = $masa * 3.7;
                echo ("El peso en mercurio es: " . $peso . "N");
            case "mercurio":
                $peso = $masa * 3.7;
                echo ("El peso en mercurio es: " . $peso . "N");
            case "mercurio":
                $peso = $masa * 3.7;
                echo ("El peso en mercurio es: " . $peso . "N");
            case "mercurio":
                $peso = $masa * 3.7;
                echo ("El peso en mercurio es: " . $peso . "N");
            default: 
                echo("Valor seleccionado invalido!!!");
                break;
        }

    ?>



</body>
</html>