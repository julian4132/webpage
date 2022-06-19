<?php
include_once "connect.php";

//session_start();

$userEmail=mysqli_real_escape_string($conn, $_POST['email']);

if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array('success' => false, 'error' => 'invalid mail'));
} else {

    $mail_check = $conn->query("SELECT * FROM `usuarios` WHERE correo='".$userEmail."' OR nuevocorreo='".$userEmail."' ");
    if($mail_check->num_rows > 0) {
        echo json_encode(array('success' => false, 'error' => 'mail already used'));
        $conn->close();
        die();
    }

    if($_POST['psw']==$_POST['psw-repeat']){
        $userPassword=password_hash($_POST['psw'], PASSWORD_DEFAULT);

        $hash = md5( rand(0,1000) );
        $time = time();
        $date = date('Y-m-d H:i:s', $time);
        $sql = "INSERT INTO usuarios (correo, passhash, activo, baneado, verifhash, logins, lastlogin) VALUES ('".$userEmail."', '".$userPassword."', 0, 0, '".$hash."', 1, '".$date."')";

        include "sendEmail.php";

        if ($conn->query($sql) === TRUE) {
            //$_SESSION['user_name'] = $userEmail;
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => false, 'error' => $sql.$conn->error));
        }

    } else {
        echo json_encode(array('success' => false, 'error' => 'different passwords'));
    }

}


$conn->close();

