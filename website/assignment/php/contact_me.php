<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
   $name = strip_tags(htmlspecialchars($_POST['name']));
   $email_address = strip_tags(htmlspecialchars($_POST['email']));
   $phone = strip_tags(htmlspecialchars($_POST['phone']));
   $message = strip_tags(htmlspecialchars($_POST['message']));

   date_default_timezone_set('Etc/UTC');
   require './PHPMailer-master/PHPMailerAutoload.php';
   
   $mail = new PHPMailer; //create object of PHPMailer
   $mail -> isSMTP(); //email protocol
   $mail -> Host = 'smtp.gmail.com'; //hostname gmail : server address
   $mail -> Port = 587; //port number
   $mail -> SMTPSecure='tls'; //secure layer
   $mail -> SMTPAuth = TRUE;
   $mail -> FromName = "May Contact Book Store"; //give
   
   $mail -> Username = "macintoshleong@gmail.com"; //your gmail username and password
   
   $file = fopen("email.txt","r"); //read file for password.
   $newpass = fgets($file);
   fclose($file);
   
   $mail -> Password = "$newpass";
   
   //email receiver details
   $mail -> addaddress($email,$username); //receive person
   
//email subject
$mail -> subject = 'Request to change data for user!';

//emil body
$mail -> $message;

if(!$mail->send()) {
    echo "<script>alert('Mailer Error: ". $mail->ErrorInfo."');";
    die("window.history.go(-1);</script>");
}
else {
    echo "<script>alert('Message has been sent');</script>";
}
?>