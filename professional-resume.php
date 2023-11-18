<?php
    include('db/connection.php');
    session_start();

            $username = $_SESSION['username'];
            $query = "select * from cv_data where username = '$username' "; 
            $query_run = mysqli_query($con,$query);
            $row     = mysqli_fetch_array($query_run);

            
    if($username == $row[3]) 
    {
            if(isset($_SESSION["username"]))
            {

?>
<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = 'Your Resume'; ?></title>
    <head>
    <!-- FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Customs css -->
    <link rel="stylesheet" href="assets/css/resume_css/resume.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="assets/css/resume_css/proTemp.css?v=<?php echo time(); ?>" type='text/css'>
    <!-- pdf to html -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
 
    <style>
    /* CSS styles for the navigation menu */
   
    .scroll-to-top {
      display: none;
      position: fixed;
      bottom: 50px;
      right: 20px;
      width: 60px;
      height: 60px;
      background-color: #000;
      color: #fff;
      border-radius: 50%;
      text-align: center;
      line-height: 40px;
      cursor: pointer;
      transform: translate(-50%, -50%);
  z-index: 9999;
    }
    .fa-edit
    {
      font-size: 23px;
    }
  </style>
 
  </head>
  
  <body>
 
  <form action="update-resume.php" method="post">
  <button title="Update resume!" class="edit-button scroll-to-top" id="edit"> <i class="fa fa-edit"></i></button>
  </form>

<div class="A4" id="myContent">
<div class="sheet">
<!-- PAGE STUFF -->
<div class="rela-block page">
    <div class="rela-block top-bar">
        <div class="caps name">
            <div class="abs-center"><?php echo strtoupper($row[3]) ?></div>
        </div>
    </div>
    <div class="side-bar">
        <div class="mugshot">
            <div class="logo">
            <?php
                echo"
              <img src='assets/images/".$row['user_img']."' alt='' height='100%' width='100%'>
            
            ";
             ?> 

                <!-- <p class="logo-text">kj</p> -->
            </div>
        </div>
        <p class="context">PHONE: <span>+<a href="tel:<?php echo "$row[5]"; ?>"><?php echo "$row[5]"; ?></a> </span></p>
        <p class="context">EMAIL: <span><a href="mailto:<?php echo "$row[4]"; ?>"><?php echo "$row[4]"; ?></a></span> </p>
        <p class="context">ADDRESS: <a href="#address"><?php echo" $row[6] "; ?></a> </p>

        <p class="rela-block caps side-header">Expertise</p>
        <p class="rela-block list-thing"><?php echo" $row[20] "?></p>
        <p class="rela-block caps side-header">Education</p>
        <p class="rela-block list-thing"><?php echo" $row[14] "; ?> - <span><?php echo" $row[17] "; ?></span></p>

    </div>
    <div class="rela-block content-container">
        <h2 class="rela-block caps title"><?php echo strtoupper($row[1]) ?></h2>
        <div class="rela-block separator"></div>
        <div class="rela-block caps greyed">Profile</div>
        <p class="long-margin"><?php echo $row[7] ?></p>
        <div class="rela-block caps greyed">Experience</div>

        <h3>Previous Employment</h3>
        <p class="light"><?php echo" $row[9] "; ?> <span><?php echo" $row[10] "; ?>-<?php echo" $row[11] "; ?><br><span><?php echo" $row[8] "; ?></span></span></p>

        <p class="justified"><?php echo" $row[13] "; ?></p>

        <h3>Professional skills</h3>
        <p class="light"><?php echo" $row[9] "; ?> </p>
					 <ul>					 
						<li><?php echo" $row[20] "?> - <?php echo" $row[21] "?></li>
					 </ul>
           <h3>Softwares</h3>
           <ul>					 
					 <li><?php echo" $row[22] "?> - <?php echo" $row[23] "?></li>
					 </ul>

        <h3>Education</h3>
        <p class="light"><?php echo" $row[14] "; ?> <span><?php echo" $row[17] "; ?><br><span><?php echo" $row[15] "; ?></span></span></p>
        <p class="justified"><?php echo" $row[19] "; ?></p>

        <h3>Languages</h3>

        <p class="light"> <?php echo" $row[24] "?> - <?php echo" $row[25] "?><br><span><?php echo" $row[26] "?> - <?php echo" $row[27] "?></span></p>

        <h3>Reference</h3>
        <p class="light"><?php echo" $row[28] "; ?>from<?php echo" $row[29] "; ?>-<span><?php echo" $row[34] "; ?>-<?php echo" $row[35] "; ?></span></span></p>
        <p class="light"><?php echo" $row[30] "; ?>-<?php echo" $row[31] "; ?></span></p>         

  </div>
</div>
  </div>
  </div>

<!-- Button -->
<button class="btn btn-info myBtn" onclick="printPage()" title="Generate to PDF">Generate PDF</button>
<!-- Button -->

<script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

<script>
//Create PDF from HTML...
function printPage() {
  // Hide the button
  var button = document.querySelector('.myBtn');
  button.style.display = 'none';

  var opt = {
    margin: 32,
    unit: 'px', // Change to 'px' since html2canvas ignores '%' unit for height
    filename: 'Resume.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 3 },
    jsPDF: { unit: 'px', format: 'a4', orientation: 'portrait' } // Change to 'px' for unit and 'a4' for format
  };

  // Get the full height of the content by temporarily setting height to auto
  var contentElement = document.getElementById('myContent');
  var originalHeight = contentElement.style.height;
  contentElement.style.height = 'auto';

  // Wait for a short duration to let the content adjust (you can increase the duration if needed)
  setTimeout(function() {
    html2canvas(contentElement, opt.html2canvas).then(function(canvas) {
      // Reset the height of the content
      contentElement.style.height = originalHeight;

      var pdf = new jsPDF(opt.jsPDF.orientation, opt.jsPDF.unit, opt.jsPDF.format);
      var imgData = canvas.toDataURL('image/jpeg', 1.0);
      var imgWidth = pdf.internal.pageSize.getWidth();
      var imgHeight = (canvas.height * imgWidth) / canvas.width;

      pdf.addImage(imgData, 'JPEG', 0, 0, imgWidth, imgHeight);
      pdf.save(opt.filename);

      // Show the button again
      button.style.display = 'block';
    });
  }, 500); // Adjust the duration as needed
}


</script>

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>

<script>
    // JavaScript code for handling the scroll-to-top functionality
    window.onscroll = function() { scrollFunction(); };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("edit").style.display = "block";
      } else {
        document.getElementById("edit").style.display = "show";
      }
    }

  </script>
<?php
} 
else
{
    header("location:auth/login.php");
}
 }
  else
  {
      header('location:templates.php');
  }
?>
  </body>
</html>
