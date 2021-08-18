<?php
session_start();
$sessid=session_id();
$servername="localhost";
$username="root";
$password="";
$dbname="universityofcentralpunjab";

$Save=mysqli_connect($servername,$username,$password,$dbname);
if(!$Save)
{
    die("connection Failed". mysqli_connect_error());
}
else
{
    echo"connection successful";
}
$q=mysqli_query($Save,"select * from registered_students where session_id='$sessid'");
$u_name="";
$u_pass="";
$session_id="abc";
while($q_data=mysqli_fetch_array($q))
{
	$u_name=$q_data['user_name'];
	$u_id=$q_data['userid'];
	//$u_pass=$q_data['password'];
	$session_id=$q_data['session_id'];
}
?>