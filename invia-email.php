<?php

if (isset($_POST["submit"]))
{
  $nome=trim(strip_tags($_POST["nome"]));
  $email=trim(strip_tags($_POST["email"]));
  $oggetto=trim(strip_tags($_POST["oggetto"]));
  $messaggio=trim(strip_tags($_POST["messaggio"]));

  $header = "Da $email" . "Nome: $nome";
  $subject = "$oggetto";
  $indirizzo = "moglia.simone96@gmail.com";
  



  if(mail($indirizzo, $subject, $messaggio, $header)) {
    echo "Email inviata correttamente";
  }
  else {
    echo "Errore durante l'invio";
  }
}

 ?>
