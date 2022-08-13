<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../favicon/Logo.ico"> <!--favicon de la pagina-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/crud.css">
    <title>Citas</title>
</head>
<body>
    <nav class="">
        <div class="btns">
            <a class="añadir" href="">
                <button class="button is-primary">
                <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span>Añadir</span>
                </button>
            </a>
            <a class="citas" href="usuarios.php">
                <button class="button is-light">
                    <span class="icon">
                        <i class="fas fa-users-cog"></i>
                    </span>
                <span>Usuarios</span>
                </button>
            </a>    
        </div>
        <div class="buscador">
            <form class="buscador" action="" method="post">
                <div class="field">
                    <div class="control has-icons-left">
                        <input class="input is-primary" type="text" placeholder="Buscar...">
                        <span class="icon is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
                <button class="button is-primary  is-outlined">Buscar</button>
            </form>
        </div>
    </nav>
    <div class="Citas">
        <h2 class="title">Citas</h2>
        <form class="table-container" action="" method="post">
            <table class="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>

                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>2</th>
                        <td>Jose Miguel</td>
                        <td>Pulgarin</td>
                        <td>10:00</td>
                        <td>2021-11-22</td>
                        <td>
                            <span class="icon is-lg icon--edit">
                                <i class="fas fa-edit"></i>
                            </span>
                        </td>
                        <td>
                            <span class="icon icon--delete">
                                <i class="fas fa-minus-circle 7x"></i>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>