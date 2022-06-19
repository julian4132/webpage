<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../scrollbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../images/favicon.ico"/>
    <script src="admin.js"></script>
    <title>Panel de Administrador</title>
</head>
<body>

  <a href="../index.php" class="arrow">
    <i class="material-symbols-outlined" style="font-size: 60px;">
      arrow_back
    </i>
  </a>
  <div class="box">
    <form>
        <div class="container">
            <h1>Administrador</h1>
            <p>Control de base de datos</p>
            <hr>

            <table>
                <h2>Usuarios</h2>
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Fecha de creación</th>
                        <th>Cantidad de ingresos</th>
                        <th>Última conexión</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "db_admin.php";
                    ?>
                </tbody>

              </table>

        </div>
      

      </form>
  </div>

</body>
</html>
