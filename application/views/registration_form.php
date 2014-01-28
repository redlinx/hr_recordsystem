
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registeration</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin-top:50px;
		margin: auto;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		width: 60%;
		
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
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
		  border-top-color: MediumBlue;
		  
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
    <h1>Web Based Records Management System</h1>
	
    <div id="body">
             <code>REGISTER NEW APPLICANT</code>

<center>


<?php



for($x=0;$x<count($program);$x++)
{
	$program_option[$program[$x]['prog_id']] = $program[$x]['prog_name'];
}


echo "<table>";

$this->load->helper('form');
echo form_open('register_faculty/add_new_record');
echo "<tr><td>Last Name</td><td>".form_input('lname')."</td></tr>";
echo "<tr><td>First Name</td><td>".form_input('fname')."</td></tr>";
echo "<tr><td>Middle Name</td><td>".form_input('mname')."</td></tr>";
echo "<tr><td>Birthday</td><td>".form_input('bday')."</td></tr>";
echo "<tr><td>Gender</td><td>".form_input('gender')."</td></tr>";
echo "<tr><td>Civil Status</td><td>".form_input('civStat')."</td></tr>";
echo "<tr><td>Cell No.</td><td>".form_input('cellNo')."</td></tr>";
echo "<tr><td>Tell No.</td><td>".form_input('tellNo')."</td></tr>";
echo "<tr><td>Email Name</td><td>".form_input('email')."</td></tr>";
echo "<tr><td>Username</td><td>".form_input('username')."</td></tr>";
echo "<tr><td>Password</td><td>".form_password('userpass')."</td></tr>";
echo "<tr><td>Program</td><td>".form_dropdown('program',$program_option)."</td></tr>";
echo "<tr><td colspan=2>".form_submit('mysubmit', 'Register')."</td></tr>";
echo form_close();

echo "</table>";

?>

