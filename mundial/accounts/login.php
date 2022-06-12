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
        $_SESSION['user_name'] = $row['correo'];
        echo json_encode(array('success' => true));
    } else {
        //incorrect password
        echo json_encode(array('success' => false, 'error' => 1));
    }
    
} else echo json_encode(array('success' => false, 'error' => 2));
//invalid user



$conn->close();

