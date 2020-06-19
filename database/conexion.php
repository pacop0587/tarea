<?php

#Cambiar los datos cuando se suba el proyecto a AWS
define('USER','user_prueba');
define('PASSWORD','admin2');
define('HOST','localhost');
define('DATABASE', 'abarrotes');

try{
    $conexion = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    }
catch (PDOException $e){
    exit("Error: ".$e->getMessage());
}



?>