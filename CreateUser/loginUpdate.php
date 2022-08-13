<?php 
    include "db.php";
    include "functions.php";
?>

<?php
    if(isset($_POST['submit'])){
        updateUser();
    }
?>

<?php include "includes/header.php"?> 
<body>    
    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">Update User</h1>
            <form action="loginUpdate.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" style="margin-bottom: 8px;">
                </div>
                <div class="form-group">
                    <select name="id" id="idUser">
                        <?php
                            //muestra los ids de la db
                            showIdDataUser();
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Update" style="margin-top: 8px;">  
            </form>
        </div>
    </div>

<?php include "includes/footer.php"?>