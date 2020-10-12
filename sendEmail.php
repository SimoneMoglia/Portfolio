<?php

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $body = $_POST['body'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();

  //SMTP settings
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "moglia.simone96@gmail.com";
  $mail->Password = "nonlei96";
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  //email settings
  $mail->isHTML(true);
  $mail->setFrom($email,$name);
  $mail->addAddress("moglia.simone96@gmail.com");
  $mail->Subject = ("$email (subject)");
  $mail->Body = $body;

  if($mail->send()){;
    $status = "success";
    $response = "L'email è stata inviata!";
  }
  else {
    $status = "failed";
    $response = "Qualcosa è andato storto: <br>" . $mail->ErrorInfo;
  }
  exit (json_encode(array("status" => $status, "response" => $response)));
} 

 ?>
