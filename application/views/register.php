<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Faculty</title>
</head>
<style>
table, td, th
{
border:1px solid HotPink;
}
#header
{
background-color: MediumBlue;
color:white;
}
th
{
background-color: MediumBlue;
color:white;
}
#buttons
{
    background-color: MediumBlue;
    color:white;
    padding: 4px;
    width: 115px;
    border-radius: 6px;
}
#list
{
    text-align: center;
}
#container
{
    margin: auto;
}
</style>
<body>
<table width="600" border="0" align="center">
	<tr>
		<td id="header">
			<h2>Records Management System</h2>
			<h4>Human Resource Office | University of the Immaculate Conception</h4>
		</td>
	</tr>
	<tr>
		 <td>
            <a href="http://localhost/hr_recordsystem/">
                <input id="buttons" name="New" type="button" value="Home">
            </a>
            <a href="http://localhost/hr_recordsystem/index.php/home/login">
                <input id="buttons" name="New" type="button" value="Login">
            </a>
            <a href="http://localhost/hr_recordsystem/index.php/home/add">
                <input id="buttons" name="New" type="button" value="Register">
            </a>
        </td>
	</tr>
</table>
<br/>
<?php echo form_open("home/add");?>

	<table width="600" border="0" align="center">

		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Username: </td>
			<td><?php echo form_input($username); ?></td>
		</tr>
		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Password: </td>
			<td><?php echo form_input($password); ?></td>
		</tr>
		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Last Name: </td>
			<td><?php echo form_input($lastname); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">First Name:</td>
			<td><?php echo form_input($firstname); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Middle Name:</td>
			<td><?php echo form_input($middlename); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Gender:</td>
			<td><?php echo form_dropdown('gender',$gender); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Religion:</td>
			<td><?php echo form_input($religon); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Date of Birth:</td>
			<td><?php echo form_input($bday); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Place of Birth:</td>
			<td><?php echo form_input($birthplace); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">City Address:</td>
			<td><?php echo form_input($city_add); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Province Address:</td>
			<td><?php echo form_input($prov_add); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Telephone Number:</td>
			<td><?php echo form_input($tell_no); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Cellphone Number:</td>
			<td><?php echo form_input($cell_no); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Email Address:</td>
			<td><?php echo form_input($email); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Civil Status:</td>
			<td><?php echo form_dropdown('civil_stat', $civil_stat); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">User Type:</td>
			<td><?php echo form_dropdown('user_type', $user_type); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Status:</td>
			<td><?php echo form_dropdown('status', $status); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Rank:</td>
			<td><?php echo form_dropdown('rank', $rank); ?></td>
		</tr>
		
		<tr>
			<td align="right" bgcolor="#FFFFFF">&nbsp;</td>
			<td>
				<?php echo form_submit('submit', 'Register');?>
				<?php echo form_reset('reset', 'Clear');?>
		</tr>
	</table>
	
	
	
<?php echo form_close();
?>


</body>
</html>
