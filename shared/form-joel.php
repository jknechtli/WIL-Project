<?php
// if (isset($_POST['submit'])) {
//     $to = "testerman@mailinator.com"; // this is your Email address
//     $from = "contactusform@exceptionalstudyaustralia.com"; // this is the sender's Email address
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
//     $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     echo "
//     <script>
//     console.log('";
//     try {
//         //code...
//         $results = mail($to, $subject, $message);
//         if ($results) {
//             echo "Message1 accepted with: " . htmlspecialchars($to) . htmlspecialchars($subject) . htmlspecialchars($message) . htmlspecialchars($headers) . "  \n\n";
//         } else {
//             echo "Error: Message not accepted";
//         }
//     } catch (\Throwable $th) {
//         echo "error";
//     }
//     try {
//         //code...
//         $results = mail($from, $subject2, $message2);
//         if ($results) {
//             # code...
//             // sends a copy of the message to the sender
//             echo "Message2 accepted with: " . htmlspecialchars($from) . htmlspecialchars($subject2) . htmlspecialchars($message2) . htmlspecialchars($headers2) . "  \n\n";
//         } else {
//             echo "Error: Message not accepted";
//         }
//     } catch (\Throwable $th) {
//         //throw $th;
//         echo "error";
//     }
//     echo "');
//     </script>";
//     echo "
//     <script>
//     console.log('";
//     echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//     echo "');
//     </script>";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
// }

      $to      = 'recipient@theirdomain.com';
      $subject = 'Email Test';
      $message = 'Hello World';
      $headers = 'From: sender@yourdomain.com' . "\r\n" .
          'CC: info@theirdomain.com';
          'Reply-To: info@yourdomain.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

          
      mail($to, $subject, $message, $headers);
      echo "Message has been sent.";
      
?>

<!DOCTYPE html>

<!-- <head>
    <title>Form submission</title>
</head> -->

<!-- <body> -->
<form action="" method="post">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    Email: <input type="text" name="email"><br>
    Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
    <input type="submit" name="submit" value="Submit">
</form>
<!-- </body> 

<php
// if (isset($_POST['submit'])) {
//     $to = "testerman@mailinator.com"; // this is your Email address
//     $from = "contactusform@exceptionalstudyaustralia.com"; // this is the sender's Email address
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
//     $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     echo "
//     <script>
//     console.log('";
//     try {
//         //code...
//         $results = mail($to, $subject, $message);
//         if ($results) {
//             echo "Message1 accepted with: " . htmlspecialchars($to) . htmlspecialchars($subject) . htmlspecialchars($message) . htmlspecialchars($headers) . "  \n\n";
//         } else {
//             echo "Error: Message not accepted";
//         }
//     } catch (\Throwable $th) {
//         echo "error";
//     }
//     try {
//         //code...
//         $results = mail($from, $subject2, $message2);
//         if ($results) {
//             # code...
//             // sends a copy of the message to the sender
//             echo "Message2 accepted with: " . htmlspecialchars($from) . htmlspecialchars($subject2) . htmlspecialchars($message2) . htmlspecialchars($headers2) . "  \n\n";
//         } else {
//             echo "Error: Message not accepted";
//         }
//     } catch (\Throwable $th) {
//         //throw $th;
//         echo "error";
//     }
//     echo "');
//     </script>";
//     echo "
//     <script>
//     console.log('";
//     echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//     echo "');
//     </script>";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
// }

//     $to = "testerman@mailinator.com"; // this is your Email address
//     $from = "contactusform@exceptionalstudyaustralia.com"; // this is the sender's Email address


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$occupation = $_POST['occupation'];
$email = $_POST['email'];
echo" <script> console.log(\" ".$occupation.", ".$first_name.", ".$last_name.", ".$email."\") </script>";
$subject = "Form submission";
$message = $first_name . " " . $last_name . " is a " . $occupation . " who wrote the following:" . "\n\n" . $_POST['message'] . "\n\n" . "They can be contacted at: " . $email;


      $to      = 'testerman@mailinator.com';
      $subject = 'Email Test';
      $message = 'Hello World';
      $headers = 'From: contactusform@exceptionalstudyaustralia.com' . "\r\n" .
          'CC: info@theirdomain.com';
          'Reply-To: info@yourdomain.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

      if (mail($to, $subject, $message, $headers))
      {
          echo "Message has been sent.";
      } else {
        echo "Message has not been sent.";
      }
      
?>

<!DOCTYPE html>

<-- <head>
    <title>Form submission</title>
</head> -->

<!-- <body> >
<form action="" method="post">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    Email: <input type="text" name="email"><br>
    Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
    <input type="submit" name="submit" value="Submit">
</form>
<-- </body> ->

// if (isset($_POST['submit'])) {
//     $to = "testerman@mailinator.com"; // this is your Email address
//     $from = "contactusform@exceptionalstudyaustralia.com"; // this is the sender's Email address
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
//     $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     echo "
//     <script>
//     console.log('";
//     try {
//         //code...
//         $results = mail($to, $subject, $message);
//         if ($results) {
//             echo "Message1 accepted with: " . htmlspecialchars($to) . htmlspecialchars($subject) . htmlspecialchars($message) . htmlspecialchars($headers) . "  \n\n";
//         } else {
//             echo "Error: Message not accepted";
//         }
//     } catch (\Throwable $th) {
//         echo "error";
//     }
//     try {
//         //code...
//         $results = mail($from, $subject2, $message2);
//         if ($results) {
//             # code...
//             // sends a copy of the message to the sender
//             echo "Message2 accepted with: " . htmlspecialchars($from) . htmlspecialchars($subject2) . htmlspecialchars($message2) . htmlspecialchars($headers2) . "  \n\n";
//         } else {
//             echo "Error: Message not accepted";
//         }
//     } catch (\Throwable $th) {
//         //throw $th;
//         echo "error";
//     }
//     echo "');
//     </script>";
//     echo "
//     <script>
//     console.log('";
//     echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//     echo "');
//     </script>";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
// }

//     $to = "testerman@mailinator.com"; // this is your Email address
//     $from = "contactusform@exceptionalstudyaustralia.com"; // this is the sender's Email address


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$occupation = $_POST['occupation'];
$email = $_POST['email'];
echo" <script> console.log(\" ".$occupation.", ".$first_name.", ".$last_name.", ".$email."\") </script>";
$subject = "Form submission";
$message = $first_name . " " . $last_name . " is a " . $occupation . " who wrote the following:" . "\n\n" . $_POST['message'] . "\n\n" . "They can be contacted at: " . $email;


      $to      = 'testerman@mailinator.com';
      $subject = 'Email Test';
      $message = 'Hello World';
      $headers = 'From: contactusform@exceptionalstudyaustralia.com' . "\r\n" .
          'CC: info@theirdomain.com';
          'Reply-To: info@yourdomain.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

      if (mail($to, $subject, $message, $headers))
      {
          echo "Message has been sent.";
      } else {
        echo "Message has not been sent.";
      }
      
?>

<!DOCTYPE html>

<!-- <head>
    <title>Form submission</title>
</head> -->

<!-- <body> ->
<form action="" method="post">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    Email: <input type="text" name="email"><br>
    Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
    <input type="submit" name="submit" value="Submit">
</form>
<-- </body> -->