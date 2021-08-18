<?php
include("config.php");
?>
<head>

</head>
<body>
<table border="2">
<tr>
<th>Full name</th>
<th>Mid name</th>
<th>Last name</th>
<th>Company</th>
<th>Title</th>
<th>Choice</th>
</tr>
<?php
$var=mysqli_query($datastore,"select * form userTable where session_id=$sessid");
while($var_data=mysqli_fetch_array($var))
{
    $fname=$var_data['full_name'];
    $mname=$var_data['mid_name'];
    $lname=$var_data['last_name'];
    $company=$var_data['_com'];
    $title=$var_data['_titl'];
    $choice=$var_data['_ch'];
    $email=$var_data['email'];

}
?>
<tr>

<td><?php echo  $fname;?> </td>
<td><?php echo  $mname;?> </td>
<td><?php echo  $lname;?> </td>
<td><?php echo  $company;?> </td>
<td><?php echo  $title;?> </td>
<td><?php echo  $choice;?> </td>
<td><?php echo  $email;?> </td>
</tr>


</table>
</body>