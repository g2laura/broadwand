<?php
  $to  =  'oscar.rojas@broadwand.com';

  // subject
  $subject = 'You have a new contact from Brodwand Website';

  $phone = '';

  if($_POST["phone"]) {
    $phone = 'Phone: '.$_POST["phone"];
  }

  // message
  $message = '
  <html>
  <head>
    <title>'.$_POST["name"].' wants to contact you</title>
  </head>
  <body>
    <p>'.$_POST["message"].'</p>
    <p>Contact information:</p>
    <p>Email: '.$_POST["email"].'</p>
    <p>'.$phone.'</p>
  </body>
  </html>
  ';

  // To send HTML mail, the Content-type header must be set
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  // Mail it
  mail($to, $subject, $message, $headers);

  session_start();
  $_SESSION['message'] = 'Contact email sent.';
  header('Location: index.php');
  exit;
?>
