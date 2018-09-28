<?php

        require ("db_connect.php");
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $username=$_SESSION['username'];
        $email=$_SESSION['email'];
        $query=mysqli_query($conn,"SELECT * FROM notes WHERE (username='$username' AND email='$email')");
        $query_fetchdata=mysqli_query($conn,"SELECT * FROM notes WHERE (username='$username' AND email='$email') ORDER BY id DESC");
        $_SESSION["data"]='';
        while($all_data=mysqli_fetch_assoc($query))
        {
         $row=mysqli_fetch_assoc($query_fetchdata);

        $_SESSION["data"].='<a href="#" style="text-decoration: none;"><div id="'.$row['id'].'" class="list-content"><h5>'.$row["title"].'</h5><div class="btn-group"><a href="edit_notes.php?id='.$row['id'].'"><button id="edit_'.$row['id'].'" ><i class="fa fa-pencil" aria-hidden="true"></i></button></a><a href="del_notes.php?id='.$row['id'].'"><button id="del_'.$row['id'].'" ><i class="fa fa-times" aria-hidden="true"></i></button></a></div><p>'.$row["note"].'</p></div></a><hr style="border: 0.05em solid #B5B5B5">';


        }
?>
