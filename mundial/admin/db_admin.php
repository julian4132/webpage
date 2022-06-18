<?php
session_start();
include_once "../accounts/connect.php";
//$_SESSION['user_name'] == 'admin@admin.com'
if (1) {
    $sql = $conn->query("SELECT * FROM usuarios");
    $users_count = $sql->num_rows;
    while($row = $sql->fetch_array(MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>".$row['correo']."</td>";
        echo "<td>".$row['cuando']."</td>";
        echo "<td>".$row['logins']."</td>";
        echo "<td>".$row['lastlogin']."</td>";
        echo "<td><button>Bloquear</button></td>";
        echo "</tr>";

    }

}


?>
