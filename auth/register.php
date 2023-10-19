<?php
    include('../db/connection.php');
    session_start();

    if(isset($_SESSION["username"]))
    {
        header("location:http://localhost/resume-Builder/index.php");
    }

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
                <a class="brand-logo" href="#">Sign Up To Your Account</a>
            </div>
            <!-- //logo -->
            <div class="forms-grid">

    <!-- register -->
    <div class="register">
                    <span class="fas fa-user-circle"></span>
                    <strong>Create account!</strong>
                    <form method="post" class="register-form" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">Name</label>
                                    <input type="text" class="form-text" name="username" required>
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-phone"></span>
                                    <label class="form-label" for="input">Contact</label>
                                    <input type="number" class="form-text" name="con" required>
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-map"></span>
                                    <label class="form-label" for="input">Address</label>
                                    <input type="text" class="form-text" name="address" required>
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-envelope"></span>
                                    <label class="form-label" for="input">E-mail</label>
                                    <input type="email" class="form-text" name="email" required>
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label class="form-label" for="input">Password</label>
                                    <input type="password" class="form-text" name="password" required>
                                </div>

                                <div class="form-row">
                                    <span class="fas fa-image"></span>
                                    <label class="form-label" for="input">Image</label>
                                    <input type="file" class="form-text" name="txtfile" required>
                                </div>

                                <div class="form-row button-login">
                                    <button class="btn btn-login" name="btn">Create <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                        </form>

                        <span class="create-account">Already have an account! <a href="login.php" class="forgot">Login</a></span>

    
                </div>
                <!-- //register -->

                </div>
        </div>
    </section>


    <?php 
        if(isset($_POST['btn']))
        {
            $name = $_POST['username'];
            $phone= $_POST['con'];
            $add  = $_POST['address'];
            $mail = $_POST['email'];
            $pass = $_POST['password'];
            $filename = $_FILES["txtfile"]["name"];
			$oldLocation = $_FILES["txtfile"]["tmp_name"];
			$newlocation = "../assets/images/".$filename;
			move_uploaded_file($oldLocation,$newlocation);
    
            $_SESSION['success'] = "success";

            $query = mysqli_query($con,"INSERT into register (username,contact,address,email,password,user_img)
            values('$name','$phone','$add','$mail','$pass','$filename')");
 

            if($query > 0)
            {
                echo"
                  <script>window.location.href = 'http://localhost/Resume-builder/auth/login.php';</script>
                ";
               exit();
            }


        }

    ?>
</body>
</html>
