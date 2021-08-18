<?php
include 'config.php';
if(isset($_POST['submit']))
{
$vname=$_POST['sname'];
$vpassword=$_POST['pwd'];
$vregis=$_POST['regid'];
$vbatch=$_POST['batch'];
$vsec=$_POST['section'];
$vcontact=$_POST['contact'];
//=======================================
$target_path = "user_photo/";
$target_path = $target_path . basename( $_FILES['image']['name']);
$target_path = "user_photo/";
$target_path = $target_path . basename( $_FILES['image']['name']);
$Target = $target_path;
move_uploaded_file($_FILES['image']['tmp_name'], $target_path);
//=========================================

echo"Student Name: $vname".'<br>';
echo"password: $vpassword".'<br>';
echo"Registration No: $vregis".'<br>';
echo"Batch: $vbatch".'<br>';
echo"Section: $vsec".'<br>';
echo"Contact: $vcontact".'<br>';
}
$data=mysqli_query($Save,"insert into registered_students(StudentName,Password,Registrationid,batch,Section,contact,user_picture,session_id)
 values('$vname','$vpassword','$vregis','$vbatch','$vsec','$vcontact','$Target','$sessid')" );
 header("Location:table.php")
?>