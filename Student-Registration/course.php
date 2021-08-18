<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add course</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <links rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
<style>
    label{
        font-family: 'Langar', cursive;
    }   
</style>
</head>
<body>
<a href="logout.php">Logout</a>
    <div class="container shadow pt-3" style="padding-top:10%">
    <form method="post" action="">
    <h1 class="d-flex justify-content-center text-white bg-primary" style="padding-top:20px; padding-bottom:20px">Dear Candidate, Select courses from the following</h1>
    <div class="custom-control custom-checkbox " style="padding-top:30px">

    <input type="checkbox" name="course1" value="Introduction to Computing">
      <label >Introduction to Computing</label>

    <span style=" padding-left:30px"></span>
      <input type="checkbox" name="course2" value="Linear Algebra">
      <label  >Linear Algebra</label>

      <span style=" padding-left:30px"></span>
      <input type="checkbox" name="course3" value="Software Requirements Engineering">
      <label  >Software Requirements Engineering</label>

      <span style=" padding-left:30px"></span>
      <input type="checkbox" name="course4" value="Foreign language">
      <label  >Foreign language</label>

      <br><span style=" padding-left:30px"></span>
      <input type="checkbox" name="course5" value="Human-Computer interaction">
      <label  >Human-Computer interaction</label>
<br><br>
      <span style="padding-left:500px"><input class="btn btn-info" type="submit" name="submit" value="Add"></span>
    </div>
    </form>
    </div><!--container-->
</body>
</html>
<?php
include 'config.php';

if(isset($_POST['submit']))
{
$course1=$_POST['course1'];
$course2=$_POST['course2'];
$course3=$_POST['course3'];
$course4=$_POST['course4'];
$course5=$_POST['course5'];

}
$data=mysqli_query($Save,"insert into addedcourses(course1,course2,course3,course4,course5)
 values('$course1','$course2','$course3','$course4','$course5')" );
?>