<!DOCTYPE html>
<?php
session_start();
include_once "../accounts/connect.php";
if(!isset($_GET['email'])) die();
$mail = $_GET['email'];
$sql = $conn->query("SELECT * FROM usuarios WHERE correo='".$mail."'");
if($sql->num_rows > 0) {
    $row = $sql->fetch_array(MYSQLI_ASSOC);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../scrollbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../images/favicon.ico"/>
    <script src="../jquery.js"></script>
    <title>Banear usuario</title>
</head>
<body>

  <a href="./admin.php" class="arrow">
    <i class="material-symbols-outlined" style="font-size: 60px;">
      arrow_back
    </i>
  </a>
  <div class="box">
    <form>
        <div class="container">
            <?php 
            if($row['baneado']) echo "<h1>Desbanear Usuario</h1>";
            else echo "<h1>Banear Usuario</h1>";
            ?>
            
            <p>Completa el formulario para realizar el bloqueo</p>
            <hr>

            <h2>Datos del usuario</h2>
            <div class="flex">
                <div>
                    <h4>Email</h4>
                    <p id="correo" name="correo"><?php echo $row['correo']; ?></p>
                    <h4>Fecha de creación</h4>
                    <p><?php echo $row['cuando'];?></p>

                </div>
                <div>
                    <h4>Cantidad de ingresos</h4>
                    <p><?php echo $row['logins'];?></p>
                    <h4>Última conexión</h4>
                    <p><?php echo $row['lastlogin'];?></p>
                </div>
            </div>
            <h2>Razón del bloqueo/desbloqueo</h2>
                <textarea id="razon" name="razon"></textarea>
                
                <div class="flex">
                    <button id="submit" type="submit" style="width:70%">Enviar</button>
                </div>

        </div>
      </form>
    <script src="admin.js"></script>
  </div>

</body>
</html>
