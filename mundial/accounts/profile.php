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
    <link rel="shortcut icon" href="../favicon.ico"/>
    <title>Mi Cuenta</title>
    <script src="../jquery.js"></script>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../scrollbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../images/favicon.ico"/>
</head>
<body>
    <a href="../index.php" class="arrow">
        <i class="material-symbols-outlined" style="font-size: 60px;">
          arrow_back
        </i>
      </a>
    <div class="box">
        <form action="logout.php" method="get">
            <div class="container">
            <h1>Mi usuario</h1>
            <p>Estos son tus datos personales</p>
            <hr>            
            
            <label for="email"><b>Email</b></label>
            <p><?php echo $_SESSION['user_name'];?></p>
            <?php
            if($_SESSION['user_name'] == 'admin@admin.com' || $_SESSION['user_name'] == 'joaquinvergara070@gmail.com') {
                echo "<hr>";
                echo "<a href='../admin/admin.php'>Panel de administrador</a>";
            }

            ?>

            <hr>
            <button type="submit" id="submit" class="registerbtn">Cerrar sesión</button>

            <p style="text-align: center">¿Querés cambiar estos datos? <a href="editProfile.html">Editar mi perfil</a> .</p> 

            </div>
        </form>
    </div>
    
    
</body>
</html>
