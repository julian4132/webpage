<?php
include_once "connect.php";

session_start();

if($_POST['psw']==$_POST['psw-repeat']){

    $userEmail=mysqli_real_escape_string($conn, $_POST['email']);
    $userOldPassword=mysqli_real_escape_string($conn, $_POST['oldpsw']);

    if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(array('success' => false, 'error' => 'invalid mail'));
    } else {

        $mail_check = $conn->query("SELECT * FROM `usuarios` WHERE correo='".$userEmail."' OR nuevocorreo='".$userEmail."' ");
        if($mail_check->num_rows > 0) {
            echo json_encode(array('success' => false, 'error' => 'mail already used'));
            $conn->close();
            die();
        }


        $sql = $conn->query("SELECT * FROM `usuarios` WHERE correo='".$_SESSION['user_name']."' AND activo='1'");

        if($row_cnt = $sql->num_rows > 0){

            $row= $sql->fetch_array(MYSQLI_ASSOC);
            $passhash = $row['passhash'];

            if(password_verify($userOldPassword, $passhash)){
                //$_SESSION['user_name'] = $row['correo'];
                $userPassword=password_hash($_POST['psw'], PASSWORD_DEFAULT);

                $hash = md5( rand(0,1000) );
                //$sql = "INSERT INTO usuarios (correo, passhash, activo, verifhash) VALUES ('".$userEmail."', '".$userPassword."', 0, '".$hash."')";
            
                $sql = $conn->query("UPDATE `usuarios` SET nuevocorreo='".$userEmail."' WHERE id='".$row['id']."' AND activo='1' ") or die(mysqli_error());
                $sql = $conn->query("UPDATE `usuarios` SET nuevopasshash='".$userPassword."' WHERE id='".$row['id']."' AND activo='1' ") or die(mysqli_error());
                $sql = $conn->query("UPDATE `usuarios` SET verifhash='".$hash."' WHERE id='".$row['id']."' AND activo='1' ") or die(mysqli_error());

                include "sendEmailEdit.php";

                echo json_encode(array('success' => true));
            } else {
                echo json_encode(array('success' => false, 'error' => 'incorrect password'));
            }
        
        } else echo json_encode(array('success' => false, 'error' => 'invalid user'));

    } 
} else echo json_encode(array('success' => false, 'error' => 'no password match'));

$conn->close();

