<?php
include_once "../accounts/connect.php";
if(isset($_POST['email'], $_POST['razon'])) {
    $mail = $_POST['email'];
    $razon = $_POST['razon'];
    $to = $mail;
    $subjectBan = 'Ban en Qatar 2022';
    $subjectUnBan = 'Unban en Qatar 2022';
    $messageUnBan = 'Fuiste desbaenado de la página por la siguiente razon: '.$razon;
    $messageBan = 'Fuiste baenado de la página por la siguiente razon: '.$razon;
    $headers = 'From:noreply@qatar2022.com' . "\r\n";

    $sql = $conn->query("SELECT * FROM usuarios WHERE correo='".$mail."'");
    $row = $sql->fetch_array(MYSQLI_ASSOC);
    if($row['baneado'] == 0) {
        //banear
        $sql->close();
        $ban = $conn->query("UPDATE usuarios SET baneado=1 WHERE correo='".$mail."'");
        mail($to, $subjectBan, $messageBan, $headers);
        echo json_encode(array('success' => true, 'msg' => 'Usuario baneado y notificado.'));
    } else {
        //desbanear
        $sql->close();
        $ban = $conn->query("UPDATE usuarios SET baneado=0 WHERE correo='".$mail."'");
        mail($to, $subjectUnBan, $messageUnBan, $headers);
        echo json_encode(array('success' => true, 'msg' => 'Usuario desbaneado y notificado.'));
    }
} else echo json_encode(array('success' => false, 'msg' => 'post no recibido')) 

?>
