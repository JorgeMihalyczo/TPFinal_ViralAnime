<?php
include('db.php'); //--> para traer la variable conexion

//Valida campos rellenados
if (strlen($_POST['email']) >= 1 && strlen($_POST['contrasenia']) >= 1){
    $email = $_POST['email'];
    $contrasenia = $_POST['contrasenia'];
    if(isset($_POST['recordado']))
    $recordado = true;

    session_start();

    $_SESSION['usuario'] = $email;

    // Valida usuario y contrasenia de la base de datos
    $consulta = "SELECT*FROM usuarios where email='$email' and contrasenia='$contrasenia'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        if (isset($recordado)){ // login correcto & casilla marcada -> setea cookie
            setcookie("user", $email, time() + (86400 * 30)); 
        }
        header("location:home.php");
    }else{
        include("index.php");
        ?>
        <p class="errorLogin">El usuario y contraseña ingresados no son válidos</p>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
}else{
    include("index.php");
    ?>
    <p class="errorLogin">Debes rellenar todos los campos para el Login.</p>
    <?php
}
?>