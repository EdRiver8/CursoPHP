<?php
//require_once("../Model/UserModel.php");
require_once("Model/UserModel.php"); //posicion desde el index
$users = new UserModel();
$listaUsers = $users->getUsers();

//echo $listaUsers;
