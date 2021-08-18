<?php
@include 'config.php';
if(isset($_POST['submit']))
{
$vname=$_POST['sname'];
$vpassword=$_POST['pwd'];
$vregis=$_POST['regid'];
$vbatch=$_POST['batch'];
$vsec=$_POST['section'];
$vcontact=$_POST['contact'];
$user_id=$_POST['user_id'];

echo"Student Name: $vname".'<br>';
echo"password: $vpassword".'<br>';
echo"Registration No: $vregis".'<br>';
echo"Batch: $vbatch".'<br>';
echo"Section: $vsec".'<br>';
echo"Contact: $vcontact".'<br>';
}

 $data=mysqli_query($Save,"update registered_students set StudentName='$vname',Password='$vpassword',Registrationid='$vregis',batch='$vbatch',Section='$vsec',contact='$vcontact' where Userid='$user_id'");
 header("Location:table.php")
?>