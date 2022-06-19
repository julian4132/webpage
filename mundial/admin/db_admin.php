<?php
session_start();
include_once "../accounts/connect.php";
//$_SESSION['user_name'] == 'admin@admin.com'
if ($_SESSION['user_name'] == 'admin@admin.com' || $_SESSION['user_name'] == 'joaquinvergara070@gmail.com') {
    $sql = $conn->query("SELECT * FROM usuarios");
    $users_count = $sql->num_rows;
    while($row = $sql->fetch_array(MYSQLI_ASSOC)) {
        // el mail esta ahi para poder banear a ese usuario en particular
        // no se me ocurrio otra forma para poder hacer esto con js 
        // es un panel de administrador, la seguridad no es esencial
        $str_banned = "<td><a href='./ban.php?email=".$row['correo']."'>Desbloquear</a></td>";
        $str_unbanned = "<td><a href='./ban.php?email=".$row['correo']."'>Banear</a></td>";
        echo "<tr>";
        echo "<td>".$row['correo']."</td>";
        echo "<td>".$row['cuando']."</td>";
        echo "<td>".$row['logins']."</td>";
        echo "<td>".$row['lastlogin']."</td>";
        if($row['baneado']) echo $str_banned;
        else echo $str_unbanned;
        echo "</tr>";

    }

}


?>
