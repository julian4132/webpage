<?php

$to      = $userEmail;

$subject = 'Registro | Verificación'; 
$message = '
 
¡Muchas gracias por registrarte!

Tu cuenta fue creada con éxito. Solo tenés que activarla.
Para ello, tenés que hacer click en el siguiente link.

Link de activación de la cuenta:
 
https://agssoft.ar/NUEVE/accounts/check.php?user='.$userEmail.'&hash='.$hash.'
 
';
                     
$headers = 'From:noreply@qatar2022.com' . "\r\n";
mail($to, $subject, $message, $headers);


?>
