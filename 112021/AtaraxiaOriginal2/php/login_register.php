<?php

    session_start();
    if (isset($_SESSION['usuario'])) {
        header("location: bienvenida.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Registr0</title>
    <link rel="stylesheet" href="../css/login_register.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/92af462a6b.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="nav">
        <img  class="imglogo"src="img/Ataraxia.png" alt="">
        <div class="logo">Ataraxia</div>
        <ul class="menu">
            <li><a href="../html/index.html">Inicio</a></li>
            <li><a href="../html/nosotros.html">Nosotros</a></li>
            <li><a href="login_register.php">Login/Sing up</a></li>
        </ul>
    </nav>
    <main>
        <div class="contenedorTodo">
            <div class="cajaTrasera">
                <div class="cajaTraseraLogin">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia Sesion para entrar en la pagina</p>
                    <button id="btn_iniciarSesion">Iniciar Sesion</button>
                </div>
                <div class="cajaTraseraRegistrer">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>
            <!--Formulario de login y registro-->
            <div class="contenedorLoginRegistrer">
                <!--Login-->
                <form action="php/login_usuario.php" class="formularioLogin" method="post">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="php/registro_usuario.php" class="formularioregistrer" method="post">
                    <h2>Registrar</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <br><br>
     <!--Aqui empieza el footer-->
     <footer>
        <div class="redes-container">
            <ul>
                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="../html/contactenos.html" class="gmail"><i class="fas fa-envelope"></i></a></li>
                <li><a href="#" class="mobile"><i class="fas fa-mobile-alt"></i></a></li>
            </ul>
        </div>

  </footer>
  
    <script src="../js/menu.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>