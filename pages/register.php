<?php
session_start();
require("db_connect.php");

$username=$_POST["username"];
$email=$_POST["email"];
$pass=$_POST["pass"];

$conn = mysqli_connect("localhost", "root", "", "diario");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query=mysqli_query($conn,"SELECT * FROM registration WHERE (email='$email')");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{
			 	echo "Already registered";
}
else
{
	$sql="INSERT into registration (username, email, pass) VALUES ('$username','$email','$pass')";
  if (mysqli_query($conn, $sql))
  {
  	session_start();
  	$_SESSION['username']=$username;
    $_SESSION['email']=$email;
    $_SESSION['login_check']=TRUE;

      header("location:home.php");
  }
  else
  {
    echo "Connection problem";
  }
}

?>
