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
			<td><?php echo form_input($username); ?></td>
		</tr>
		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Password: </td>
			<td><?php echo form_input($password); ?></td>
		</tr>
		<tr>
			<td width="130" align="left" bgcolor="#FFFFFF">Last Name: </td>
			<td><?php echo form_input($lname); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">First Name:</td>
			<td><?php echo form_input($fname); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Middle Name:</td>
			<td><?php echo form_input($mname); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Gender:</td>
			<td><?php echo form_input($gender); ?></td>
		</tr>
		<tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Date of Birth:</td>
			<td><?php echo form_input($bday); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">Civil Status: </td>
			<td><?php echo form_input($civ_stat); ?></td>
		</tr>
		<tr>
			<td align="left" bgcolor="#FFFFFF">City Address:</td>
			<td><?php echo form_input($email); ?></td>
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