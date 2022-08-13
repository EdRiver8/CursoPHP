<?php
    /*Al iniciar la sesion, osea que me redireccione correctamente se aplicara el if*/
    session_start();

    /* */
    if(isset($_SESSION['usuario'])){
        header("location: index.php");/*Me redireccionara al href que yo elija*/
    }
    /*Si no cumple no hara nada*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--El head es lo que el usuario no ve-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--El meta es la forma en la que se interpreta el texto-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importacion de biblioteca de fontawesome-->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/session.css"/>
    <!--El titulo que tendra la pagina-->
    <title>Iniciar sesión Imballagio Di Coco</title>
</head>
<!--Donde se inicia a ubicar el contenido-->
<body>
    <!--cajas que guardan el contenido-->
    <div class="all-container">
        <div class="cont-form">
            <div class="signin-signup">
                <!--Se inician a hacer los formularios-->
                <!--Necesitamos el method para que la informacion si llegue-->
                <form action="php/user_profile.php" method="POST" class="form-signin">
                    <h2 class="title">Iniciar Sesión</h2>
                    <div class="campos">
                        <i class="fas fa-user"></i>
                        <!--Es donde se ingresan los dantos del usuario-->
                        <input type="email" placeholder="correo" name="correo_electronico" required>
                    </div>
                    <div class="campos">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="password" required>
                    </div>
                    <button class="boton">Iniciar sesión</button>
                    <!--Para poner parrafos y/o textos-->
                    <p class="texto-redes">O accede a tu cuenta con alguna red social</p>
                    <div class="redes-sociales">
                        <!--Sirve para enviar a otros enlaces-->
                        <!--Id es unico y Class es varios-->
                        <a href="https://www.facebook.com" class="icono" id="fb1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://accounts.google.com/signin" class="icono" id="gle1">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://twitter.com/iniciarsesion?" class="icono" id="tw1">
                          <i class="fab fa-twitter"></i>
                        </a>
                    </div>   
                </form>
                <form action="php/user_register.php" method="POST" class="form-signup">
                    <h2 class="title">Regístrate</h2>
                    <div class="campos">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo" required>   
                    </div>
                    <div class="campos">
                        <i class="fas fa-envelope-open"></i>
                        <input type="email" placeholder="Correo" name="correo_electronico" required>
                    </div>
                    <div class="campos">
                        <i class="fas fa-calendar-minus"></i>
                        <input type="date" placeholder="Nombre" name="fecha_nacimiento" required>
                    </div>
                    <div class="campos">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="password" required>
                    </div>
                    <button class="boton">Registrarse</button>
                    <p class="texto-redes">O crea tu cuenta con alguna red social</p>
                    <div class="redes-sociales">
                        <a href="https://www.facebook.com" class="icono" id="fb2">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://accounts.google.com/signin" class="icono" id="gle2">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://twitter.com/iniciarsesion?" class="icono" id="tw2">
                          <i class="fab fa-twitter"></i>
                        </a>
                    </div>   
                </form>
            </div>
        </div>
        <div class="cont-decoration">
            <div class="decoration left-decoration">
                <div class="contenido">
                    <h3>¿Nuevo aquí?</h3>
                    <p>Únete a nuestra campaña, una manera diferente de sembrar vida</p>
                    <button class="chang-btn" id="signup-btn">Vamos a unirnos</button>
                </div>
                <!--Alternativa por si no hay imagen-->
                <img src="assets/sign-in.svg" alt="" class="figure">
            </div>
            <div class="decoration right-decoration">
                <div class="contenido">
                    <h3>¿Ya perteneces?</h3>
                    <p>Siguenos acompañando en este compromiso con el medio ambiente</p>
                    <button class="chang-btn" id="signin-btn">Adelante!</button>
                </div>
                <img src="assets/sign-up.svg" alt="" class="figure" id="big-figure">
            </div>
        </div>
    </div>
    <!--El script se llama al final porque al inicio ademas suele generar errores, y ya no tendria sobre quien trabajar el cual es el html-->
    <script src="JS/session.js"></script>
</body>
</html>