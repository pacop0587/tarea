<?php

include('conexion.php');
session_start();

if(isset($_POST['Guardar'])){
    $producto = $_POST['productos'];
    $cantidad = $_POST['cantidad'];
    $usuario = $_POST['usuario'];

    $query = $conexion->prepare("INSERT INTO Existencia(Id_usuario, Id_producto, Cantidad) VALUES(:usuario, :productos, :cantidad)");
    $query->bindParam("usuario", $usuario, PDO::PARAM_INT);
    $query->bindParam("productos", $producto, PDO::PARAM_INT);
    $query->bindParam("cantidad", $cantidad, PDO::PARAM_INT);
    $result = $query->execute();

    header("Location:../view/index.php");

}


?>