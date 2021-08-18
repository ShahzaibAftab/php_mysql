<?php
@include'config.php'
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Display Record</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body>
 <table class="table table-dark">
<thead>
    <tr>
        <th>User ID</th>
        <th>Student Name</th>
        <th>Password</th>
        <th>Registration ID</th>
        <th>Batch</th>
        <th>Section</th>
        <th>Contact</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <a href="logout.php">Logout</a>
    <?php
$q=mysqli_query($Save,"select * from registered_students where session_id='$sessid'");
while($q_data=mysqli_fetch_array($q))
{
    $data_id=$q_data['Userid'];
    $data_name=$q_data['StudentName'];
    $data_password=$q_data['Password'];
    $data_regid=$q_data['Registrationid'];
    $data_batch=$q_data['batch'];
    $data_section=$q_data['Section'];
    $data_contact=$q_data['contact'];
    $user_picture=$q_data['user_picture'];

?>
<tr>
    <td><?php echo"$data_id"?></td>
    <td><?php echo"$data_name"?></td>
    <td><?php echo"$data_password"?></td>
    <td><?php echo"$data_regid"?></td>
    <td><?php echo"$data_batch"?></td>
    <td><?php echo"$data_section"?></td>
    <td><?php echo"$data_contact"?></td>
    <td><img src="<?php echo $user_picture;?>" width="30" height="20"></td>
    <td><a href="registration.php">Add</a> | <a href="registration_edit.php?uid=<?php echo $data_id; ?>">Edit</a> | <a href="reg_del.php?uid=<?php echo $data_id; ?>">Delete</a></td>
</tr>
<?php } ?>
</tbody>
</table>    

 </body>
 </html>