<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
  $receiving_email_address = 'greatnesskossidonald@gmail.com';

  $name = $_POST['nom'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailheader = "nom: " . $name .
  "\r\n Sujet: " . $subject .
  "\r\n Email: " . $email .
  "\r\n Message: " . $message . "\r\n";

  if (mail($receiving_email_address, $email, $message, $mailheader)){
    header('location: thank.php');
  } else {
    echo "Failed to send email.";
}



}
?> 