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
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="/assets/images/logo-icon.png" type="/assets/images/logo-icon.png">
    <link rel="icon" href="/assets/images/logo-icon.png">
<title><?php $title = 'Your Resume'; ?></title>

<link rel="stylesheet" href="assets/css/resume_css/bootstrap.css?v=<?php echo time(); ?>">   
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/resume_css/dashboard.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/css/resume_css/resume.css?v=<?php echo time(); ?>">
<!-- Custom css -->
  <!-- Cdnjs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
 
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    <!-- include summernote css/js-->


<style>
    /* CSS styles for the navigation menu */
   
    .scroll-to-top {
      display: none;
      position: fixed;
      bottom: 50px;
      right: 10px;
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
<!-- header -->
<div class="clearfix" id="myContent">
<div class="col-sm-3 col-md-2 sidebar">
		 <div class="sidebar_top">
		 <h1 class="text-center"><?php echo $row[3] ?></h1>
			 <?php
                echo"
              <img src='assets/images/".$row['user_img']."' alt='' >
            
            ";
             ?> 		 </div>
		<div class="details">
			 <h3>PHONE</h3>

             <p><i class="fas fa-phone pr-2"></i>+<a href="tel:<?php echo "$row[5]"; ?>"><?php echo "$row[5]"; ?> </p>
			 <h3>EMAIL</h3>
			 <p>    <i class="fas fa-envelope pr-1"></i><a href="mailto:<?php echo "$row[4]"; ?>"><?php echo "$row[4]"; ?></a></p>
			 <address>
			 <h3>ADDRESS</h3>
			 <span> <p><i class="fas fa-map-marker-alt pr-1"></i><?php echo" $row[6] "; ?></span>
			 </address>
			 
		</div>
		<div class="clearfix"></div>
</div>
<!--Main Body Code End here-->

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	 <div class="content">

		 <div class="company">
			 <h3 class="clr1">Profile</h3>
			 <div class="company_details">
				 <p >    <?php echo" $row[7] "; ?></p>
			 </div>
	
		 </div>


		 <div class="company">
			 <h3 class="clr1">Previous Employment</h3>
			 <div class="company_details">
				 <h4><?php echo" $row[9] "; ?> <span><?php echo" $row[10] "; ?>-<?php echo" $row[11] "; ?></span></h4>
				 <h6><?php echo" $row[8] "; ?></h6>
				 <p><?php echo" $row[13] "; ?></p>
			 </div>
	
		 </div>
		 <div class="skills">
			 <h3 class="clr1">Professional skills</h3>
		
			 <div class="skill_list">
				 <div class="skill1">
					 <h4>Software</h4>
					 <ul>					 
					 <li><?php echo" $row[22] "?> - <?php echo" $row[23] "?></li>
					 </ul>
				 </div>
				 <div class="skill2">
					 <h4>Languages</h4>
					 <ul>					 
						<li><?php echo" $row[20] "?> - <?php echo" $row[21] "?></li>
					 </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
		 </div>
		 <div class="education">
			 <h3 class="clr1">Education</h3>
			 <div class="education_details">
				 <h4><?php echo" $row[14] "; ?> School <span><?php echo" $row[17] "; ?></span></h4>
				 <h6><?php echo" $row[15] "; ?></h6>
				 <p><?php echo" $row[19] "; ?></p>
			 </div>

		 </div>

		 <div class="company">
			 <h3 class="clr1">Languages</h3>
			 <div class="company_details">
			 <p class="pb-5"><?php echo" $row[24] "?> - <?php echo" $row[25] "?></p>
				 <p> <?php echo" $row[26] "?> - <?php echo" $row[27] "?></p>
			 </div>
	
		 </div>

		 <div class="company">
			 <h3 class="clr1">Reference</h3>
			 <div class="company_details">
				 <h4> <?php echo" $row[28] "; ?>from<?php echo" $row[29] "; ?><span><?php echo" $row[34] "; ?>-<?php echo" $row[35] "; ?></span></h4>
				 <h6></h6>
				 <p><?php echo" $row[30] "; ?>-<?php echo" $row[31] "; ?></p>
				 <p><?php echo" $row[32] "; ?></p>
				 <p><?php echo" $row[33] "; ?></p>
				</div>

		 </div>

	 </div>
</div>
</div>


<!-- Generate to PDF Button js -->

<!-- Button -->
<button class="btn btn-info myBtn" onclick="printPage()" title="Generate to PDF">Generate PDF</button>
<!-- Button -->

<script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

<script>

//Create PDf from HTML...
function printPage() {
  // Hide the button
  var button = document.querySelector('.myBtn');
  button.style.display = 'none';

  var opt = {
    margin: 32,
    unit: 'px',
    format: 'a4',
    filename: 'Resume.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 3 },
    jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
  };

  html2canvas(document.getElementById('myContent'), opt).then(function(canvas) {
    var doc = new jsPDF(opt.jsPDF.orientation, opt.jsPDF.unit, opt.jsPDF.format);
    doc.addImage(canvas.toDataURL('image/jpeg'), 'JPEG', 0, 0, doc.internal.pageSize.getWidth(), doc.internal.pageSize.getHeight());
    doc.save(opt.filename);

    // Show the button again
    button.style.display = 'block';
  });
}



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

<!-- Generate to PDF Button js -->



<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>

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