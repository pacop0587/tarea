<?php

include('conexion.php');
session_start();

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $sucursal = $_POST['sucursal'];
    (int)$sucursal;
    

    $query = $conexion->prepare("INSERT INTO Usuario(User, Pass, Sucursal) VALUES (:username, :password_hash, :sucursal)");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
    $query->bindParam("sucursal", $sucursal, PDO::PARAM_INT);
    $result = $query->execute();

    header("location:../view/inicio.php");

}




?>