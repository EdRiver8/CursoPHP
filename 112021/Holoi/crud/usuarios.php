<?php
    include("conexion.php");
    error_reporting(0);
    $busqueda = $_POST['busqueda'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../favicon/Logo.ico"> <!--favicon de la pagina-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/5566c297b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="crud.css">
    <title>Usuarios</title>
</head>
<body>
    <nav class="">
        <div class="btns">
            <a class="añadir" href="registro.html">
                <button class="button is-primary">
                <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span>Añadir</span>
                </button>
            </a>
            <a class="citas" href="citas.php">
                <button class="button is-light">
                    <span class="icon">
                        <i class="fas fa-calendar"></i>
                    </span>
                <span>Ventas</span>
                </button>
            </a>    
        </div>
        <div class="buscador">
            <form class="usuarios.php" action="usuarios.php" method="post">
                <div class="field">
                    <div class="control has-icons-left">
                        <input class="input is-primary" name="busqueda" type="text" placeholder="Buscar...">
                        <span class="icon is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
                <button class="button is-primary  is-outlined" name="buscador">Buscar</button>
            </form>
        </div>
    </nav>
    <div class="usuarios">
        <h2 class="title">Usuarios</h2>
        <!-- <form class="table-container" action="" method="post"> -->
            <table class="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Compra</th>
                        <th>fecha_compra</th>
                        <th>medio pago</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $con = "SELECT * FROM `cliente`";
                        $resultado = mysqli_query($conexion,$con);
                        while($row = mysqli_fetch_assoc($resultado)){ 
                    ?>
                    <tr>
                        <td><?php echo $row['id_clientes'] ?></td>
                        <td><?php echo $row['ID_rol'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['number'] ?></td>
                        <td><?php echo $row['birth_date'] ?></td>
                        <td><?php echo $row['contraseña'] ?></td>
                        <td><?php echo $row['fecha_compra'] ?></td>
                        <td><?php echo $row['medio_pago'] ?></td>
                        <td>
                            <a href="editarusuario.php?id=<?php echo $row['id_clientes'] ?>">
                                <span class="icon icon--edit">
                                    <i class="fas fa-edit"></i>
                                </span>
                            </a>
                        </td>
                        <td>
                            <a href="eliminarUsuario.php?id=<?php echo $row['id_clientes'] ?>">
                                <span class="icon icon--delete">
                                    <i class="fas fa-minus-circle"></i>       
                                </span>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        <!-- </form> -->
    </div>
</body>
</html>