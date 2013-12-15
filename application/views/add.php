<html>
<head>
	<title> Registration</title>
	<link href="design.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div align="center">
	<h2> Web Based Records Management System</h2>
	<h3> Human Resource Office | University of the Immaculate Conception</h3>
</div>
<hr>
<h2> Faculty Registration </h2>

<?php echo form_open("add/insert");?>

	<table width="600" border="0" align="left">

		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Username: </td>
			<td><input type="text" name="username" value="<?php echo set_value('username'); ?>"  size="30" required /></td>
		</tr>
		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Password: </td>
			<td><input type="text" name="password" value="<?php echo set_value('password'); ?>" size="30" required /></td>
		</tr>
		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Last Name: </td>
			<td><input type="text" name="lname" value="<?php echo set_value('fname'); ?>"  size="30" required /></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">First Name:</td>
			<td><input type="text" name="fname" value="<?php echo set_value('lname'); ?>"  size="30" required /></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Middle Name:</td>
			<td><input type="text" name="mname" value="<?php echo set_value('mname'); ?>"  size="30" required /></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Gender:</td>
			<td><input type="text" name="gender" value="<?php echo set_value('gender'); ?>"  size="30" required /></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Date of Birth:</td>
			<td><input type="text" name="bday" value="<?php echo set_value('bday'); ?>"  size="30" required /></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Civil Status: </td>
			<td><input type="text" name="civ_stat" value="<?php echo set_value('civ_stat'); ?>" size="30" required /></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Email Address:</td>
			<td><input type="text" name="email" value="<?php echo set_value('email'); ?>" size="30" required /></td>
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