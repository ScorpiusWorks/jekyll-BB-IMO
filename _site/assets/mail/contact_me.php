<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['phone'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No info Provided!";
	return false;
   }

$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'marius.porcolean@gmail.com';
$email_subject = "Contact website: $name";
$email_body = "Ai primit un mesaj nou prin formularul de contact de pe website.\n"."Iata detaliile:\n\nNume:$name\nTelefon:$phone\nEmail:$email_address\nMesaj:\n$message";
$headers = "From: noreply@bb-imo.ro\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
