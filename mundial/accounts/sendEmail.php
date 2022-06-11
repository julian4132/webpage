<?php

$to      = $userEmail;

$subject = 'Registración | Verificación'; 
$message = '
 
¡Muchas gracias por registrarte!

Tu cuenta fue creada con éxito. Solo tenés que activarla.
Para ello, tenés que hacer click en el siguiente link.

Link de activación de la cuenta:
 
https://agssoft.com.ar/NUEVE/accounts/check.php?user='.$userEmail.'&hash='.$hash.'
 
';
                     
$headers = 'From:noreply@yourwebsite.com' . "\r\n";
mail($to, $subject, $message, $headers);


?>