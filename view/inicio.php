<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <h1>Abarrotes "Hola Mundo"</h1>
    <form method="post" action="../database/inicio_sesion.php" name="signin-form">
        <div class="form-element">
            <label>Usuario</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Contraseña</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">Iniciar Sesion</button>
        <button type="submit" name="register" value="register"><a href="registro.php">Registrase</a></button>
    </form>

</body>
</html>