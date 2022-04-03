<?php
    if(isset($_COOKIE["user"])){
        header("location:home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viral Anime - login</title>
</head>
<body>
    <h1>Log In</h1>
    <form action="validarLogin.php" method="post">
        <p>E-mail <input type="email" name="email" id="email" placeholder="Ingresa tu correo electrónico"></p>
        <p>Contraseña <input type="password" name="contrasenia" id="contrasenia" placeholder="Ingresa tu contraseña"></p> 
        <p>Recordar Login <input type="checkbox" name="recordado" id="recordado"></p>
        <input type="submit" value="Ingresar">
        <a href="registro.html">Registrarse</a>
    </form>
</body>
</html>