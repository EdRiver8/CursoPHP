<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registrar</title>
</head>
<body>
    <div class="contenedor-pad">
        <h1 class="titulo">Registrar Usuario</h1>
        <form action="index.php" class = "cont-form" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Ingrese Nombre" name="nombre">
            <label for="correo">Correo</label>
            <input type="text" placeholder="Ingrese Correo" name="correo">
            <label for="passw">Password</label>
            <input type="password" placeholder="Ingrese Password" name="passw">
            <label for="confirm">Confirmar</label>
            <input type="password" placeholder="Confirme Password" name="confirm">
            <input type="submit" name="enviar">
        </form>
    </div>
    <?php        
        if(isset($_POST['enviar'])){
            include "crud.php";
            crearUsuario();
        }
    ?>    
</body>
</html>