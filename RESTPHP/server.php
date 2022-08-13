<?php
echo 'Hola Mundo';

/*
<?php 

//comando para levantar el servidor y realizar pruebas con php
//php -S localhost:8000 server.php     (server.php es el punto de entrada, el servidor)

//libreria 
$allowedResourceTypes=[ 
    'books',
    'authors',
    'genres'
];

//validacion de recursos posibles
$resourceType = $_GET['resoruce_type'];
//verifacar que un elemento pertenece al arreglo, sino pertener, muere el script 
if(!in_array($resourceType, $allowedResourceTypes)) die;

switch($_SERVER[strtoupper('REQUEST_METHOD'])){ 
    case 'GET' : break; 
    case 'POST' : break; 
    case 'PUT' : break; 
    case 'DELETE' : break; 
} 
?>

*/