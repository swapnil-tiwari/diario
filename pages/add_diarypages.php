<?php

        require ("db_connect.php");
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $username=$_SESSION['username'];
        $email=$_SESSION['email'];
        if (!$conn)
      	  {
      		die("Connection failed: " . mysqli_connect_error());
  		    }
          $email=$_SESSION['email'];
          $query=mysqli_query($conn,"SELECT * FROM diary WHERE (username='$username' AND email='$email')");
          $query_fetchdata=mysqli_query($conn,"SELECT * FROM diary WHERE (username='$username' AND email='$email') ORDER BY id DESC");
          $_SESSION['diary_data']='';
          while($all_data=mysqli_fetch_assoc($query))
          {
              $row=mysqli_fetch_assoc($query_fetchdata);

              $_SESSION['diary_data'].='<div><h2>'.$row['date'].'</h2><hr><p>'.$row['diary_data'].'<hr></p></div>';


          }
?>
