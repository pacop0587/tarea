<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Inicio de sesion</title>
</head>
<body class="registro">
    <h1>Abarrotes "Hola Mundo"</h1>
    <h2>Registro</h2>
    <div class="container">
    <form method="post" action="../database/registro2.php" class="form2">
        <div class="form-element">
            <label>Usuario</label>
            <input type="text" name="username" class="control" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Contraseña</label>
            <input type="password" class="control" name="password" required />
        </div>
        <div class="form-element">
            <label class="label2">Sucursal</label>
            <input type=number class="control" name="sucursal" min="1" max="3">
        </div>

        <button type="submit" name="register" value="register">Guardar</button>
        <button type="submit" name="regresar" value="regresar"><a href="inicio.php">Regresar</a></button>
    </form>
    </div>
</body>
</html>