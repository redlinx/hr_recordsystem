<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<<<<<<< HEAD
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
#home, #reg
{
    background-color: MediumBlue;
    color:white;
=======
<title>Home</title>
<style>
table
{
	border:1px solid HotPink;
	border-radius: 6px;
}
td, th
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
#username, #pass
{
    background-color: white;
    color:black;
    width: 150px;
    border-radius: 6px;

>>>>>>> 9597603ecce8e253b669931963715a9e19b491ce
}

#list
{
    text-align: center;
}
#container
{
    margin: auto;
}
<<<<<<< HEAD
	
=======
>>>>>>> 9597603ecce8e253b669931963715a9e19b491ce
</style>
</head>
<body>
<table width="600" border="0" align="center">
	<tr>
		<td id="header">
			<h2>Records Management System</h2>
			<h4>Human Resource Office | University of the Immaculate Conception</h4>
		</td>
	</tr>
	<tr>
<<<<<<< HEAD
		<td><div id="infoMessage"><?php echo $message;?></div></td>
	</tr>
	<tr>
		<td>
            <a href="http://localhost/hr_recordsystem/">
                <input id="home" name="New" type="button" value="Home">
            </a>
            <a href="http://localhost/hr_recordsystem/index.php/home/login">
                <input id="home" name="New" type="button" value="Login">
            </a>
            <a href="http://localhost/hr_recordsystem/index.php/home/register">
                <input id="home" name="New" type="button" value="Register">
            </a>
            <a href="http://localhost/hr_recordsystem/index.php/home/management">
                <input id="home" name="New" type="button" value="Faculty">
            </a>
        </td>
	</tr>
=======
		<td id="nav">
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
	<tr>
>>>>>>> 9597603ecce8e253b669931963715a9e19b491ce
</table>
<form name="list" method="post">
	<input type="hidden" name="rid" />
	<input type="hidden" name="command" />
	<table width="600" align="center">
		<tr>
<<<<<<< HEAD
			<th>ID No</th>
			<th>Last Name</th>
			<th>First Name</th>
			<th>View</th>
			<th>Delete</th>
			<th>Edit</th>
=======
			<th>Username</th>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Delete</th>
>>>>>>> 9597603ecce8e253b669931963715a9e19b491ce
		</tr>
		<?php
		foreach ($users as $user){
			$user_id = $user['id'];
		?>
			<tr>
<<<<<<< HEAD
				<td><?php echo $user['id'] ?></td>
=======
				<td><?php echo $user['username'] ?></td>
>>>>>>> 9597603ecce8e253b669931963715a9e19b491ce
				<td><?php echo $user['lastname'] ?></td>
				<td><?php echo $user['firstname'] ?></td>
				<td>
					<?php 
<<<<<<< HEAD
						echo anchor('home/view/'.$user_id, 'View');
					?>
				</td>
				<td>
					<?php 
						echo anchor('index.php/home/delete/'.$user_id, 'Delete', array('onClick' => "return confirm('Are you sure you want to delete?')"));
					?>
				</td>
				<td>
					<?php 
						echo anchor('home/edit/'.$user_id, 'Edit');
=======
						echo anchor('home/delete/'.$user_id, 'Delete', array('onClick' => "return confirm('Are you sure you want to delete?')"));
>>>>>>> 9597603ecce8e253b669931963715a9e19b491ce
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