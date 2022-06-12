<?php

$to      = $userEmail;

$subject = 'Registración | Verificación'; 
$message = '
 
El cambio del perfil se ha efectuado exitosamente.

Para que puedas ver los cambios, es necesario que hagas click en este link.

Link de cambio de perfil:
 
https://agssoft.ar/NUEVE/accounts/checkEdit.php?user='.$userEmail.'&hash='.$hash.'
 
';
                     
$headers = 'From:noreply@yourwebsite.com' . "\r\n";
mail($to, $subject, $message, $headers);


?>