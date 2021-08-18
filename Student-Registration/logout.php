<?php
include("config.php");
$uupdate=mysqli_query($Save,"update registered_students set session_id='0' where session_id='$sessid'");
header("Location:login.php");
?>