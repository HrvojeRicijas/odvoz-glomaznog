<?php

  $reciever= 'seric.usluge@gmail.com';
  $sender = $_POST['name'];
  $senderMail = isset($_POST['email']) ? "Email: " . $_POST['email']."\n" : "\n";
  $senderPhone = isset($_POST['phone']) ? "Telefon: " . $_POST['phone']."\n" : "\n";
  $text = isset($_POST['message']) ? "Poruka:\n" . $_POST['message'] : "\n";
  
  mail($reciever,"UPIT - ". $sender, $sender."\n".$senderMail.$senderPhone.$text);
 
  header ("location: ../index.php");
?>
