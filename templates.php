<?php $page = 'Templates'; 
      session_start();

      if(isset($_SESSION["username"]))
      {
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = 'Templates'; ?></title>
    <link rel="icon" href="/assets/images/logo-icon.png" type="/assets/images/logo-icon.png">
    <link rel="icon" href="/assets/images/logo-icon.png">
</head>
<body>

<div class="container-fluid">
 <!-- Including Header -->
     <?php
    include('inc/header.php');
    ?>
    <!-- Including Header -->

     <div class="Container">

     <div class="col-md-12 resume-head">
                        <div class="container">

                        <?php 


                            if ( isset($_GET['success']) && $_GET['success'] == 1 )
                            {
                                // treat the succes case ex:
                                echo "
                                <div style='padding-top:50px;'>
                                <div class='alert alert-success'><b>Success!</b> The data has been successfully updated. Please select your updated templates. </div>
                                </div>
                                ";
                            }
            
                         ?>

                            <h4 class="pt-5">RESUME TEMPLATES</h4>
                            <h1>Select your job-winning resume template</h1>
                            <p class="h5 pt-2">Create your Resume in just 5 minutes using our easy-to-use template</p>
                        </div>
                </div>

            <div class="container mb-5">
            <div class="row mt-5">
                <div class="col-md-4 mt-2">
                    <div class="cv-temp mb-5">
                        <img src="assets/images/resumeImg2.png" alt="">
                        <form action="checkTemp.php?id=1" method="post">
                        <button class="btn btn-primary btn-lg text-white tmpBtn">Use this template</button>
                        </form>
                        <h4 class="p-2">Clean</h4>
                    </div>
                </div>

                <div class="col-md-4 mt-2">
                    <div class="cv-temp mb-5">
                    <img src="assets/images/resumeImg3.png" alt="">
                    <form action="checkTemp.php?id=2" method="post">
                        <button class="btn btn-primary btn-lg text-white tmpBtn">Use this template</button>
                    </form>
                    <h4 class="p-2">Professional</h4>   
                </div>
                </div>


                <div class="col-md-4 mt-2">
                    <div class="cv-temp mb-5">
                    <img src="assets/images/resumeIdea1.png" alt="">
                    <form action="checkTemp.php?id=3" method="post">
                        <button class="btn btn-primary btn-lg text-white tmpBtn">Use this template</button>
                    </form>
                    <h4 class="p-2">Advanced</h4>

                </div>
                </div>
            </div>

        

            </div>

    </div>

</div>

     <!-- Including footer -->
    <?php
    include('inc/footer.php');
    ?>
    <!-- Including footer -->
    
        <!-- Js scripts -->
  
    <!--/MENU-JS-->
    <script>
   

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <script src="assets/js/bootstrap.min.js"></script>


<?php 
 
}
else
{
    header("location:auth/login.php");
}

?>

</body>
</html>
