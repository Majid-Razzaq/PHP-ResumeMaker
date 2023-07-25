<?php
    include('db/connection.php');

    session_start();

    $username = $_SESSION['username'];
    $query = "select user_img from cv_data where username = '$username'";
    $query_run = mysqli_query($con,$query);
    $row     = mysqli_fetch_array($query_run);

    if($username == $row[3])
    {
            
    //$check = mysqli_num_rows($query);
            header('location: templates.php');
    }
    else
    {
        header('location:templates.php');
    }

    //$edit_query = "select * from brand where brand_id='$edit_id'";

    ?>