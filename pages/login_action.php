<?php
    session_start();
        require ("db_connect.php");
        if(!empty($_POST['email']) && !empty($_POST['pass']))
        {
            $email=$_POST['email'];
            $pass=$_POST['pass'];

            $con=mysqli_connect($servername,$username,$password,$dbname);
            if (!$con)
            {
                die("Connection failed: " . mysqli_connect_error());
            }


            $query=mysqli_query($con,"SELECT * FROM registration WHERE (email='$email' AND pass='$pass')");
            $numrows=mysqli_num_rows($query);
            if($numrows!=0)
            {
                while($row=mysqli_fetch_assoc($query))
                {
                    $dbusername=$row['email'];
                    $dbpassword=$row['pass'];
                }

                if($email == $dbusername && $pass == $dbpassword)
                {
                    $query_fetchdata=mysqli_query($con,"SELECT * FROM registration WHERE (email='$email' AND pass='$pass')");
                        //mysqli_data_seek($query, 0);
                        $row=mysqli_fetch_assoc($query_fetchdata);

                        $_SESSION['username']=$row['username'];
                        $_SESSION['email']=$row['email'];

                        /* Redirect browser */
                        $_SESSION['login_check']=TRUE;

                        header("Location: ./home.php");


                }
            }
             else
            {

                $_SESSION['login_check']=FALSE;
               // echo $_SESSION['login_failed'];
               header("Location: ./login.php");
            }

        } else
        {
            echo "All fields are required!";
        }

?>
