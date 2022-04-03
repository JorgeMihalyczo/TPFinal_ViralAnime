<?php 
// seguridad de sesiones de paginación
session_start();
error_reporting(0);
// ¿con cookies o sin cookies?
if(isset($_COOKIE["user"])){ 
    $varsesion = $_COOKIE["user"];
}else{
    $varsesion = $_SESSION['usuario'];
}
if($varsesion == null || $varsesion =''){
    header("location:index.php");
    die();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viral Anime - Home</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
            <li>
                <?php
                    if(isset($_COOKIE["user"])){ 
                        echo $_COOKIE["user"];
                    }else{
                        echo $_SESSION['usuario'];
                    }
                ?>
            </li>
        </ul>
    </nav>
    <h1>Bienvenido</h1>
</body>
</html>