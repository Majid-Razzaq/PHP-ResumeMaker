<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = 'Create-resume'; ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="icon" href="/assets/images/logo-icon.png" type="/assets/images/logo-icon.png">
    <link rel="icon" href="/assets/images/logo-icon.png">
</head>
<body>

<div class="container-fluid">
 <!-- Including Header -->
     <?php
    include('inc/header.php');
    session_start();
    ?>
    <!-- Including Header -->

     <div class="Container-fluid">

                <div class="col-md-12 resume-head">
                        <div class="container">
                            <h4 class="pt-5">RESUMES</h4>
                            <p class="h5 pt-2">Ready to create a powerful resume that gets noticed?</p>
                        </div>
                </div>

            <div class="container" onclick="redirectTo('resume.php')">
            <div class="row mt-5 mb-3">
                <div class="col-md-4 crtCon">
                    <div class="createCon mx-auto">
                    <i class="fa fa-plus-circle"></i>  
                    <h5 class="pt-3">New Resume</h5>
                     </div>
                </div>
            </div>
            </div>

    </div>

</div>

     <!-- Including Header -->
    <?php
    include('inc/footer.php');
    ?>
    <!-- Including Header -->
    
    <script>
function redirectTo(url) {
  window.location.href = url;
}

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
</script>
</body>
</html>