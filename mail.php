<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];


if ($name === ''){
echo "Il nome non può essere vuoto.";
die();
}
if ($email === ''){
echo "L'email non può essere vuota.";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Formato email non valido.";
die();
}
}
if ($subject === ''){
echo "L'oggetto non può essere vuoto.";
die();
}
if ($message === ''){
echo "Il messaggio non può essere vuoto.";
die();
}


$content="From: $name \n Email: $email \n Message: $message";
$recipient = "moglia.simone96@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Errore!");
echo "Messaggio Inviato!";
?>
