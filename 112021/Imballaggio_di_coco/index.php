<?php
    session_start();

    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Imballagio di Coco</title>
</head>
<body>
    <!--Navbar o barra de navegacion-->
    <header id="barra-navegacion">
        <div class="cont-barra-navegacion">
            <div class="logo">
                <img src="" alt="Imballagio Di Coco">
            </div>
            <div class="cont-navegadores">
                <nav id="navegador">
                    <ul>
                        <li><a href="#cont-all" class="elegido">Inicio</a></li>
                        <li><a href="#sobre-nosotros">Sobre nosotros</a></li>
                        <li><a href="#galeria">Galeria</a></li>
                        <li><a href="#contactenos">Contactenos</a></li>
                        <li><a href="carrito.php">Tienda</a></li>
                        <li><a href="session.php">Cerrar sesion</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!--Fin de la barra de navegacion-->
    <!--Portada y creacion de la wave (ola)-->
    <div class="cont-all" id="cont-all">
        <div class="portada">
            <!--Wave "Inicio de la ola de decoracion"-->
            <div class="color-fondo"></div>
            <div class="wave w1"></div>
            <div class="wave w2"></div>

            <div class="cont-portada">
                <div class="info">
                    <h1>¿Deseas conocer<h2> más sobre nosotros?</h2></h1>
                    <p>Somos una empresa enfocada en el ámbito ambiental, que se dedica a producir y vender empaques para plantas a base del sustrato del coco.</p>
                    <!--input controles interaccio-->
                    <input type="button" value="Ver mas...">
                </div>
                <div class="cont-img">
                    <img src="assets/undraw_flowers_vx06.svg" alt="">
                </div>
            </div>
        </div>
        <!--Fin de la portada y la estructura de la wave (ola)-->
        <!--Inicio de la creacion del sobre nosotros efecto 3d-->
        <div class="sobre-nosotros" id="sobre-nosotros">
            <h1>¿QUIÉNES SOMOS?</h1>
            <div class="contenedor-cartas">
                <div class="carta-padre">
                    <div class="carta">
                        <div class="cara-frente" style="background-image: url(assets/int8.jpeg);">
                            <div class="background-estilos"></div>
                        </div>
                        <div class="cara-trasera">
                            <div class="cuerpo-cara-trasera">
                                <h1>Manuela Guiral Ocampo</h1>
                                <p>Es la jefe contable de la empresa Imballaggio Di Coco.<br>Con una fortaleza destacada:<br>La precisión</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carta-padre">
                    <div class="carta">
                        <div class="cara-frente" style="background-image: url(assets/int6.jpeg);">
                            <div class="background-estilos"></div>
                        </div>
                        <div class="cara-trasera">
                            <div class="cuerpo-cara-trasera">
                                <h1>Isabel Uribe Rendon</h1>
                                <Con>Es la gerente de la empresa Imballagio Di Coco<br>Con una fortaleza destacada:<br>El liderazgo</p>
                            </div>
                        </div>
                    </div>
                </div><div class="carta-padre">
                    <div class="carta">
                        <div class="cara-frente" style="background-image: url(assets/int4.jpeg);">
                            <div class="background-estilos"></div>
                        </div>
                        <div class="cara-trasera">
                            <div class="cuerpo-cara-trasera">
                                <h1>Sara Gutiérrez Sierra</h1>
                                <p>Es la analista de software de la empresa Imballagio Di Coco<br>Con una fortaleza destacada:<br>La persistencia</p>
                            </div>
                        </div>
                    </div>
                </div><div class="carta-padre">
                    <div class="carta">
                        <div class="cara-frente" style="background-image: url(assets/int3.jpeg);">
                            <div class="background-estilos"></div>
                        </div>
                        <div class="cara-trasera">
                            <div class="cuerpo-cara-trasera">
                                <h1>Valentina Restrepo Cardona</h1>
                                <p>Es la desarrolladora de sotfware de la empresa Imballagio Di Coco<br>Con una fortaleza destacada:<br>La responsabilidad</p>
                            </div>
                        </div>
                    </div>
                </div><div class="carta-padre">
                    <div class="carta">
                        <div class="cara-frente" style="background-image: url(assets/int7.jpeg);">
                            <div class="background-estilos"></div>
                        </div>
                        <div class="cara-trasera">
                            <div class="cuerpo-cara-trasera">
                                <h1>Miguel Montoya González</h1>
                                <p>Es el jefe de ventas de la empresa imballaggio Di Coco.<br>Con una fortaleza destacada:<br>La persuación</p>
                            </div>
                        </div>
                    </div>
                </div><div class="carta-padre">
                    <div class="carta">
                        <div class="cara-frente" style="background-image: url(assets/int1.jpeg);">
                            <div class="background-estilos"></div>
                        </div>
                        <div class="cara-trasera">
                            <div class="cuerpo-cara-trasera">
                                <h1>Juan Pablo Muñoz Herrera</h1>
                                <p>Es el jefe de logistica de la empresa imballaggio Di Coco.<br>Con una fortaleza destacada:<br>La fuerza</p>
                            </div>
                        </div>
                    </div>
                </div><div class="carta-padre">
                    <div class="carta">
                        <div class="cara-frente" style="background-image: url(assets/int2.jpeg);">
                            <div class="background-estilos"></div>
                        </div>
                        <div class="cara-trasera">
                            <div class="cuerpo-cara-trasera">
                                <h1>Santiago Salinas Álvarez</h1>
                                <p>Es el jefe de producción de la empresa Imballaggio Di Coco.<br>Con una fortaleza destacada:<br>La eficiencia</p>
                            </div>
                        </div>
                    </div>
                </div><div class="carta-padre">
                    <div class="carta">
                        <div class="cara-frente" style="background-image: url(assets/int5.jpeg);">
                            <div class="background-estilos"></div>
                        </div>
                        <div class="cara-trasera">
                            <div class="cuerpo-cara-trasera">
                                <h1>Juan Pablo Silva Posada</h1>
                                <p>Es el programador web de la empresa Imballagio Di Coco<br>Con una fortaleza destacada:<br>La resiliencia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin del sobre nosotros-->
        <br><!--Espaciado-->
        <br><!--Espaciado-->
        <!--Inicio de la creacion de la galeria de imagenes-->
        <div class="galery" id="galeria">
            <h2>GALERÍA</h2>
            <div class="cont-imagenes">
                <div class="articulos" style="background-image: url(assets/coconut1.jpeg);"></div>
                <div class="articulos" style="background-image: url(assets/coconut2.jpeg);"></div>
                <div class="articulos" style="background-image: url(assets/coconut3.jpeg);"></div>
                <div class="articulos" style="background-image: url(assets/coconut4.jpeg);"></div>
            </div>
        </div>
        <!--Fin de la galeria-->

        <div class="cont-contactenos" id="contactenos">
            <h1 class="bg-tittle">CONTÁCTANOS <span>AHORA</span></h1>
            <div class="contactenos">
                <div class="form-contactenos">
                    <h2>Contáctenos</h2>
                    <form action="php/formulario.php" method="POST">
                        <p>
                            <label for="">Nombre Completo</label>
                            <input type="text" name="nombre_completo-form" required>
                        </p>
                        <p>
                            <label for="">Correo Electrónico</label>
                            <input type="email" name="correo_electronico-form" required>
                        </p>
                        <p class="entero">
                        <label for="">Tipo de inquietud</label>
                        <select name="inquietud-form" required>
                            <option value="sugerencia">Sugerencia</option>
                            <option value="queja">Queja</option>
                            <option value="inconformidad">Inconformidad</option>
                        </select>
                        </p>
                        <p class="entero">
                            <label>Mensaje</label> 
                            <textarea name="mensaje-form" rows="3"></textarea>
                        </p>
                        <p class="entero">      
                            <button>Enviar</button>
                        </p>
                    </form>
                </div>
                <div class="info-contactenos">
                    <h2>Más información</h2>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Colegio Santa Bertilla Boscardin</li>
                        <li><i class="fas fa-phone"></i> (+57) 311-357-05-07</li>
                        <li><i class="fas fa-envelope-open-text"></i> ImballagioDiCoco@gmail.com</li>
                    </ul>
                    <p>Déjanos un mensaje y podrás resolver cualquier duda que tengas con respecto a Imballagio Di Coco. Llena todos los campos correctamente para facilitar que nos contactemos contigo para darte respuesta lo más pronto posible.</p>
                </div>
            </div>
        </div>

        <!--Inicio de la creacion del pie de pagina, about us y social networks-->
        <footer>
            <div class="cont-footer">
                <div class="caja-footer">
                    <div class="logo">
                        <img src="" alt="Imballagio Di Coco">
                    </div>
                    <div class="terminos">
                        <p>El producto tiene una forma adaptable y consistente, el cual también es cpmpletamente biodegradable y tiene componentes de abono para las plantas.<br>La idea esta creada especielmente para viveros y huertas de alta producción.</p>
                    </div>
                </div>
                <div class="caja-footer">
                    <div class="terminos">
                        <h2>Misión</h2>
                        <p>La compañía Imballaggio di coco tiene como propósito reducir la contaminación de la industria, reemplazando las bolsas de plástico por empaques biodegradables elaborados a base de gapacho de coco.</p>
                    </div>
                </div>
                <div class="caja-footer">
                    <div class="terminos">
                        <h2>Visión</h2>
                        <p>Para el año 2025 nos proyectamos como una empresa líder en Colombia, con los más altos estándares de calidad y satisfacción de nuestros clientes . Así nuestra empresa extenderá los beneficios sobre el cuidado del medio ambiente, sobre la perspectiva humanista y la cultura para una mejor calidad de vida.</p>
                    </div>
                </div>
                <div class="caja-redes">
                    <h2>Redes sociales</h2>
                    <a href="" id="facebook"><i class="fab fa-facebook-square"></i>Facebook</a>
                    <a href="" id="twitter"><i class="fab fa-twitter-square"></i>Twitter</a>
                    <a href="" id="instagram"><i class="fab fa-instagram-square"></i>Instagram</a>
                </div>
            </div>
            <div class="caja-derechos">
                <hr>
                <p>Todos los derechos reservados © 2021 <b>Imballagio Di Coco</b></p>
            </div>
        </footer>
        <!--Fin del pie de pagina-->
    </div>
    <script src="JS/app.js"></script><!--Se llama un archivo JavaScrispt-->
</body>
</html>