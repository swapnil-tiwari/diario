<?php
require("../PHPMailer_5.2.0/PHPMailer_5.2.0/class.phpmailer.php");
require("../PHPMailer_5.2.0/PHPMailer_5.2.0/class.smtp.php");
session_start();

$email=$_SESSION['forgotpass_email'];

$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug=0;
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Port= 465 ;
$mail->SMTPSecure='ssl';
$mail->Username = "codenova486@gmail.com";  // SMTP username
$mail->Password = "nova_rise"; // SMTP password
$mail->From = "codenova486@gmail.com";
$mail->FromName = "Diario";
$mail->AddAddress($email);                  // name is optional
$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML
$mail->Subject = "Password Reset Link";
$mail->Body='<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<style>
background-color: #008CBA; /* Green */
   border: none;
   color: white;
   padding: 15px 32px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
</style><body>To reset your password of Diario, click on this link<br><a href="http://www.diario.epizy.com/pages/forgotpassword.php"><button type="button">Reset Password</button></a></body></html>';
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}else{
  header("location:./forgot_password.php");

	echo "message has been sent";
}
?>
