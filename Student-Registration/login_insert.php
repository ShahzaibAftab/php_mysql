<?php include('config.php'); ?>
<?php

$regid=$_POST['regid'];
$pwd=$_POST['pwd'];
$ll=mysqli_query($Save,"select * from registered_students where Registrationid='$regid' and Password='$pwd'");
$Registrationid="";
$Password="";
if($ll === FALSE) {
    die(mysqli_connect_error()); // TODO: better error handling
}
while($hh_data=mysqli_fetch_array($ll))
{
	$Registrationid=$hh_data['Registrationid'];
	$Password=$hh_data['Password'];
	
}
if(($regid == $Registrationid) && ($pwd == $Password))
{
    //echo "user name passwor is correct";
    $update=mysqli_query($Save,"update registered_students set session_id='$sessid'where Registrationid='$regid' and Password='$pwd'");
	header("Location:table.php");
}
else
{
	echo "Reg no and password is incorrect";
	
}

?>