<?php
session_start();
$sessid=session_id();
$servername="localhost";
$username="root";
$password="";
$dbname="technocation";

$datastore=mysqli_connect($servername,$username,$password,$dbname);
if(!$dbname)
{
    die("connection Failed". mysqli_connect_error());
}
?>
