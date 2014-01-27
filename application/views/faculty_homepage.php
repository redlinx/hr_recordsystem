
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		width: auto;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
                margin-left:auto;
                margin-right:auto;
                
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h2 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container" align="center">
<?php
	// echo '<pre>';
	// print_r($faculty_profile);
	// echo '</pre>'; 
echo "<h2>My Profile</h2>";
?>
<div id="body">
<table align="center">
<?php

	echo form_open();

		echo "<tr><td>Last Name</td><td>".form_input('lastname', $faculty_profile['lastname'])."</td></tr>";

	echo "<code<tr><td>First Name</td><td>".form_input('firstname', $faculty_profile['firstname'])."</td></tr></code>";
		echo "<tr><td>Middle Name</td><td>".form_input('middlename', $faculty_profile['middlename'])."</td></tr>";
                echo "<tr><td>Birthday</td><td>".form_input('bday', $faculty_profile['bday'])."</td></tr>";
		echo "<tr><td>Gender</td><td>".form_input('gender', $faculty_profile['gender'])."</td></tr>";
		echo "<tr><td>Civil Status</td><td>".form_input('civil_status', $faculty_profile['civil_status'])."</td></tr>";
		echo "<tr><td>Cell #</td><td>".form_input('cell_no', $faculty_profile['cell_no'])."</td></tr>";
		echo "<tr><td>Tell #</td><td>".form_input('tell_no', $faculty_profile['tell_no'])."</td></tr>";
		echo "<tr><td>Email </td><td>".form_input('email', $faculty_profile['email'])."</td></tr>";
		echo "<tr><td>Program</td><td>".form_input('program', $faculty_profile['prog_name'])."</td></tr>";
	echo form_close();
?>

</table></div>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>


</div>