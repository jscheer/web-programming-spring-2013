<?php
print_r($_POST['customername']);
$to = 'joseph_scheer@comcast.net';
$subject = "Conatct Form: I need a gardner";
$message = $_POST['customername'] . ' needs a gardner';
$headers = 'From: joseph_scheer@comcast.net' . "\r\n" .
	'Reply-To joseph_scheer@comcast.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>