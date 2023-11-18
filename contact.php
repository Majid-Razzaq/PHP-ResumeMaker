<?php 
  session_start();

  $page = 'contact'; ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php $title = 'Contact'; ?></title>
  <link rel="icon" href="/assets/images/logo-icon.png" type="/assets/images/logo-icon.png">
    <link rel="icon" href="/assets/images/logo-icon.png">
</head>

<body>
  <!--header-->
  <?php
  include('inc/header.php');
  ?>
  <!--/header-->
  
  <!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Contact Us </h2>
            <p class="inner-page-para mt-2">
            Build Your Future, Anytime, Anywhere. Craft Your Resume with Confidence</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
  <!-- contacts-5-grid -->
  <div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
      <div class="container">
        <div class="heading text-center mx-auto">
          <h5 class="title-subw3hny text-center">Contact our team</h5>
          <h3 class="title-w3l">Got any <span class="inn-text">Questions? </span></h3>
        </div>
        <div class="row">
          <div class="container mt-3">
          <div class="col-md-12">
          <h3 class="text-center">Seeking suggestions to elevate our resume builder website and deliver a more polished and user-friendly experience. Your professional insights are appreciated!</h3>
          </div>
          </div>
        </div>
        <div class="contacts-5-grid-main mt-5">
          <div class="contacts-5-grid">
            <div class="map-content-5">
              <div class="d-grid grid-col-2">
                <div class="contact-type">
                  <div class="address-grid">
                    <h6><span class="fas fa-map-marked-alt"></span> Address</h6>
                    <p>Karachi , Pakistan.</p>

                  </div>
                  <div class="address-grid">
                    <h6><span class="fas fa-envelope-open-text"></span> Email</h6>
                    <a href="mailto:abdulmajid22770@gmail.com" class="link1">abdulmajid22770@gmail.com </a>

                  </div>
                  <div class="address-grid">
                    <h6><span class="fas fa-phone-alt"></span> Phone</h6>
                    <a href="tel:+12 324-016-695" class="link1">+932 222682821</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-inner-cont mt-5">
          <form action="#" method="post" class="signin-form">
            <div class="form-grids">
              <div class="form-input">
                <input type="text" name="name" placeholder="Enter your name *" required="" />
              </div>
              <div class="form-input">
                <input type="text" name="subject" placeholder="Enter subject " required />
              </div>
              <div class="form-input">
                <input type="email" name="sender" placeholder="Enter your email *" required />
              </div>
              <div class="form-input">
                <input type="text" name="phone" placeholder="Enter your Phone Number *" required />
              </div>
            </div>
            <div class="form-input">
              <textarea name="message" placeholder="Type your query here" required=""></textarea>
            </div>
            <div class="text-right">
              <button name="submit" class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>

          <?php
            if(isset($_POST['submit']))
            {
              
              $to = "abdulmajid22770@gmail.com";
                $name = $_POST['name'];
                $sub  = $_POST['subject'];
                $email = $_POST['sender'];
                $contact = $_POST['phone'];
                $msg = $_POST['message'];
                $from = "someonelse@example.com";
                $headers = "From:" . $from;

                $query = mysqli_query($con,"insert into contact (username,subject,email,phone,msg)
                values ('$name','$sub','$email','$contact','$msg');
                ");
                if($query > 0)
                {
                  // Email sending code
                                    
                  $mailSent = mail($to, $sub, $msg, $headers);

                  // if ($mailSent) {
                  //     echo "Email sent successfully.";
                  // } else {
                  //     echo "Email could not be sent.";
                  // }

                  echo "<meta http-equiv='refresh' content='0'>";
                  echo "<script>alert('Your message has been sent successfully. Thank you for contacting us.')</script>";
                }
                else
                {
                  echo "<script>alert('Failed! Try again')</script>";
                }
            }
          ?>


        </div>
      </div>
    </div>
    <!-- //contacts-5-grid -->
  </div>

  <div class="contacts-sub-5">
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.2563378687605!2d67.27168493011662!3d24.882571196713304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33151d211e627%3A0x9d75c38039fbefb3!2sJam%20Kanda%20Rd%2C%20Bin%20Qasim%20Town%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e1!3m2!1sen!2s!4v1685534340968!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.451653658936!2d67.27168493011662!3d24.882571196713304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33151d211e627%3A0x9d75c38039fbefb3!2sJam%20Kanda%20Rd%2C%20Bin%20Qasim%20Town%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1685534427633!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe> -->
  </div>


  <!-- Footer -->
  <?php
  include('inc/footer.php');
  ?>
  <!-- Footer -->

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
  </script>
</body>

</html>
