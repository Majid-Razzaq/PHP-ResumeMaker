<?php
    include('../db/connection.php');
    session_start();

    if(isset($_SESSION["username"]))
    {
        header("location:http://localhost/resume-Builder/templates.php");
    }
    else
    {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = 'Login'; ?></title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="icon" href="/assets/images/logo-icon.png" type="/assets/images/logo-icon.png">
    <link rel="icon" href="/assets/images/logo-icon.png">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/login.css?v=<?php echo time(); ?>">
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- fontawesome v5 -->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>



<section class="forms">
        <div class="container">
            <!-- logo -->
            <div class="logo">
                <a class="brand-logo" href="#">Login To Your Account</a>
            </div>
            <!-- //logo -->
            <div class="forms-grid">

                <!-- login -->
                <div class="login">
                    <span class="fas fa-sign-in-alt"></span>
                    <strong>Welcome!</strong>
                    <span>Sign in to your account</span>

                    <form method="post" class="login-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">Email</label>
                                    <input type="email" class="form-text" name="email" required>
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-eye"></span>
                                    <label class="form-label" for="input">Password</label>
                                    <input type="password" class="form-text" name="password" required>
                                </div>
                                <div class="form-row bottom">
                                    <div class="form-check">
                                        <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                        <label for="remenber"> remember me?</label>
                                    </div>
                                    <a href="register.php" class="forgot">Create Account!</a>
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login" name="login">Login <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                        <?php 

if(isset($_POST['login']))
{

    $mail = $_POST['email'];
    $pass = $_POST['password'];
    $query = mysqli_query($con,"select * from register where email='$mail' && password='$pass' ");
    $check = mysqli_num_rows($query);

    if($check > 0)
    {
        $session_Data = mysqli_fetch_array($query);
        $_SESSION['user_id'] = $session_Data[0];
        $_SESSION['username'] = $session_Data[1];
        $_SESSION['contact'] = $session_Data[2];
        $_SESSION['address'] = $session_Data[3];
        $_SESSION['email'] = $session_Data[4];
        $_SESSION['password'] = $session_Data[5]; 
        $_SESSION['user_img'] = $session_Data[6];
        header("location:http://localhost/resume-Builder/templates.php");
    }   
    else
    {
        echo"
        <div style='margin-top:10px;' class='alert alert-danger' role='alert'>
        <b>Failed!</b> Login failed...
        </div>
         ";  

    }
}

} 
?>

                    </form>
                </div>
                <!-- //login -->
            </div>
        </div>
    </section>

</body>
</html>