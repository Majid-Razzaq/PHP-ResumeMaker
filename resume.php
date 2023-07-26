<?php 

    include('db/connection.php');

 session_start();
 
 $username = $_SESSION['username'];
 $query = "select * from register where username = '$username'";
 $query_run = mysqli_query($con,$query);
 $row = mysqli_fetch_array($query_run);

 $query = "select * from cv_data where username = '$username'";
 $query_run = mysqli_query($con,$query);
 $data = mysqli_fetch_array($query_run);
 
 if (is_array($data) && isset($data['username'])) 
    {
        header('location:update-resume.php');
    }
    else
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
    <title><?php $title = 'Create-resume'; ?></title>
    <link rel="icon" href="/assets/images/logo-icon.png" type="/assets/images/logo-icon.png">
    <link rel="icon" href="/assets/images/logo-icon.png">
<body>

<div class="container-fluid">
    <!-- Including Header -->
     <?php
    include('inc/header.php');
    ?>
    <!-- Including Header -->
    
    <!-- End here -->

        <div class="col-md-12 resume-head">
                <div class="container">
                    <p class="pt-5 h3 text-center">Untitled</p>
                    <hr>  
                </div>
        </div>

                <!-- form Code start -->
            <div class="container">
             <div class="row mt-3 mb-3">
                <div class="col-md-10 mx-auto">
                <h3 class="">Personal Details</h3>
                <form action="#" method="post" enctype="multipart/form-data">     
                <div class="row">
                        <div class="col-md-6 ">           
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="jobTitle" class="form-control" placeholder="Enter your job title" required>
                        </div>
                    </div>

                    <div class="col-md-6">           
                        <div class="form-group">
                                <div class="img-wrapper">
                                <img id="selectedImage" name="txtfile" src="assets/images/<?php echo $_SESSION['user_img']?>" >
                                <!-- <input type="hidden" value="<?php echo $_SESSION['user_img']?>" name="userImg"> -->

                                <ul>

                                <li class="pt-3"><a href="#" class="p-1" id="selectText" name="<?php echo $row['user_img']?>">Upload New Image</a></li>
                                    <input type="file" name="txtfile" id="imageInput" style="display: none;">
                                    
                                    <li><input type="submit" id="dlt_img" class="btn btn-link text-danger p-1" value="Delete Image"></li>
                                     
                                </ul>
                                
                            
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 ">           
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="username" placeholder="Enter your full name" class="form-control" value="<?php echo $_SESSION['username'] ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6">           
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="user_email" placeholder="Enter your email" class="form-control"  value="<?php echo $_SESSION['email'] ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6 ">           
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" name="user_num" class="form-control" placeholder="Enter your number"  value="<?php echo $_SESSION['contact']  ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6">           
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="user_add" placeholder="Enter your address" class="form-control"  value="<?php echo $_SESSION['address'] ?>" required>
                        </div>
                    </div>

                    <div class="col-md-12">           
                        <div class="form-group">
                        <h3>Professional Summary</h3>
                        <label for="exampleInputName">Include summary of your skills and experience in 3-5 sentences.</label>
                        <textarea name="user_summary" rows="5" class="form-control summernote"></textarea>
                        </div>
                    </div>



                    <!-- Employement Hisotry -->

                    <div class="col-md-12">           
                        <div class="form-group">
                            <h3>Employment History</h3>
                            <label for="exampleInputName">Include 3-5 work responsibility for each experience. List your most recent experience on top.</label>
                            <!-- <input type="file" class="form-control" id="exampleInputName" placeholder="Enter your name"> -->

                            <ul id="accordion">
                                <li>
                                    <label for="first">Untitled<i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="checkbox" name="accordion" id="first">
                                    <div class="content">
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Job Title</label>
                                                                <input type="text" name="EmpJobTitle" class="form-control" placeholder="Enter your job title" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Employer</label>
                                                                <input type="text" name="employer" class="form-control" placeholder="Enter your Company name" required>
                                                            </div>
                                                            </div>

                                                            <!-- Start date -->
                                                            <div class="col-md-3">
                                                                <label for="start date">Start Date</label>
                                                                <input type="date" class="form-control" name="EmpstrtDate" required>
                                                            </div>
                                                        
                                                            <!-- End date --> 
                                                               <div class="col-md-3">
                                                                <label for="start date">End Date</label>
                                                                <input type="date" class="form-control" name="EmpEndDate" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">City</label>
                                                                <input type="text" name="EmpCity" class="form-control" placeholder="Enter your City name" required>
                                                            </div>
                                                            </div>

                                                            <div class="col-md-12">           
                                                            <div class="form-group">
                                                            <label for="exampleInputName">Description</label>
                                                            <textarea  name="EmpDescrip" rows="5" class="form-control summernote"></textarea>
                                                            </div>
                                                            </div>


                                                        </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                       
                            </ul>

                        </div>
                    </div>

                    <!-- Employment History End here -->


                    <!-- Education Accordian Start -->
                    <div class="col-md-12">           
                        <div class="form-group">
                            <h3>Education</h3>
                            <label for="exampleInputName">List your most recent education on top. You should not include high-school.</label>
                            <!-- <input type="file" class="form-control" id="exampleInputName" placeholder="Enter your name"> -->

                            <ul id="accordion">
                                <li>
                                    <label for="second">Untitled<i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="checkbox" name="accordion" id="second">
                                    <div class="content">
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>School</label>
                                                                <input type="text" name="SchoName" class="form-control" placeholder="Enter your school name" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Degree</label>
                                                                <input type="text" name="DegName" class="form-control" placeholder="Enter your degree" required> 
                                                            </div>
                                                            </div>

                                                            <!-- Start date -->
                                                            <div class="col-md-3">
                                                                <label for="start date">Start Date</label>
                                                                <input type="date" class="form-control" name="EdustrtDate" required> 
                                                            </div>
                                                        
                                                            <!-- End date --> 
                                                               <div class="col-md-3">
                                                                <label for="start date">End Date</label>
                                                                <input type="date" class="form-control" name="EduEndDate" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">City</label>
                                                                <input type="text" name="Educity" class="form-control" placeholder="Please enter the name of the city where you received your degree" required>
                                                            </div>
                                                            </div>

                                                            <div class="col-md-12">           
                                                            <div class="form-group">
                                                            <label for="exampleInputName">Description</label>
                                                            <textarea name="Edusummary" rows="5" class="form-control summernote"></textarea>
                                                            </div>
                                                            </div>


                                                        </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                       
                            </ul>

                        </div>
                    </div>
                    <!-- Education Accordian End here -->
             

                    <!-- Skills Accordian Code Start -->

                    <div class="col-md-12">         
                        <div class="form-group">
                            <h3>Skills</h3>
                            <label for="exampleInputName">Only list relevant skills. E.g. communication, computer, leadership, organizational or problem-solving skills.</label>
                            <!-- <input type="file" class="form-control" id="exampleInputName" placeholder="Enter your name"> -->

                            <ul id="accordion">
                                <li>
                                    <label for="third">Untitled<i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="checkbox" name="accordion" id="third">
                                    <div class="content">
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Skill</label>
                                                                <input type="text" name="SkijobTitle" class="form-control" placeholder="add your skill" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="skill-level">Level:</label>
                                                                <div class="form-group">
                                                                <select class="form-control" id="exampleSelect" name="skillbutton" required>
                                                                    <option>Novice</option>
                                                                    <option>Beginner</option>
                                                                    <option>Skillful</option>
                                                                    <option>Experienced</option>
                                                                    <option>Expert</option>
                                                                </select>
                                                                </div>
                                                                
                                                                <!-- <button type="button" class="btn btn-outline-secondary btnn" name="skillbutton" value="beginner">Beginner</button> -->
                                                                <!-- <button type="button" class="btn btn-outline-secondary btnn" name="skillbutton" value="intermediate">Intermediate</button>
                                                                <button type="button" class="btn btn-outline-secondary btnn" name="skillbutton" value="advanced">Advanced</button>
                                                                <button type="button" class="btn btn-outline-secondary btnn ms-2 mt-2" name="skillbutton" value="expert">Expert</button> -->

                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Software</label>
                                                                <input type="text" name="softwareName" class="form-control" placeholder="Enter your expertise software name:" required>
                                                            </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="skill-level">Level:</label>
                                                                <div class="form-group">
                                                                <select class="form-control" id="exampleSelect" name="addSoftLev" required>
                                                                    <option>Novice</option>
                                                                    <option>Beginner</option>
                                                                    <option>Skillful</option>
                                                                    <option>Experienced</option>
                                                                    <option>Expert</option>
                                                                </select>
                                                                </div>
                                                               
                                                            </div>


                                                        </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                       
                            </ul>

                        </div>
                    </div>
                    <!-- Skills Accirdian Code End here -->



                    <!-- Language Accordian Code Start -->

                        <div class="col-md-12">           
                        <div class="form-group">
                            <h3>Language</h3>
                            <label for="exampleInputName">List your most relevant language on top.</label>

                            <ul id="accordion">
                                <li>
                                    <label for="forth">Urdu<i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="checkbox" name="accordion" id="forth">
                                    <div class="content">
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Language</label>
                                                                <input type="text" name="urdu" class="form-control" value="Urdu" required>
                                                            </div>
                                                            </div>
                                                           

                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Level</label>
                                                                <div class="form-group">
                                                                <select class="form-control" id="exampleSelect" name="urduLevel" required>
                                                                    <option>Professional</option>
                                                                    <option>Native</option>
                                                                    <option>Good</option>
                                                                    <option>Conversional</option>
                                                                    <option>Limited</option>
                                                                    <option>Elementry</option>
                                                                </select>
                                                                </div>

                                                            </div>
                                                            </div>

                                                        </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                       
                            </ul>
                        </div>
                    </div>
                    <!-- Urdu Accirdian Code End here -->

                <!-- English Accirdian Code -->
                    <div class="col-md-12">
                        <div class="form-group">
                            
                        <ul id="accordion">
                                <li>
                                    <label for="forEng">English<i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="checkbox" name="accordion" id="forEng">
                                    <div class="content">
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Language</label>
                                                                <input type="text" name="english" class="form-control" value="English" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Level</label>
                                                                <div class="form-group">
                                                                <select class="form-control" name="englishLevel" id="exampleSelect" required>
                                                                    <option>Professional</option>
                                                                    <option>Native</option>
                                                                    <option>Good</option>
                                                                    <option>Conversional</option>
                                                                    <option>Limited</option>
                                                                    <option>Elementry</option>
                                                                </select>
                                                                </div>

                                                            </div>
                                                            </div>

                                                        </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                       
                            </ul>

                        </div>
                    </div>
                     <!-- English Accirdian Code End here -->



                     <!-- References Accordian Code Start -->

                        <div class="col-md-12">           
                        <div class="form-group">
                            <h3>References</h3>
                            <label for="exampleInputName">Your references could be professors, co-workers, recent employers or friends.</label>

                            <ul id="accordion">
                                <li>
                                    <label for="fifth">Untitled<i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="checkbox" name="accordion" id="fifth">
                                    <div class="content">
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Name</label>
                                                                <input type="text" name="refName" class="form-control" placeholder="Enter your reference name" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Company</label>
                                                                <input type="text" name="refCompName" class="form-control" placeholder="Enter Company name" required>
                                                            </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Phone</label>
                                                                <input type="text" name="refPhone" class="form-control" placeholder="Enter phone number" required>
                                                            </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Email</label>
                                                                <input type="text" name="refEmail" class="form-control" placeholder="Enter Email here" required>
                                                            </div>
                                                            </div>


                                                        </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                       
                            </ul>

                        </div>
                    </div>
                    <!-- References Accirdian Code End here -->




                     <!-- Other Accordian Code Start -->

                         <div class="col-md-12">           
                        <div class="form-group">
                            <h3>Other</h3>
                            <label >List your most recent education on top. You should not include high-school.</label>

                            <ul id="accordion">
                                <li>
                                    <label for="sixth">Untitled<i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="checkbox" name="accordion" id="sixth">
                                    <div class="content">
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Name</label>
                                                                <input type="text" name="other_name" class="form-control" placeholder="Enter name here" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">City</label>
                                                                <input type="text" name="other_city" class="form-control" placeholder="Enter city name" required>
                                                            </div>
                                                            </div>

                                                            <!-- Start date -->
                                                            <div class="col-md-3">
                                                                <label for="start date">Start Date</label>
                                                                <input type="date" class="form-control" name="OthStrtDate" required>
                                                            </div>
                                                        
                                                            <!-- End date --> 
                                                               <div class="col-md-3">
                                                                <label for="start date">End Date</label>
                                                                <input type="date" class="form-control" name="OthEndDate" required>
                                                            </div>

                                                        </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                       
                            </ul>

                        </div>
                    </div>
                    <!-- Other Accirdian Code End here -->

                        </div>


                        <Button name="download" class="btn btn-danger float-right btn-lg">Download</Button>
                </form>
                       
                    </div>
                </div>   
            </div>
        <!-- form Code End -->
    </div>

    <!-- PHP Code Start -->
    <?php
        if(isset($_POST['download']))
        {
            $jobTitle = $_POST['jobTitle'];

            // $userImg   = $_POST['user_img'];

            $username   = $_POST['username'];
            $user_email = $_POST['user_email'];
            $userNum    = $_POST['user_num'];
            $userAdd    = $_POST['user_add'];
            $userSumm   = $_POST['user_summary'];
            $EmpJobTitle = $_POST['EmpJobTitle'];
            $emp        = $_POST['employer'];
            $empStartDate = $_POST['EmpstrtDate'];
            $empEndDate = $_POST['EmpEndDate'];
            $empCity    = $_POST['EmpCity'];
            $empDscrpt  = $_POST['EmpDescrip'];
            $empSchName = $_POST['SchoName'];
            $empDegName = $_POST['DegName'];
            $EduStartDate = $_POST['EdustrtDate'];
            $EduEndtDate = $_POST['EduEndDate'];
            $EduCity    = $_POST['Educity'];
            $EduSummary = $_POST['Edusummary'];
            $skill_title = $_POST['SkijobTitle'];
            $emp_skill  = $_POST["skillbutton"];
            $softName  = $_POST["softwareName"];
            $softLevel  = $_POST["addSoftLev"];
            $urdu  = $_POST['urdu'];
            $urdu_lev  = $_POST['urduLevel'];
            $eng  = $_POST['english'];
            $eng_level  = $_POST['englishLevel'];
            $ref_name   = $_POST['refName'];
            $refComp    = $_POST['refCompName'];
            $ref_phone  = $_POST['refPhone'];
            $ref_email  = $_POST['refEmail'];
            $oth_name   = $_POST['other_name'];
            $oth_city   = $_POST['other_city'];
            $oth_strt_date  = $_POST['OthStrtDate'];
            $oth_end_date  = $_POST['OthEndDate'];

            
            $filename = $_FILES["txtfile"]["name"];
			$oldLocation = $_FILES["txtfile"]["tmp_name"];
			$newlocation = "assets/images/".$filename;
            move_uploaded_file($oldLocation,$newlocation);

            $query = mysqli_query($con,"INSERT into cv_data(job_title,user_img,username,email,phone,address,user_summary,empJob_title,employer,emp_start_Date,emp_end_Date,emp_city,emp_description,school_name,deg_name,edu_start_date,edu_end_date,edu_city,edu_summary,skill_job_title,skill_emp,software_name,software_level,urdu,urdu_level,english,english_level,ref_name,ref_comp_name,ref_phone,ref_email,other_name,other_city,other_strt_date,other_end_date)
            values
            ('$jobTitle','$filename','$username','$user_email','$userNum','$userAdd','$userSumm','$EmpJobTitle','$emp','$empStartDate','$empEndDate','$empCity','$empDscrpt','$empSchName','$empDegName','$EduStartDate','$EduEndtDate','$EduCity','$EduSummary','$skill_title','$emp_skill','$softName','$softLevel','$urdu','$urdu_lev','$eng','$eng_level','$ref_name','$refComp','$ref_phone','$ref_email','$oth_name','$oth_city','$oth_strt_date','$oth_end_date')
            ");
            if($query > 0)
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
            }   
            else
            {
                echo"
                <script>alert('Please fill correctly')</script>
                ";
            }
            
        }
    ?>
    <!-- PHP Code End Here -->


    <!-- Image delete Code Start -->
    <?php

        if(isset($_POST['dlt_img']))
        {
            $sql = "UPDATE cv_data, register
            SET cv_data.user_img = NULL, register.user_img = NULL
            WHERE cv_data.username = '$username' AND register.username = '$username'";

            $query_run = mysqli_query($con,$sql);

            if($query_run > 0)
            {
                echo "
                <script>alert('deleted');
                window.location.href = 'update-resume.php';
                </script>   
                ";
                // header('Location: ' . $_SERVER['PHP_SELF']);

            }
            else
            {
                echo "
                <script>alert('Failed')</script>
                ";
            }
        }
        ?>
<!-- Image delete Code End -->

     <!-- Including Footer -->
    <?php
    include('inc/footer.php');
    ?>
    <!-- Including Footer -->

     <!-- Summernote js Links -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
    $(document).ready(function() {
    var t = $('.summernote').summernote(
    {
    height: 100,
    focus: true
    }
    )});

    </script>





<!-- Select Image code -->
<script>
    const selectText = document.getElementById('selectText');
    const imageInput = document.getElementById('imageInput');
    const selectedImage = document.getElementById('selectedImage');
    
    selectText.addEventListener('click', () => {
      imageInput.click();
    });

    imageInput.addEventListener('change', () => {
      const selectedFile = imageInput.files[0];
      const imageURL = URL.createObjectURL(selectedFile);
      selectedImage.src = imageURL;
    });

  </script>

  <!-- Select Image Code -->



    <!-- Accordian js -->
   <script> jQuery(function($) {
  $('input[type="checkbox"]').on('change', function() {
    let state = $(this).is(':checked');
    $('input[type="checkbox"]').prop('checked', false);
    $(this).prop('checked', state);
  });
});

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

<?php
} 
else
{
    header("location:auth/login.php");
}
    }

?>
</body>
</html>
