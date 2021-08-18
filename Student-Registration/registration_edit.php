<?php
@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
</head>

<body>
<?php
$uid=$_GET["uid"];
$q=mysqli_query($Save,"select * from registered_students where Userid='$uid'");
while($q_data=mysqli_fetch_array($q))
{
    $data_id=$q_data['Userid'];
    $data_name=$q_data['StudentName'];
    $data_password=$q_data['Password'];
    $data_regid=$q_data['Registrationid'];
    $data_batch=$q_data['batch'];
    $data_section=$q_data['Section'];
    $data_contact=$q_data['contact'];
}
?>
    <form class=" container" action="registration_update_insert.php" method="post" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $data_id; ?>" name="user_id">
    <h2 style=" font-family: 'Adamina';font-size: 22px;" >Student S2020 Registration</h2>
    <div class="form-group">
<label>Your Name:</label>
<input type="text" class="form-control" name="sname"  value="<?php echo $data_name; ?>">
</div>
<div class="form-group">
<label>Password:</label>
<input type="password" class="form-control" name="pwd"  value="<?php echo $data_password; ?>">
</div>
<div class="form-group">
<label>Your Registration id:</label>
<input type="text" class="form-control" name="regid" value="<?php echo $data_regid; ?>">
</div>
<div class="form-group">
<label>Batch:</label>
<input type="text" class="form-control" name="batch" value="<?php echo $data_batch; ?>">
</div>
<div class="form-group">
    <label>Select your Section:</label>
<select name="section" class="custom-select">
    <option selected>Select Section</option>
    <option value="<?php echo $data_section; ?>" selected><?php echo $data_section; ?></option>
    <option value="sectionB">Section B</option>
    <option value="sectionC">Section C</option>
  </select>
</div>
<div class="form-group">
<label>Contact No:</label>
<input type="text" class="form-control" name="contact" value="<?php echo $data_contact; ?>">
</div>
<div class="text-center">
<button type="submit" name="submit" class="btn btn-info ml-8 justify-content-center pl-5 pr-5">Update</button>
</div></form>
    </div>

</body>
</html>