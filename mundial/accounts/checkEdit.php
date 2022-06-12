<?php

include_once "connect.php";
session_start();
//echo "Saludito";

//echo $_GET['user'];


if(isset($_GET['user']) && !empty($_GET['user']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $user = mysqli_real_escape_string($conn, $_GET['user']);
    $hash = mysqli_real_escape_string($conn, $_GET['hash']);
                 
//usuario, Activo, hash
//  AND Activo='0'            

    $sql = $conn->query("SELECT nuevoCorreo, nuevopasshash, activo, verifhash FROM `usuarios` WHERE nuevoCorreo='".$user."' AND activo='1' AND verifhash='".$hash."' ") or die(mysqli_error());

    //echo "Todo bien bro2";

    if($row_cnt = $sql->num_rows > 0){
        
        $row= $sql->fetch_array(MYSQLI_ASSOC);
        $userPassword = $row['nuevopasshash'];
        // Cambiar
        $sql = $conn->query("UPDATE `usuarios` SET correo='".$user."' WHERE nuevoCorreo='".$user."' AND activo='1' AND verifhash='".$hash."' ") or die(mysqli_error());
        $sql = $conn->query("UPDATE `usuarios` SET passhash='".$userPassword."' WHERE nuevoCorreo='".$user."' AND activo='1' AND verifhash='".$hash."' ") or die(mysqli_error());
        //echo '<div class="statusmsg">Tus datos ya fueron cambiados</div>';
        $_SESSION['user_name'] = $user;
        header('Location: ./profile.php');
    }else{
        // Error
        //echo '<div class="statusmsg">La url es inválida</div>';
        header('Location: ../error2.html');
    }
                 
} else{
    // Invalid approach
    //echo '<div class="statusmsg">Error. Por favor, emplear el enlace que fue enviado por correo electrónico.</div>';
    header('Location: ../error2.html');
}



//$sql->free();


$conn->close();


?>