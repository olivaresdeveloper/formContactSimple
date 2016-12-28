<?php
$subject    = 'Asunto'; // Subject of your email
$to         = 'email@gmail.com'; //Your e-mail address
$headers    = 'MIME-Version: 1.0' . "\r\n" .
              'Content-type: text/html; charset=UTF-8' . "\r\n";
$message    = 'Name: ' . $_POST['nombre'] . ' <br/>' .
              'E-mail: ' . $_POST['correo'] . ' <br/>' .
              'Phone: ' . $_POST['telefono'] . ' <br/>' .
              'Message: ' . $_POST['mensaje'];

if (@mail($to, $subject, $message, $headers))
{
  echo 'sent';
}
else
{
  echo 'failed';
}
?>
