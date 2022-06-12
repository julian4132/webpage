<?php

include_once "connect.php";

//echo "Saludito";

//echo $_GET['user'];


if(isset($_GET['user']) && !empty($_GET['user']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $user = mysqli_real_escape_string($conn, $_GET['user']);
    $hash = mysqli_real_escape_string($conn, $_GET['hash']);
                 
//usuario, Activo, hash
//  AND Activo='0'            

    $sql = $conn->query("SELECT correo, activo, verifhash FROM `usuarios` WHERE correo='".$user."' AND activo='0' AND verifhash='".$hash."' ") or die(mysqli_error());

    //echo "Todo bien bro2";

    if($row_cnt = $sql->num_rows > 0){
        // Activar
        $sql = $conn->query("UPDATE `usuarios` SET activo='1' WHERE correo='".$user."' AND activo='0' AND verifhash='".$hash."' ") or die(mysqli_error());
        echo '<div class="statusmsg">Tu cuenta está activada, ya puedes iniciar sesión</div>';
        session_start();
        $_SESSION['user_name'] = $user;
        header('Location: ../index.php');
    }else{
        // Error
        //echo '<div class="statusmsg">La url es inválida o ya has registrado tu cuenta</div>';
        header('Location: ../error.html');
    }
                 
} else{
    // Invalid approach
    //echo '<div class="statusmsg">Error. Por favor, emplear el enlace que fue enviado por correo electrónico.</div>';
    header('Location: ../error.html');
}



//$sql->free();


$conn->close();


?>
