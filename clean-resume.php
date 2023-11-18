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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = 'Clean Resume Template'; ?></title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Customs css -->
    <link rel="stylesheet" href="assets/css/resume_css/resumetemp1.css?v=<?php echo time(); ?>" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    /* CSS styles for the navigation menu */
   
    .scroll-to-top {
      display: none;
      position: fixed;
      bottom: 20px;
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

<div class="container">
  <div class="header">
    <div class="full-name">
      <span class="first-name"><?php echo strtoupper($row[3]) ?></span> 
      <span class="last-name"></span>
    </div>
    <div class="contact-info">
      <span class="email">Email:</span>
      <span><?php echo "$row[4]"; ?></span>
      <span class="separator"></span>
      <span class="phone">Phone: </span>
      <span class="phone-val">+<?php echo "$row[5]"; ?></span>
      <span class="separator"></span>
      <span class="phone">Address: </span>
      <span class="phone-val"><?php echo "$row[6]"; ?></span>
   
    </div>
    
    <div class="about">
      <span class="position"><?php echo strtoupper($row[1]) ?> </span>
      <span class="desc">
      <?php echo $row[7] ?>
      </span>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo" $row[9] "; ?> </div>
            <div class="addr"><?php echo" $row[12] "; ?></div>
            <div class="duration"><?php echo" $row[10] "; ?>-<?php echo" $row[11] "; ?></div>
          </div>
          <div class="right">
            <div class="name"><?php echo" $row[8] "; ?></div>
            <div class="desc"><?php echo" $row[13] "; ?></div>
          </div>
        </div>
         

      </div>
    </div>
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo" $row[14] "; ?></div>
            <div class="addr"><?php echo" $row[15] "; ?></div>
            <div class="duration"><?php echo" $row[17] "; ?></div>
          </div>
          <div class="right">
            <div class="desc"><?php echo" $row[19] "; ?></div>
          </div>
        </div>
      </div>
      
  </div>


  <div class="section">
       <div class="section__title">Skills</div>
       <div class="skills">
         <div class="skills__item">
           <div class="left"><div class="name">
           <?php echo" $row[20] "?>  - <?php echo" $row[21] "?>             </div></div>
          
       
         </div>
       </div>
     </div>  
     
     <div class="section">
       <div class="section__title">Softwares</div>
       <div class="skills">
         <div class="skills__item">
           <div class="left"><div class="name">
           <?php echo" $row[22] "?>  - <?php echo" $row[23] "?>             </div></div>
          
         </div>
       </div>
     </div> 
  
  <div class="section">
      <div class="section__title">Languages</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">

            <div class="name"><?php echo" $row[24] "?> - <?php echo" $row[25] "?></div>
            <div class="name"><?php echo" $row[26] "; ?>- <?php echo" $row[27] "?></div>
          </div>
        </div>
      </div>
  </div>

  <div class="section">
      <div class="section__title">Reference</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo" $row[28] "; ?></div>
            <div class="duration"><?php echo" $row[30] "; ?>-<?php echo" $row[31] "; ?></div>
          </div>
          <div class="right">
            <div class="desc"><?php echo" $row[29] "; ?></div>
          </div>
        </div>
      </div>
      
  </div>

  <div class="section">
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
          </div>
          <div class="right">
            <div class="desc"> <!-- Button -->
         <button class="myBtn print-button" onclick="printPage()" title="Generate to PDF">Print CV</button>
    <!-- Button --></div>
          </div>
        </div>
      </div>
      
  </div>
 
     </div>
  </div>
</div>

<script>
      function printPage() {
      document.getElementById("edit").style.display = "none";
      window.print();
    } 

    // JavaScript code for handling the scroll-to-top functionality
    window.onscroll = function() {
        scrollFunction();
    };

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