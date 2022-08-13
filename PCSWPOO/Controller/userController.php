<?php
require_once("Model/UserModel.php"); //posicion desde el index

$cedula = $_POST['cedula'];

$users = new UserModel();
$user = $users->getUser($cedula);

//echo $user;
