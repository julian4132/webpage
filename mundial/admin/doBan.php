<?php
include_once "../accounts/connect.php";
if(isset($_POST['email'], $_POST['razon'])) {
    $mail = $_POST['correo'];
    $razon = $_POST['razon'];
} else echo "error";

?>
