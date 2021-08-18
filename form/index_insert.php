<?php
include("config.php");
   if(isset($_POST['submit']))
    {
      $_fname=$_POST['fname'];
      $_mname=$_POST['mname'];
      $_lname=$_POST['lname'];
      $_d=date('d-m-Y', strtotime($_REQUEST['birth']));
      $_company=$_POST['company'];
      $_title=$_POST['title'];
      $_area=$_POST['city'];
      $_gender=$_POST['gender'];
      $_photo=$_POST['cv'];
      $_email=$_POST['mail'];
      $_comments=$_POST['comments'];


        echo "Your first name: $_fname".'<br>'; 
        echo "Your mid name: $_mname".'<br>';
        echo "your last name: $_lname".'<br>'; 
        echo "Your date of birth is: $_d".'<br>';
        echo "Current company name: $_company".'<br>';
        echo "Job title: $_title".'<br>';
        echo "Your locality: $_area".'<br>';
        echo "Gender: $_gender".'<br>';
        echo "Uploaded Photo: $_photo".'<br>';
        echo "Your email: $_email".'<br>';
        echo "Comments: $_comments".'<br>';
      }
      $res=mysqli_query($datastore,"insert into tb_user(first_name,middle_name,sur_name,dateofbirth,company_name,job_title,city,gender,upload_cv,email_address,message)
      values('$_fname','$_mname','$_lname','$_d','$_company','$_title','$_area','$_gender','$_photo','$_email','$_comments')");
     //header("location:records.php");   
    ?>