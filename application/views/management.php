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
#infoMessage p{
	padding: .8em;
	margin-bottom: 1em;
	border: 2px solid #ddd;
	background: #FFF6BF;
	color: #817134;
	border-color: #FFD324;
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
		</td>
	</tr>
	<tr>
		<td><div id="infoMessage"><?php echo $message;?></div></td>
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
<form name="list" method="post">
	<input type="hidden" name="rid" />
	<input type="hidden" name="command" />
	<table width="600" align="center">
		<tr>
			<th>ID No</th>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Delete</th>
		</tr>
		<?php
		foreach ($users as $user){
			$user_id = $user['id'];
		?>
			<tr>
				<td><?php echo $user['id'] ?></td>
				<td><?php echo $user['lastname'] ?></td>
				<td><?php echo $user['firstname'] ?></td>
				<td>
					<?php 
						echo anchor('index.php/home/delete/'.$user_id, 'Delete', array('onClick' => "return confirm('Are you sure you want to delete?')"));
					?>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</form>
</body>
</html>