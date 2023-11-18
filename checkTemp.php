<?php
    include('db/connection.php');

    session_start();

    $username = $_SESSION['username'];
    $query = "select * from cv_data where username = '$username'";
    $query_run = mysqli_query($con,$query);
    $row     = mysqli_fetch_array($query_run);

    if($username == $row[3])
    {
        $fetch_id = $_GET["id"];
        if($fetch_id == 1)
        {
            echo"
            <script>window.location.href = 'http://localhost/resume-Builder/clean-resume.php';</script>
            ";                    
        }
        else if($fetch_id == 2)
        {
            echo"
            <script>window.location.href = 'http://localhost/resume-Builder/professional-resume.php';</script>
            "; 
        }
        else
        {
            echo"
            <script>window.location.href = 'http://localhost/resume-Builder/your_resume.php';</script>
            ";
        }
            
    //$check = mysqli_num_rows($query);
            // header('location: templates.php');
    }
    else
    {
        header('location:resume.php');
    }

    //$edit_query = "select * from brand where brand_id='$edit_id'";

    ?>
