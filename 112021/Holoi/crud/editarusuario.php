<?php
    include("conexion.php");
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $consulta = "SELECT * FROM cliente WHERE id_clientes = $id";
        // echo $id;
        $resultado = mysqli_query($conexion,$consulta);

          // while($row = mysqli_fetch_assoc($resultado)){
        if(mysqli_num_rows($resultado)){
            $row = mysqli_fetch_assoc($resultado);
            $id_cliente = $row['id_clientes'];
            // $id_rol = $row['ID_rol'];
            $nombre = $row['nombre'];   
            $apellido = $row['apellido'];
            $email = $row['email'];
            // $celular = $row['number'];
            // $birth_date = $row['birth_date'];
            $contraseña = $row['contraseña'];
            // $fecha_compra = $row['fecha_compra'];
            $medio_pago= $row['medio_pago'];
        } 
    }

    if(isset($_POST['editar'])){
      // $nuevo_rol = $_POST['rol'];
        $id = $_GET['id'];
        $nuevo_nombre = $_POST['nombre'];
        $nuevo_apellido = $_POST['apellido'];
        $nuevo_email = $_POST['correo'];
        $nuevo_contraseña = $_POST['contraseña'];

        $consulta_editar = "UPDATE `cliente` SET `nombre`='$nuevo_nombre',`apellido`='$nuevo_apellido',`email`='$nuevo_email',`contraseña`='$nuevo_contraseña' WHERE id_clientes = $id";

        mysqli_query($conexion,$consulta_editar);
        header("location:usuarios.php");
        echo "modificado";
    }
    
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Holoi Kino.</title>
    <link rel="stylesheet" href="registro.css">
    <link rel="icon" href="img/logo.jpg.jpeg">
  </head>
  <body>

    <div class="login-box">
      <img src="img/logo.jpg.jpeg" class="avatar" alt="Avatar Image">
      <h1>CRUD</h1>
      <form action="editarusuario.php?id=<?php echo $_GET['id']?>" method="post">
        <!-- USERNAME INPUT -->
        <label for="email">nombre</label>
        <input type="text" placeholder="Enter nombre" name="nombre" value="<?php echo $nombre?>">
         <!-- PASSWORD INPUT -->
        <label for="rol">apellido</label>
        <input type="text" placeholder="Enter apellido" name="apellido" value="<?php echo $apellido ?>">
         <!-- PASSWORD INPUT -->
        <label for="password">Correo</label>
        <input type="text" placeholder="Enter correo" name="correo" value="<?php echo $email ?>">
        <!-- PASSWORD INPUT -->
        <label for="email">contraseña</label>
        <input type="text" placeholder="contraseña" name="contraseña" value="<?php echo $contraseña?>">

        <!-- <input type="submit" name="editar"> -->

        <button name="editar">modificar</button>
        
      </form>
    </div>
  </body>
</html>