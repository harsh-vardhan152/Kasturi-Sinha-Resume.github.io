<?php 

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_form = 'kasturi mam resume ';
  $email_subject = '$subject';
  $email_body = "Name: $name.\n".
                "Email: $email.\n".
                "Message: $message.\n";
  $to = "harsh.vardhancs18@gmail.com";
  $headers = "From: $email_form \r\n";
  $headers .="Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  headers("location: index.html");
?>
