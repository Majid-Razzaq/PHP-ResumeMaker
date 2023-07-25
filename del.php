<?php
include('db/connection.php');

$username = $_SESSION['username'];
$imageId = $_POST['imageId'];
$sql = "UPDATE cv_data SET user_img = NULL WHERE username = '$username'";
$query_run = mysqli_query($con,$sql);

    if($query_run > 0)
    {
        echo "
        <script>alert('deleted')</script>
        ";
        header("location:update-resume.php");
    }
    else
    {
        echo "
        <script>alert('Failed')</script>
        ";
    }


?>