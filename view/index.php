<?php
        include('../database/conexion.php');
        session_start();
        $query = $conexion->prepare("SELECT User,Sucursal, Cantidad, Nombre, Precio FROM Existencia INNER JOIN Usuario ON Existencia.Id_usuario = Usuario.Id INNER JOIN Productos ON Existencia.Id_producto = Productos.Id");
        $query->execute();

        $query2 = $conexion->prepare("SELECT * FROM Productos");
        $query2->execute();

        $query3 = $conexion->prepare("SELECT * FROM Usuario");
        $query3->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Inicio</title>
</head>
<body class="body3">
    <h1>Abarrotes "Hola Mundo"</h1>
    <h2>Agregar un producto nuevo</h2>
    <div class="sub-container">
    <div class="container">
    <form action="../database/registro_prod.php" method="POST" class="form2">
        <div class="form-element">
            <label for="">Producto</label>
            <select name="productos" id=""class="control">
                <?php  
                if($query2->rowCount()>=1){
                    while($fila3 = $query2->fetch()){
                        echo "<option value='"; echo $fila3['Id']."'>".$fila3['Nombre']."</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-element">
                <label for="">Cantidad</label>
                <input type="number" name="cantidad" class="control">
        </div>
        <div class="form-element">
                <label for="">Usuario </label>
                <select name="usuario" id="" class="control">
                <?php
                    if($query3->rowCount()>=1){
                        while($fila4 = $query3->fetch()){
                            echo "<option value='"; echo $fila4['Id']."'>".$fila4['User']."</option>";
                        }
                    }
                ?>
                </select>
        </div>
                <button type="submit" value="Guardar" name="Guardar">Guardar</button>      
    </form>
    </div>
        <div class="container">
        <div class="mostrar">
            <div class="form-element">    
                <?php
                    if($query->rowCount()>=1){
                        echo "                
                        <table>
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Sucursal</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Existencia</th>
                                </tr>
                            </thead>
                            <tbody>";

                            while($fila2 = $query->fetch()){
                                echo "
                                <tr>
                                    <td>".$fila2['User']."</td>
                                    <td>".$fila2['Sucursal']."</td>
                                    <td>".$fila2['Nombre']."</td>
                                    <td>".$fila2['Precio']."</td>
                                    <td>".$fila2['Cantidad']."</td>
                                </tr>";
                                }
                        }
                    ?>
                    </tbody> 
                </table>
            </div>
  
        </div>
        <div class="container">
            <div class="form-element">
                <button type="submit" name="cerrar" value="cerrar"><a href="../database/cerrar_sesion.php">Cerrar Sesion</a></button>
            </div>
        </div>
        </div>

        </div>


</body>
</html>