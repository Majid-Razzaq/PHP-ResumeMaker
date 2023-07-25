<?php

    Class ResumeBuilder
    {
        // Database Connection 
        function con()
        {
            $con = mysqli_connect("localhost","root","","ResumeBuilder") or die("Error in Database Connection");
            return $con;
        }

        // Login Function
        // function login($mail,$pass)
        // {
        //     // $pass = md5($pass);
        //     $query = mysqli_query($this->con(),"select * from register where email='$mail' && password='$pass' ") or die('Error in Login');

        //     $check = mysqli_num_rows($query);
        //     return $check;
        // }



        // Register Function
        function register($username,$contact,$address,$mail,$password,$filename)
        {
            
            // $encrypted_pwd = password_hash($password, PASSWORD_DEFAULT);

            $query = mysqli_query($this->con(),"INSERT into register (username,contact,address,email,password,user_img)
            values('$username','$contact','$address','$mail','$password','$filename')");
            
            return $query;


        }

        // Resume Data 
        function resume_data($jobTitle,$user_img,$username,$email,$phone,$address,$user_summary,$emp_job,$emp,$emp_start_date,$emp_end_date,$emp_descrip,$scho_name,$deg_name,$edu_start_date,$edu_end_date,$edu_city,$edu_summary,$skill_job_title,$skill_emp,$urdu,$urdu_level,$english,$eng_level,$ref_name,$ref_comp_name,$ref_phone,$ref_email,$other_name,$other_city,$other_start_date,$other_end_date,)
        {
            $query = mysqli_query($this->con(),"INSERT into cv_date (job_title,user_img,username,email,phone,address,user_summary,empJob_title,employer,emp_start_Date,emp_end_Date,emp_city,emp_description,school_name,deg_name,edu_start_date,edu_end_date,edu_city,edu_summary,skill_job_title,skill_emp,urdu,urdu_level,english,english_level,ref_name,ref_comp_name,ref_phone,ref_email,other_name,other_city,other_strt_date,other_end_date)
            values('$jobTitle','$user_img','$username','$email','$phone','$address','$user_summary','$emp_job','$emp','$emp_start_date','$emp_end_date','$emp_descrip','$scho_name','$deg_name','$edu_start_date','$edu_end_date','$edu_city','$edu_summary','$skill_job_title','$skill_emp','$urdu','$urdu_level','$english','$eng_level','$ref_name','$ref_comp_name','$ref_phone','$ref_email','$other_name','$other_city','$other_start_date','$other_end_date')
            ");

            return $query;
        }

    }

?>