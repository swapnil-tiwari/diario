<?php
        session_start();
        require ("db_connect.php");
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        //$email=$_SESSION['forgotpass_email'];
        //echo $email;
        //echo $oldpass;
        $con=mysqli_connect($servername,$username,$password,$dbname);
        if (!$con)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        $query=mysqli_query($con,"SELECT * FROM registration WHERE (email='$email' AND pass='$oldpass')");
        $numrows=mysqli_num_rows($query);
        if($numrows==1)
        {
          $sql="UPDATE registration SET pass='$newpass' WHERE (email='$email' AND pass='$oldpass')";
          $query=mysqli_query($con,$sql);
          if($query)
          {
            $_SESSION['pass_changed']=TRUE;
            header("Location:login.php");
          }
          else {
            echo "Due to some technical error, password could'nt be changed";
          }
        }
        else {
          echo "Wrong old password";
          header("location:forgotpassword.php");
        }
?>
