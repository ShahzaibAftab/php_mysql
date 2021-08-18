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
    <form class=" container" action="registration_insert.php" method="post" enctype="multipart/form-data">
    <h2 style=" font-family: 'Adamina';font-size: 22px;" >Student S2020 Registration</h2>
    <div class="form-group">
<label>Your Name:</label>
<input type="text" class="form-control" name="sname" placeholder="Your name">
</div>
<div class="form-group">
<label>Password:</label>
<input type="password" class="form-control" name="pwd" placeholder="Your password">
</div>
<div class="form-group">
<label>Your Registration id:</label>
<input type="text" class="form-control" name="regid" placeholder="Registration number">
</div>
<div class="form-group">
<label>Batch:</label>
<input type="text" class="form-control" name="batch" placeholder="Fall">
</div>
<div class="form-group">
    <label>Select your Section:</label>
<select name="section" class="custom-select">
    <option selected>Select Section</option>
    <option value="sectionA">Section A</option>
    <option value="sectionB">Section B</option>
    <option value="sectionC">Section C</option>
  </select>
</div>
<div class="form-group">
<label>Contact No:</label>
<input type="text" class="form-control" name="contact" placeholder="Cell #">
</div>
<div class="form-group">
<label>File</label>
<input type="file" class="form-control" name="image" placeholder="Upload File here">
</div>
<div class="text-center">
<button type="submit" name="submit" class="btn btn-info ml-8 justify-content-center pl-5 pr-5">Register</button>
</div>

</form>
    </div>

</body>
</html>