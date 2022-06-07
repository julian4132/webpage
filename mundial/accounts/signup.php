<?php
include "connect.php";

$userEmail=mysqli_real_escape_string($conn, $_POST['email']);

if($_POST['psw']==$_POST['psw-repeat']){
    $userPassword=password_hash($_POST['psw'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (correo, passhash) VALUES ('".$userEmail."', '".$userPassword."')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
    echo "<script>alert('Las contraseñas no coinciden. Vuelva a intentar.')</script>";
}



$conn->close();

