<?php
session_start();
$email=$_POST['email'];
$_SESSION['forgotpass_email']=$email;
$_SESSION['sendlink_check']=TRUE;
header("location:send_email.php");
 ?>
