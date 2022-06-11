<!DOCTYPE html>
<?php
 
include "connect.php";
session_start();
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="../jquery.js"></script>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../scrollbar.css">
</head>
<body>
    <div class="box">
        <form>
            <div class="container">
            <h1>Mi usuario</h1>
            <p>Estos son tus datos personales</p>
            <hr>            
            
            <label for="email"><b>Email</b></label>
            <p><?php echo $_SESSION['user_name'];?></p>

            <hr>
        
            <h3>¿Querés cambiar tus datos personales?</h3>
            <p><a href="#">Editar mi perfil</a>.</p>

            <button type="submit" id="submit" class="registerbtn">Cerrar sesión</button>
            </div>
        </form>
        <script src="signup.js"></script>
    </div>
    
    
</body>
</html>