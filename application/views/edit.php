<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
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

#list
{
	text-align: center;
}

</style>
</head>
<body>
<table width="600" border="0" align="center">
	<tr>
		<td id="header">
			<h2>Records Management System</h2>
			<h4>Human Resource Office| University of the Immaculate Conception</h4>
			<hr>
			<h3>Faculty Profile</h3>
		</td>
	</tr>
	<tr>
		<td>
			<a href="http://localhost/hr_recordsystem/">
				<input name="New" type="button" value="Home">
			</a>
			<input name="New" type="button" value="Register" onclick="window.location='index.php/home/add'" />
		</td>
	</tr>
</table>
<h1> Buang c Cah </h1>

<?php print_r($users); ?>
	
</body>
</html>