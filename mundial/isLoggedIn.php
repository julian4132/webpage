<?php
session_start();
if(isset($_SESSION['user_name'])) {
    echo true;
} else echo false;
?>
