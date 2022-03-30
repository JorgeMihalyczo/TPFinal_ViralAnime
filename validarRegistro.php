<?php
/*  isset --> si esta seteado
    strlen --> longitud del string
    trim --> elimina espacios al comienzo y al final de cada campo
*/
include('db.php'); //--> para traer la variable conexion

// 1_ chequear si esta seteada la variable global 'registrarse
// 2_ chequear si todos los campos estan completos

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['nick']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contrasenia']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['personajeFav']) >= 1) {
        $nick = trim($_POST['nick']);
        $email = trim($_POST['email']);
        $contrasenia = trim($_POST['contrasenia']);
        $edad = trim($_POST['edad']);
        $personajeFav = trim($_POST['personajeFav']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO usuarios(email, contrasenia, nick,edad,personaje_favorito,fecha_reg) VALUES ('$email','$contrasenia','$nick', '$edad', '$personajeFav', '$fechareg' )";
        $resultado = mysqli_query($conexion,$consulta);

        if ($resultado) {
            ?> 
            <h3 class="ok">¡Te has inscripto correctamente!</h3>
            <p><a href="index.html">Iniciar Sesion</a></p>
            <?php
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    }   else {
            ?> 
            <h3 class="bad">¡Por favor completa todos los campos!</h3>
            <p><a href="registro.html">registrarse</a></p>
            <?php
    }
}

?>