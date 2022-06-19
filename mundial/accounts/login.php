<?php
include_once "connect.php";

session_start();

$userEmail=mysqli_real_escape_string($conn, $_POST['email']);
$userPassword=mysqli_real_escape_string($conn, $_POST['psw']);

$sql = $conn->query("SELECT * FROM `usuarios` WHERE correo='".$userEmail."' AND activo='1'");

if($row_cnt = $sql->num_rows > 0){


    $row= $sql->fetch_array(MYSQLI_ASSOC);
    $passhash = $row['passhash'];

    if(password_verify($userPassword, $passhash)){
        //login was successful
        if(!$row['baneado']) {
            $time = time();
            $date = date('Y-m-d H:i:s', $time);

            $_SESSION['user_name'] = $row['correo'];
            $logins = $row['logins'];
            $logins += 1;

            $sql->close();
            $update_logins = $conn->query("UPDATE usuarios SET logins=".$logins.", lastlogin='".$date."' WHERE id='".$row['id']."' ");
            echo json_encode(array('success' => true));
        } else echo json_encode(array('success' => false, 'error' => 3));
    } else {
        //incorrect password
        echo json_encode(array('success' => false, 'error' => 1));
    }
    
} else echo json_encode(array('success' => false, 'error' => 2));
//invalid user



$conn->close();

