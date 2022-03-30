<?php
include('db.php'); //--> para traer la variable conexion

$email = $_POST['email'];
$contrasenia = $_POST['contrasenia'];
session_start();
$_SESSION['usuario'] = $email;


$consulta = "SELECT*FROM usuarios where email='$email' and contrasenia='$contrasenia'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:home.php"); 
}else{
    include("index.html");
    ?>
    <p>El usuario y contraseña ingresados no son válidos</p>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>