<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
  </head>
  <body>
    <form action="index_insert.php" autocomplete="on" method="post" enctype="multipart/form-data">
      <fieldset>
        <h3><u><b>Please Fill the Form</b></u></h3>
       <label> First name:</label><input type="text" maxlength="10" min="5" placeholder="First name" required name="fname" /><br><br>

        <label>Mid name:</label><input type="text" placeholder="Midname" maxlength="10" min="2" name="mname"/><br><br>

        <label>Sur-name:</label> <input type="text" placeholder="Last name" required name="lname"/><br><br>
        
       <label> DOB:</label> <input type="date" placeholder="Date of Birth" value="<?php echo date('m-d-Y') ?>" style="margin-left: 28px; " name="birth"/><br><br>

       <label>Company:</label> <input type="text" placeholder="Company Name" name="company"/><br><br>

       <label>Title:</label> <input type="text" style="margin-left:30px" name="title"/><br><br>

      <label>Select your City: </label>
      <select name="city">
        <option value="area">--Area-- </option>
        <option value="LHR">LHR</option>
        <option value="GRW" >GRW</option>
        <option value="DSK">DSK</option>
        <option value="FSD"> FSD</option>
      </select>
      
      <br >
      <br >
      <label>Select your Gender</label>
      <input type="radio" name="gender" value="male" /> male <input type="radio" name="gender" value="female" /> female
      <input type="radio" name="gender"/> rather not say <br><br>
      <label>Upload your CV</label>
      <input type="text" name="cv"/><br>
      <br>
      <label>Email:</label>
      <input type="email" placeholder=" write your email" required style="margin-left: 30px;" name="mail"/>
      <br ><br>
      <label>Comments:</label><br>
      <textarea row="3" style="margin-left:70px" placeholder="Your suggestions" name="comments"></textarea><br><br>

      <input type="submit" value="login" name="submit" /><input type="reset" value="Cancel request" style="margin-left:20px">
      </fieldset>
    </form>

  </body>
</html>