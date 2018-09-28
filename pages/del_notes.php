<?php

        session_start();
        $id=$_GET['id'];
        require ("db_connect.php");
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="DELETE FROM notes WHERE (id='$id')";
        $query=mysqli_query($conn,$sql);
        if($query)
        {
          header("Location: ./home.php");
        }
        else {
          echo "Could'nt delete due to some server error";
        }
?>
