<?php include "includes/header.php"?> 
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Create User</h1>
            <form action="loginCreate.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" style="margin-bottom: 8px;">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Enviar Datos">  
            </form>
        </div>
    </div>

    <?php
        include "functions.php";
        if(isset($_POST['submit'])){
            creatUser();
        }
    ?>

<?php include "includes/footer.php"?>


