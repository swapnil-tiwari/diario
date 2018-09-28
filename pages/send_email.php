<?php
require("../PHPMailer_5.2.0/PHPMailer_5.2.0/class.phpmailer.php");
require("../PHPMailer_5.2.0/PHPMailer_5.2.0/class.smtp.php");
require("db_connect.php");
session_start();
$email=$_SESSION['forgotpass_email'];
$con=mysqli_connect($servername,$username,$password,$dbname);
$query=mysqli_query($con,"SELECT * FROM registration WHERE (email='$email')");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{
    while($row=mysqli_fetch_assoc($query))
    {
        $dbpassword=$row['pass'];
    }
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
    $mail->Subject = "Diario Password";
    $mail->Body='<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">

    </head>
  <body>
    <h1 style="font-family: "Montez", cursive;">Diario..</h1><br>
    <h2>Your Diario passsword is</h2><br><h3><b>Password -'.$dbpassword.'</b></h3></body></html>';
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

}
else {

    header("location:./forgot_password.php?error=1");
}

?>
