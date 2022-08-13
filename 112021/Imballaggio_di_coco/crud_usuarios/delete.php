<?php

    include "../config/db.php";

    $id = $_POST['id'];

    $query = "DELETE FROM usuarios WHERE id = $id";
    if($res = $connection -> query($query)){
        echo 1;
    }echo 0;
?>