<?php
include('config.php');

$uid=$_GET["uid"];
$delete= "delete from registered_students where Userid='$uid'";
$q=mysqli_query($Save,$delete);

header("Location:table.php");

?>