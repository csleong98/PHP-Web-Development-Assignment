<?php 

date_default_timezone_set('Etc/UTC');
require 'PHPMailer-master/PHPMailerAutoload.php';

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
$mail -> subject = 'congratulation!';

//emil body
$mail ->msgHTML("<h1>Registration Successful</h1>");

if(!$mail->send()) {
    echo "<script>alert('Mailer Error: ". $mail->ErrorInfo."');";
    die("window.history.go(-1);</script>");
}
else {
    echo "<script>alert('you can check your email now');</script>";
}
?>