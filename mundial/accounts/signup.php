<?php
include_once "connect.php";

session_start();

$userEmail=mysqli_real_escape_string($conn, $_POST['email']);
$mail_check = $conn->query("SELECT * FROM `usuarios` WHERE correo='".$userEmail."'");
if($mail_check->num_rows > 0) {
    echo json_encode(array('success' => false, 'error' => 'mail already used'));
    $conn->close();
    die();
}

if($_POST['psw']==$_POST['psw-repeat']){
    $userPassword=password_hash($_POST['psw'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (correo, passhash) VALUES ('".$userEmail."', '".$userPassword."')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['user_name'] = $userEmail;
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false, 'error' => $sql.$conn->error));
    }

} else {
    echo json_encode(array('success' => false, 'error' => 'different passwords'));
}



$conn->close();

