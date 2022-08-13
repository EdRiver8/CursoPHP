<?php 
    include "includes/header.php";
    include "functions.php";
?> 
<body>    
    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">Mostrar Datos en Array</h1>
            <?php
                //retorna un array asociativo de la db
                $result = readDataUser();
                while($row = mysqli_fetch_assoc($result)){
                    //cierro php para dar paso al html de aqui en adelante
                ?>
                    <pre><!-- Texto preformato con css-->
                        <?php
                            print_r($row);
                        ?>
                    </pre>
                    <?php                    
                }
            ?>
        </div>
    </div>

<?php include "includes/footer.php"?>