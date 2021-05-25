<?php
echo "<script>console.log('Console Works')</script>";
if (isset($_POST['Name']) && isset($_POST['Email'])&& isset($_POST['Comment']) ) {
    
  $to      = 'joel.knechtli@griffithuni.edu.au';
  $subject = 'Contact Form';
  $message = 'Hello World';
  $message = "<h3>Name: " . $_POST['Name'] . "<br>Email: " . $_POST['Email'] . "<br>Occupation: " . $_POST['Occupation'] . "</h3><hr><br>" . $_POST['Name'] . " wrote:<br><h3>" . $_POST['Comment'] . "</h3>";
  $headers = 'From: contactusform@exceptionalstudyaustralia.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $message, 'Content-Type: text/html')) {
    echo "<script>console.log('Email Sent')</script>";
  } else {
    echo '<script>console.log("Issue With sending email.")</script>';
  }
  
  header("Location: http://www.exceptionalrealestate.com.au/#form");
  
} else {
    echo '<script>console.log("Issue with form information requirements")</script>';
}
